<?php
include 'db.php';
include 'cache.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "UPDATE student_details SET name='$name', class='$class', phone_number='$phone', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        fetchAndCacheData($conn, $memcache); 
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .container { width: 300px; margin: auto; }
        .button { background-color: #007BFF; color: white; padding: 10px; text-decoration: none; display: inline-block; margin-top: 10px; border-radius: 5px; }
        .button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h2>Edit Student</h2>
    <div class="container">
        <form method="POST">
            ID: <input type="text" name="id" required><br><br>
            Name: <input type="text" name="name" required><br><br>
            Class: <input type="text" name="class" required><br><br>
            Phone: <input type="text" name="phone" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            <input type="submit" value="Update">
        </form>
        <a href="index.php" class="button">Back</a>
    </div>
</body>
</html>
