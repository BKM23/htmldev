<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include_once("templates/style.php") ?>
</head>
<body>
<?php include_once("templates/nav.php")?>
    <form action="">
        <label for="username">Username</label><br><br>
        <input type="text" id="username" name="username" placeholder="username"> <br><br>
        <label for="email">Email</label><br><br>
        <input type="text" id="email" name="email" placeholder="email"><br><br>
        <label for="Password"  id="password"> Password</label><br><br>
        <input type="password" name="password" placeholder="password"> <br><br> 
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>