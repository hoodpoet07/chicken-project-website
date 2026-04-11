<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTK FARM</title>
    <link rel="icon" type="png" href="icons/image.png" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 id="admin-hd">ADMIN</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="add-user-form">
        <input type="text" id="username" name="username" required placeholder="Enter your Username" class="add-user">
        <input type="password" id="password" name="password" required placeholder="Enter your Password" class="add-user">
        <input type="text" id="role" name="role" required placeholder="Enter your Role" class="add-user"><br>
        <input class="add-btn" type="submit" value="ADD USER">
    </form>
</body>
</html>

<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', '$role')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('User added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding user: " . mysqli_error($conn) . "');</script>";
    }
}
?>