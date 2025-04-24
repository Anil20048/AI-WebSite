<?php
require '../smtp/PHPMailerAutoload.php';

// Ensure that blog ID is provided in the URL query
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid blog ID.");
}

$blog_id = intval($_GET['id']);  // Fetch blog ID from the URL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $comment = htmlspecialchars(strip_tags($_POST['comment']));

    // Check if fields are empty
    if (empty($name) || empty($email) || empty($comment)) {
        echo "
        <html>
        <head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
        <body>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all fields!'
            }).then(() => {
                 window.location.href = 'blog.php?id=$blog_id';
            });
        </script>
        </body>
        </html>";
        exit;
    }

    try {
        // PHPMailer setup
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ay7838872@gmail.com';
        $mail->Password = 'gnix bcid twap etfr'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('ay7838872@gmail.com', 'Blog Comment');
        $mail->addAddress('ay7838872@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "New Blog Comment on Blog ID #$blog_id";
        $mail->Body = "
            <h3>New Blog Comment</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Blog ID:</strong> $blog_id</p>
            <p><strong>Comment:</strong><br>$comment</p>
        ";

        $mail->send();

        echo "
        <html>
        <head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
        <body>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Comment Sent!',
                text: 'Thank you for your feedback!'
            }).then(() => {
                 window.location.href = 'blog.php?id=$blog_id';
            });
        </script>
        </body>
        </html>";
    } catch (Exception $e) {
        echo "
        <html>
        <head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
        <body>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Could not send comment: {$mail->ErrorInfo}'
            }).then(() => {
                 window.location.href = 'blog.php?id=$blog_id';
            });
        </script>
        </body>
        </html>";
    }

    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leave a Comment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- hader -->
   <?php include("hader.php"); ?>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .comment-form-wrapper {
      max-width: 50%;
      margin: 80px auto;
      padding: 30px;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border-radius: 12px;
    }
    .comment-form-wrapper h2 {
      text-align: center;
      margin-bottom: 25px;
      font-family: serif;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="comment-form-wrapper">
      <h2>Leave a Comment</h2>
      <form method="post" action="">
        <input type="hidden" name="blog_id" value="<?php echo $blog_id; ?>">

        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
          <textarea name="comment" class="form-control" placeholder="Your Comment" rows="4" required></textarea>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Send Comment</button>
        </div>
      </form>
    </div>
  </div>
    <!-- footer -->
    <?php include("footer.php"); ?>
</body>
</html>
