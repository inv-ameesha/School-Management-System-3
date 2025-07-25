<?php require 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="POST" action="student_register.php">
        Name: <input name="name" required><br><br>
        Reg No: <input name="reg_no" required><br><br>
        Email: <input name="email" required><br><br>
        Phone: <input name="phone" required><br><br>
        Course:
        <select name="course">
            <option value="bca">BCA</option>
            <option value="bsc">BSC</option>
            <option value="ba">BA</option>
            <option value="btech">BTECH</option>
        </select><br><br>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>