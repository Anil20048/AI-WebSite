<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

// Handle delete
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_id'])) {
  $id = intval($_POST['delete_id']);
  $conn->query("DELETE FROM form_submissions WHERE id=$id");
}

// Get data
$sql = "SELECT * FROM form_submissions ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Blogs</title>

   <!-- hader -->
   <?php include("hader.php"); ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
     
    }

    .container-bl {
      width: 90%;
      margin: auto;
      margin-top: 20px;
    }

    .card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      margin-top: 10px;
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-header h2 {
      font-family: serif;
      margin: 0;
      font-weight: 900;
    }

    .card-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 15px;
    }

    button {
      background:rgb(37, 37, 37);
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .edit-button {
      background: #28a745;
    }

    .delete-button {
      background: #dc3545;
    }

    button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container-bl">
    <h1>Blog Manager</h1>

    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="card">
        <div class="card-header">
          <h2><?php echo htmlspecialchars($row['name']); ?></h2>
        </div>

        <div class="card-buttons">
          <a href="blog_view.php?id=<?php echo $row['id']; ?>">
            <button>View</button>
          </a>
          <a href="blog_edit.php?id=<?php echo $row['id']; ?>">
            <button class="edit-button">Edit</button>
          </a>
          <form method="POST" style="display:inline;">
            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="delete-button" onclick="return confirm('Delete this blog?')">Delete</button>
          </form>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
   <!-- footer -->
   <?php include("footer.php"); ?>
</body>
</html>
