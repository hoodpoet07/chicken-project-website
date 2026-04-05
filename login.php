<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTK FARM</title>
    <link rel="icon" type="png" href="icons/image.png" />
    <link rel="stylesheet" href="style.css">
</head>
<body id="login-page">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
        <h2>JTK FARM LOGIN</h2>
        <img src="icons/image.png" alt="JTK Farm Logo" class="login-logo">
    
        
        <input type="text" id="username" name="username" required placeholder="Enter your Username" class="login-input">
        <br><br>
        <input type="password" id="password" name="password" required placeholder="Enter your Password" class="login-input">
        <br><br>
        <input class="login-btn" type="submit" value="Login">
    </form>
</body>
</html>
<?php
 include 'config.php';

?>