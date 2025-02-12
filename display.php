<?php
include 'db.php';
include 'cache.php';

$students = getCachedData($conn, $memcache);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .table { margin: auto; border-collapse: collapse; width: 50%; }
        .table th, .table td { border: 1px solid black; padding: 10px; text-align: center; }
        .button { background-color: #007BFF; color: white; padding: 10px; text-decoration: none; display: inline-block; margin-top: 10px; border-radius: 5px; }
        .button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h2>Student List</h2>
    <table class="table">
        <tr><th>ID</th><th>Name</th><th>Class</th><th>Phone</th><th>Email</th></tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student["id"]; ?></td>
                <td><?php echo $student["name"]; ?></td>
                <td><?php echo $student["class"]; ?></td>
                <td><?php echo $student["phone_number"]; ?></td>
                <td><?php echo $student["email"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.php" class="button">Back</a>
</body>
</html>
