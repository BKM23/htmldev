<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    
    <form action="">
        <label for="Fn">Full name:</label><br>
        <input type="text" id="Fn" placeholder="fullname"><br><br>
        <label for="ag">Age:</label><br><br>
        <input type="number" id="ag" placeholder="Age"><br><br>
        <label for="psd">Pass:</label><br><br>
        <input type="password" id="psd" placeholder="Pass"><br><br>
        <label for="mail">Email:</label><br><br>
        <input type="email" id="mail" placeholder="Email Address"><br><br>
        <input type="color" placeholder=""><br>
        <input type="range"  placeholder=""><br>
        <input type="date" placeholder=""><br>
        <input type="time" placeholder="">

        <label for="Basic">Basic</label><br>
        <input type="radio" id="Basic" name="level"><br>
        <label for="Intermediate">Intermediate</label><br>
        <input type="radio" id="Intermediate" name="level"><br>
        <label for="Advanced">Advanced</label><br>
        <input type="radio" id="Advanced" name="level"><br>

        <br><br>
    <label for="Swahili">Swahili</label>
    <input type="checkbox" id="Swahili" value="Swahili" name="Swahili" ><br>
    <label for="English">English</label>
    <input type="checkbox" id="English" value="English" name="English" ><br>
    <label for="Spanish">Spanish</label>
    <input type="checkbox" id="Spanish" value="Spanish" name="Spanish" ><br>
    <label for="Japanese">Japanese</label>
    <input type="checkbox" id="Japanese" value="Japanese" name="Japanese" ><br>

    <br>
    <textarea cols="30" rows="10"></textarea>

    <br>
    <select name="" id="">
        <option value="">--Select Gender--</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Rather not say</option>
    </select>
    <br><br>
    <input type="submit" value="Save Input">
    </form>
</body>
</html>