<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require '../smtp/PHPMailerAutoload.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
    $department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
    $jobtitle = filter_var($_POST['jobtitle'], FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = "<p style='color:red;'>Invalid email format!</p>";
    } else {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ay7838872@gmail.com';
            $mail->Password = 'gnix bcid twap etfr';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('ay7838872@gmail.com', 'CLOUD SERVICE');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Subscribe to emails";
            $mail->Body = "
                <h2>Subscribe to emails</h2>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Name:</strong> $first $last</p>
                <p><strong>Country:</strong> $country</p>
                <p><strong>Company:</strong> $company</p>
                <p><strong>Department:</strong> $department</p>
                <p><strong>Job Title:</strong> $jobtitle</p>
                <p>Thank you for booking with us!</p>
            ";

            $mail->send();
            $response ="success";
           
        } catch (Exception $e) {
            $response = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./index.js"></script>
    <title>index</title>
</head>

<body>
    <?php include("hader.php"); ?>

    <style>
        .fo {
           
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url("/image/form.jpg");
            margin-top: 30px;
        font-family: Arial, Helvetica, sans-serif;
        }

        .form-ai h1 {
            font-size: 30px;
            text-align: center;
            font-family: serif !important;
        }

        .form-ai p {
            font-size: 20px;
            text-align: center;
            font-family: serif !important;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 650px;
            height: auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        .form-input,
        .form-select {
            padding: 13px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .submit-btn {
            background-color: #08502f;
            color: white;
            border: none;
            padding: 10px;
            width: 30%;
            cursor: pointer;
            border-radius: 4px;
        }

        .submit-btn:hover {
            background-color: #13aa73;
        }
    </style>

    <div class="fo">
        <div class="form-container">
            <div class="form-ai">
                <h1>Subscribe to marketing communications from Oracle</h1>
                <p>Watch your inbox for a link to complete your subscription.</p>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label>First Name *</label>
                    <input type="text" name="first" class="form-input" required>
                </div>
                <div class="form-group">
                    <label>Last Name *</label>
                    <input type="text" name="last" class="form-input" required>
                </div>
                <div class="form-group">
                    <label>Country *</label>
                    <select name="country" class="form-select" required>
                        <option value="">Select Country</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Company *</label>
                    <input type="text" name="company" class="form-input" required>
                </div>
                <div class="form-group">
                    <label>Department *</label>
                    <input type="text" name="department" class="form-input" required>
                </div>
                <div class="form-group">
                    <label>Job Title *</label>
                    <input type="text" name="jobtitle" class="form-input" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let response = "<?php echo $response; ?>";

        if (response === "success") {
            Swal.fire({
                title: 'Success!',
                text: 'Email Send Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = "contact.php";
            });
        } else if (response === "error") {
            Swal.fire({
                title: 'Error!',
                text: 'Email has not been submitted',
                icon: 'error'
            });
        }
    });
</script>
</body>

</html>