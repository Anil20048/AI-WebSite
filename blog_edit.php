<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

// Get blog ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("Invalid blog ID.");
}

$id = intval($_GET['id']);

// Upload handler
function uploadImage($inputName, $existingImage = "") {
  if (!empty($_FILES[$inputName]['name'])) {
    $uploadDir = "uploads/";
    if (!file_exists($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
    $fileName = time() . "_" . basename($_FILES[$inputName]['name']);
    $targetPath = $uploadDir . $fileName;
    if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetPath)) {
      return $targetPath;
    }
  }
  return $existingImage;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $heading1 = $conn->real_escape_string($_POST['heading1']);
  $message1 = $conn->real_escape_string($_POST['message1']);
  $existingImage = $_POST['existing_image'];
  $image1 = uploadImage("image1", $existingImage);

  $updateSql = "UPDATE form_submissions SET 
                name='$name', 
                heading1='$heading1', 
                message1='$message1', 
                image1='$image1' 
                WHERE id=$id";

  if ($conn->query($updateSql)) {
    header("Location: blog_view.php?id=$id");
    exit;
  } else {
    echo "Error updating blog: " . $conn->error;
  }
}

// Fetch existing blog
$sql = "SELECT * FROM form_submissions WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
  die("Blog not found.");
}

$blog = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Blog</title>
   <!-- hader -->
   <?php include("hader.php"); ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .form-container {
      background: white;
      max-width: 800px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      margin-top: 20px;
    }

    h1 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    textarea {
      height: 150px;
      resize: vertical;
    }

    input[type="file"] {
      margin-top: 10px;
    }

    img.preview {
      max-width: 200px;
      margin-top: 10px;
      border-radius: 6px;
    }

    button {
      margin-top: 20px;
      padding: 10px 16px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    a.cancel-link {
      margin-left: 15px;
      color: #888;
      text-decoration: none;
    }

    a.cancel-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Edit Blog</h1>
    <form method="POST" enctype="multipart/form-data">
      <label>Name:</label>
      <input type="text" name="name" value="<?php echo htmlspecialchars($blog['name']); ?>" required>

      <label>Heading:</label>
      <input type="text" name="heading1" value="<?php echo htmlspecialchars($blog['heading1']); ?>" required>

      <label>Message:</label>
      <textarea name="message1"><?php echo htmlspecialchars($blog['message1']); ?></textarea>

      <label>Current Image:</label><br>
      <?php if (!empty($blog['image1'])): ?>
        <img class="preview" src="<?php echo htmlspecialchars($blog['image1']); ?>" alt="Blog Image">
      <?php else: ?>
        <p>No image uploaded.</p>
      <?php endif; ?>

      <input type="hidden" name="existing_image" value="<?php echo $blog['image1']; ?>">

      <label>Upload New Image:</label>
      <input type="file" name="image1">

      <button type="submit">Update Blog</button>
      <a class="cancel-link" href="blog_view.php?id=<?php echo $id; ?>">Cancel</a>
    </form>
  </div>
  <!-- footer -->
  <?php include("footer.php"); ?>
</body>
</html>
