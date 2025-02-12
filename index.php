<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h2 {
            color: #333;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Student Management System</h2>
    <p>Choose an action:</p>
    <div class="container">
        <a href="insert.php" class="button">Insert</a>
        <a href="edit.php" class="button">Edit</a>
        <a href="delete.php" class="button">Delete</a>
        <a href="display.php" class="button">Display</a>
    </div>
</body>
</html>
