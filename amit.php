<?php
$response = ""; // To store the SweetAlert response script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "form_data";

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        $response = "<script>Swal.fire('Error', 'Database connection failed!', 'error');</script>";
    } else {
        if (isset($_POST['handins']) && isset($_POST['message']) && isset($_FILES['image'])) {
            $handins = $_POST['handins'];
            $message = $_POST['message'];

            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            $imageName = basename($_FILES["image"]["name"]);
            $targetFile = $targetDir . time() . "_" . $imageName;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if ($_FILES["image"]["error"] == 0) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check !== false) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                        $stmt = $conn->prepare("INSERT INTO submissions (handins, message, image_path) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $handins, $message, $targetFile);

                        if ($stmt->execute()) {
                            $response = "<script>Swal.fire('Success', '✅ Data saved successfully!', 'success');</script>";
                        } else {
                            $response = "<script>Swal.fire('Error', '❌ Failed to save to database.', 'error');</script>";
                        }

                        $stmt->close();
                    } else {
                        $response = "<script>Swal.fire('Error', '❌ Failed to upload image.', 'error');</script>";
                    }
                } else {
                    $response = "<script>Swal.fire('Error', '❌ File is not a valid image.', 'error');</script>";
                }
            } else {
                $response = "<script>Swal.fire('Error', '❌ Image upload error.', 'error');</script>";
            }
        } else {
            $response = "<script>Swal.fire('Error', '❌ All form fields are required.', 'error');</script>";
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form with Image Upload</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        input,
        textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <?php echo $response; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="handins">Handins:</label>
        <input type="text" id="handins" name="handins" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <label for="image">Choose Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <button type="submit">Submit</button>
    </form>

</body>

</html>
