<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}


function uploadImage($inputName, $uploadDir = "uploads/") {
  if (!empty($_FILES[$inputName]['name'])) {
    if (!file_exists($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
    $fileName = time() . "_" . basename($_FILES[$inputName]['name']);
    $targetPath = $uploadDir . $fileName;
    if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetPath)) {
      return $targetPath;
    }
  }
  return "";
}

$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $heading1 = $conn->real_escape_string($_POST['heading1']);
  $message1 = $conn->real_escape_string($_POST['message1']);
  $image1 = uploadImage("image1");

  $sql = "INSERT INTO form_submissions (
    name, heading1, message1, image1
  ) VALUES (
    '$name', '$heading1', '$message1', '$image1'
  )";

  if ($conn->query($sql)) {
    $submitted = true;
  } else {
    echo "Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog Form </title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-------------header include-->
   <?php include("hader.php"); ?>
  <style>
    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: #f4f4f4;
    
    }
    .container {
      max-width: 700px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-top: 20px;
      margin-bottom: 20px;

    }
    .section {
      margin-bottom: 25px;
    }
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      margin-top: 5px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    textarea {
      height: 100px;
      resize: vertical;
    }
    .file-input {
      margin-top: 10px;
    }
    .submit-button {
      background: #007BFF;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .submit-button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="POST" enctype="multipart/form-data">
      <div class="section">
        <label for="name">Heading:</label>
        <input type="text" name="name" required>
      </div>

      <div class="section">
        <label>Text:</label>
        <input type="text" name="heading1" required>
        <label>Message:</label>
        <textarea name="message1"></textarea>
        <input type="file" name="image1" class="file-input">
      </div>
      <button type="submit" class="submit-button">Submit</button>
    </form>
  </div>

  <?php if ($submitted): ?>
    <script>
      Swal.fire({
        title: 'Success!',
        text: 'Form submitted successfully.',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    </script>
  <?php endif; ?>
    <!-------------footer include-->
    <?php include("footer.php"); ?>
</body>
</html>
