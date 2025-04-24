<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM form_submissions ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Blogs</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <script src="./index.js"></script>

  <?php include("hader.php"); ?>

  <style>
    body {
      background: #f4f4f4;
    }

    .blog-container {
      width: 95%;
      max-width: 1300px;
      margin: auto;
      padding-top: 20px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .blog-title {
      font-family: serif;
      font-size: 2em;
      margin-bottom: 30px;
    }

    .blog-card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .blog-header {
      margin-bottom: 15px;
    }

    .blog-heading {
      font-family: serif !important;
      font-size: 2.8em;
      margin-bottom: 10px;
    }

    .blog-header a {
      text-decoration: none;
      color: #299029;
      display: block;
      margin-top: 10px;
    }

    .blog-header a:hover {
      color: #1d5d1d;
    }

    .author-name {
      font-family: serif !important;
      margin: 0;
      font-size: 2em;
      margin-bottom: 10px;
    }

    .blog-description {
      font-family: serif !important;
      font-size: 1.2em;
      line-height: 1.3;
    }

    .blog-content {
      margin-top: 15px;
    }

    .blog-content img {
      max-width: 100%;
      height: auto;
      display: block;
      border-radius: 6px;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="blog-container">
    <h1 class="blog-title">All Blogs</h1>

    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="blog-card">
        <div class="blog-header">
          <a href="blog_o_p_v.php?id=<?php echo $row['id']; ?>">
            <h3 class="blog-heading"><?php echo htmlspecialchars($row['heading1']); ?></h3>
          </a>
          <h2 class="author-name"><?php echo htmlspecialchars($row['name']); ?></h2>
          <p class="blog-description"><?php echo nl2br(htmlspecialchars($row['message1'])); ?></p>
        </div>

        <div class="blog-content">
          <?php if (!empty($row['image1'])): ?>
            <img src="<?php echo htmlspecialchars($row['image1']); ?>" alt="Blog Image">
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <?php include("footer.php"); ?>
</body>

</html>