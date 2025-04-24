<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

// Get data
$sql = "SELECT * FROM form_submissions ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Blogs</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: auto;
    }
    .card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .card-header h2 {
      margin: 0;
      font-size: 1.5em;
    }
    .card-header img {
      width: 100%;
      height: auto;
      border-radius: 6px;
      object-fit: cover;
      margin-top: 15px;
    }
    .card-content {
      margin-top: 15px;
    }
    .card-content h3 {
      font-size: 1.2em;
      margin-bottom: 10px;
    }
    .card-content p {
      font-size: 1em;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>All Blogs</h1>

    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="card">
        <div class="card-header">
          
          <h3><?php echo htmlspecialchars($row['heading1']); ?></h3>
          <h2><?php echo htmlspecialchars($row['name']); ?></h2>
          <p><?php echo nl2br(htmlspecialchars($row['message1'])); ?></p>
          
        </div>

        <div class="card-content">
          <!-- First Heading and Message -->
          <!-- Image displayed if available -->
          <?php if (!empty($row['image1'])): ?>
            <img src="<?php echo htmlspecialchars($row['image1']); ?>" alt="Blog Image">
          <?php endif; ?>
          
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</body>
</html>
