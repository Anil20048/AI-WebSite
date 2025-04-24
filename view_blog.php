<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM form_submissions ORDER BY id DESC LIMIT 1";  
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    $row = null; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Latest Blog Post</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .blog-post {
      margin-bottom: 30px;
      padding: 15px;
      border-radius: 8px;
      background-color: #fafafa;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .blog-post h2 {
      color: #333;
    }
    .blog-post p {
      color: #555;
    }
    .blog-post img {
      max-width: 100%;
      height: auto;
      margin: 10px 0;
    }
    .blog-post .heading {
      font-weight: bold;
    }
    .no-posts {
      text-align: center;
      font-size: 18px;
      color: #888;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Latest Blog Post</h1>

    <?php if ($row): ?>
      <div class="blog-post">
        <h2><?php echo htmlspecialchars($row['name']); ?>'s Blog</h2>
        <div class="section">
          <h3 class="heading"><?php echo htmlspecialchars($row['heading1']); ?></h3>
          <p><?php echo nl2br(htmlspecialchars($row['message1'])); ?></p>
          <?php if (!empty($row['image1']) && file_exists($row['image1'])): ?>
            <img src="<?php echo htmlspecialchars($row['image1']); ?>" alt="Image 1">
          <?php else: ?>
            <p>No image uploaded for this section.</p>
          <?php endif; ?>
        </div>

        
        <div class="section">
          <h3 class="heading"><?php echo htmlspecialchars($row['heading2']); ?></h3>
          <p><?php echo nl2br(htmlspecialchars($row['message2'])); ?></p>
          <?php if (!empty($row['image2']) && file_exists($row['image2'])): ?>
            <img src="<?php echo htmlspecialchars($row['image2']); ?>" alt="Image 2">
          <?php else: ?>
            <p>No image uploaded for this section.</p>
          <?php endif; ?>
        </div>

     
        <div class="section">
          <h3 class="heading"><?php echo htmlspecialchars($row['heading3']); ?></h3>
          <p><?php echo nl2br(htmlspecialchars($row['message3'])); ?></p>
          <?php if (!empty($row['image3']) && file_exists($row['image3'])): ?>
            <img src="<?php echo htmlspecialchars($row['image3']); ?>" alt="Image 3">
          <?php else: ?>
            <p>No image uploaded for this section.</p>
          <?php endif; ?>
        </div>

      
        <div class="section">
          <h3 class="heading"><?php echo htmlspecialchars($row['heading4']); ?></h3>
          <p><?php echo nl2br(htmlspecialchars($row['message4'])); ?></p>
          <?php if (!empty($row['image4']) && file_exists($row['image4'])): ?>
            <img src="<?php echo htmlspecialchars($row['image4']); ?>" alt="Image 4">
          <?php else: ?>
            <p>No image uploaded for this section.</p>
          <?php endif; ?>
        </div>

      </div>
    <?php else: ?>
      <div class="no-posts">
        <p>No blog posts available at the moment.</p>
      </div>
    <?php endif; ?>

  </div>

</body>
</html>

<?php

$conn->close();
?>
