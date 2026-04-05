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