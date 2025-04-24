<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

// Get the blog ID from URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("Invalid blog ID.");
}

$id = intval($_GET['id']);
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
  <title>View Blog</title>
  <!-- hader -->
  <?php include("hader.php"); ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .blog-container {
      background: white;
      max-width: 1100px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      margin-top: 20px;
    }

    h1 {
      font-size: 2em;
      font-family: serif;
      color: #333;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 1.5em;
      color: #333;
      margin-bottom: 20px;
      font-family: serif;
    }

    p {
      font-size: 1.1em;
      line-height: 1.6;
      font-family: serif;
    }

    .blog-image {
      max-width: 100%;
      margin-top: 20px;
      border-radius: 8px;
    }

    a.back-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 16px;
      background:rgb(64, 64, 65);
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    a.back-btn:hover {
      background:rgb(31, 31, 31);
    }
  </style>
</head>
<body>
  <div class="blog-container">
    <h1><?php echo htmlspecialchars($blog['heading1']); ?></h1>
    <h2>Author: <?php echo htmlspecialchars($blog['name']); ?></h2>
    <p><?php echo nl2br(htmlspecialchars($blog['message1'])); ?></p>

    <?php if (!empty($blog['image1'])): ?>
      <img src="<?php echo htmlspecialchars($blog['image1']); ?>" alt="Blog Image" class="blog-image">
    <?php endif; ?>

    <a href="blog.php" class="back-btn">Back to Blog Manager</a>
  </div>
  <!-- footer -->
  <?php include("footer.php"); ?>
</body>
</html>
