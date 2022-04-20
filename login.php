<?php 
    $servername = "localhost";
    $username = "pruthvi";
    $password = "pass123%";
    $database = "charusat_gym";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if(isset($_POST['first-name'])) {

        $username = $_POST['user-name'];
        $password= $_POST['pass-word'];

        $query = "SELECT * From Users WHERE User_name = ($username) AND Pass_word = ($password)";

        if ($conn->query($query) === TRUE) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Submittion Successful")';  
            echo '</script>';
            header(location:index.php);
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        header(location:index.php);
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>CHARUSAT GYM</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/charusat-gym-style.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php" >CHARUSAT GYM</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">

                <div class="nav-item">
                        <a href="register.php" class="nav-link smoothScroll">Sign Up</a>
                </ul>

            </div>

        </div>
    </nav>


    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="container1">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center" style="margin-left: 100px;margin-right: 100px;">
                        <h4 class="text-white" data-aos="fade-up" data-aos-delay="500">LOG IN</h4>
                        <form method="post" action="register.php" class="membership-form webform" role="form">
                        <label class = "login">
                            <p style = "margin-top : 20px; color: white;" data-aos="fade-up" data-aos-delay="500">Username</p>
                                <input style = "margin-left: 50px; margin-right: 100px;" type="text" class="form-control" data-aos="fade-up" data-aos-delay="500" name="user-name" value=""required />
                        </label>
                        <label class = "login">
                            <p style = "margin-top : 20px; color: white;" data-aos="fade-up" data-aos-delay="500">Password</p>
                                <input style = "margin-left: 57px; margin-right: 100px;" type="password" class="form-control" data-aos="fade-up" data-aos-delay="500" name="pass-word"required>
                        </label>
                        <button type="submit" class = "btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="800">Log In</button>
                        <a href="register.php" class = "btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="800" title = "If You are new to our site, please register to our site first." >Register </a>
                        <p> </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p style =" font-size: small; transform: translateY(5px);">Made by: Pruthvi Raj, Tarsh Pathak, Tanvi Radia</p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="#">gym@charusat.ac.in</a>
                    </p>
                    
                    <p><i class="fa fa-phone mr-1"></i> 01002-30343</p>

                    <p>
                    <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                    </p>

                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>