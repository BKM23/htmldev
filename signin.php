<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <?php include_once("templates/style.php") ?>
</head>
<body>
<?php include_once("templates/nav.php")?>
    <div class="container">
        <h1>Sign in</h1>
        <form id="signinForm" action="/first-repo/processes/User_processes.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <span id="usernameError" class="error"></span>
            </div><br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error"></span>
            </div>
            <input type="submit" name="signin" class="btn btn-primary" value="Sign in">
        </form>
    </div>
</body>
</html>