<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
        <style>
            .active-link {
                background-color: purple;
                color: black;
                padding: 15px;
            }

            /* hover only on the nav items */
            .nav-item:hover {
                background-color: white;
                color: black;
                padding: 8px;
            }
        </style>
</head>
<body>
<?php include_once("templates/nav.php")?>


    <h2>Subscribe to our newsletter</h2>
    <h4>Get notified when we have restocked your favorite jerseys</h4>
    <form action="">
        <label for="Fn">Name:</label><br>
        <input type="text" id="Fn" placeholder="Name"><br><br>
        <label for="email">Age:</label><br><br>
        <input type="email" id="email" placeholder="Email Address"><br><br>
        <input type="submit">
    </form>
</body>
</html>