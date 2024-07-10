<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <?php include_once("templates/style.php") ?>
</head>
<body>
    <?php include_once("templates/nav.php")?>
    <h1>Enter User Details</h1>
    <form id="signupForm" action="/htmldev/processes/user_processes.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
                <span id="fullnameError" class="error"></span>
            </div><br>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <span id="usernameError" class="error"></span>
            </div><br>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div><br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error"></span>
            </div><br>
            <input type="submit" name="signup" class="btn btn-primary" value="Sign up">
            <a href="sign-in.php" class="btn btn-secondary">Already have an account? Sign in</a>
        </form>
</body>
</html>