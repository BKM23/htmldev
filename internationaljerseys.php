<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
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

    <h3>International Jerseys</h3>
    <section class="row text-center">
        <div class="col-md-2">
            <div class="card">
                <img src="images/brazil home.jpeg" width="" height="240">
                <!-- card body -->
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>Brazil Home Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/brazil away.jpeg" class="img-fluid" alt="">
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>Brazil Away Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/england home.jpeg" class="img-fluid" alt="">
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>England Home Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/england away.avif" class="img-fluid" alt="">
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>England Away Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/belgium home.jpg" class="img-fluid" alt="">
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>Belgium Home Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/belgium away.jpg" class="img-fluid" alt="">
                <div class="card-body"> 
                    <div class="card-title">
                        <h5>Belgium Away Kit</h5>
                    </div> 
                    <p>Cost: Ksh 1200.00</p> 
                </div>
                <!-- end of body -->
                <div class="card-footer">
                    <a href="" class="btn btn-danger w-75">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>