<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "SELECT * FROM form_submissions WHERE id = $id LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $blog = $result->fetch_assoc();
  } else {
    die("Blog not found.");
  }
} else {
  die("Invalid blog ID.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($blog['heading1']); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php include("hader.php"); ?>
  <style>
    body {
      background: #f9f9f9;
      font-family: Arial, sans-serif;
    }
    .blog-container {
      max-width: 1200px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .blog-container h1 {
      font-family: serif;
      font-size: 2em;
      margin-bottom: 10px;
    }
    .blog-container h2 {
      font-family: serif;
      font-size: 1.4em;
      color: #666;
      margin-bottom: 20px;
    }
    .blog-container img {
      max-width: 100%;
      border-radius: 8px;
      margin: 20px 0;
    }
    .blog-container p {
      font-family: serif;
      font-size: 1.1em;
      line-height: 1.6;
    }
    .back-link {
      display: inline-block;
      margin-top: 30px;
      text-decoration: none;
      color:rgb(72, 72, 72);
    }
  </style>
</head>
<body>
  <div class="blog-container">
    <h1><?php echo htmlspecialchars($blog['heading1']); ?></h1>
    <h2>by <?php echo htmlspecialchars($blog['name']); ?></h2>
    <p><?php echo nl2br(htmlspecialchars($blog['message1'])); ?></p>
    <?php if (!empty($blog['image1'])): ?>
      <img src="<?php echo htmlspecialchars($blog['image1']); ?>" alt="Blog Image">
    <?php endif; ?>
    <a class="back-link" href="blog.php">&larr; Back to All Blogs</a>
    <a href="send_comment.php?id=<?php echo $blog['id']; ?>" class="btn btn-primary mt-0">Add Comment</a>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>
