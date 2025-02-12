<?php
include 'db.php';
include 'cache.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];

    $sql = "DELETE FROM student_details WHERE id=$id AND name='$name'";
    
    if ($conn->query($sql) === TRUE) {
        fetchAndCacheData($conn, $memcache); 
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .container { width: 300px; margin: auto; }
        .button { background-color: #007BFF; color: white; padding: 10px; text-decoration: none; display: inline-block; margin-top: 10px; border-radius: 5px; }
        .button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h2>Delete Student</h2>
    <div class="container">
        <form method="POST">
            ID: <input type="text" name="id" required><br><br>
            Name: <input type="text" name="name" required><br><br>
            <input type="submit" value="Delete">
        </form>
        <a href="index.php" class="button">Back</a>
    </div>
</body>
</html>
