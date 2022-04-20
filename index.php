<?php 
    $servername = "localhost";
    $username = "pruthvi";
    $password = "pass123%";
    $database = "charusat_gym";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if(isset($_POST['first-name'])) {

        $first_name = $_POST['first-name'];
        $middle_name = $_POST['middle-name'];
        $last_name = $_POST['last-name'];
        $name_of_institute = $_POST['name-of-institute'];
        $name_of_department= $_POST['name-of-department'];
        $student_id = $_POST['student-id'];
        $residential_address = $_POST['residential-address'];
        $mobile_no = $_POST['mobile-no'];
        $e_mail = $_POST['e-mail'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];

        $query = "INSERT INTO record (first_name,middle_name,last_name,name_of_institute,name_of_department,student_id,residential_address,mobile_no,e_mail,DOB,gender) VALUES ('$first_name','$middle_name','$last_name','$name_of_institute','$name_of_department','$student_id','$residential_address',$mobile_no,'$e_mail','$DOB','$gender');";

        if ($conn->query($query) === TRUE) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Submittion Successful")';  
            echo '</script>';  
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    if(isset($_POST['name'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO Feedback (name,email,message) VALUES ('$name','$email','$message');";

        if ($conn->query($query) === TRUE) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Message Send Succcessfully")';  
            echo '</script>';  
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
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
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link smoothScroll">Log In</a>
                    </li>
                </ul>

                
            </div>

        </div>
    </nav>



    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">

                        <h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Charusat
                            fitness</h1>

                        <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get
                            started</a>

                        <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up"
                            data-aos-delay="700">learn more</a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the Charusat Gym?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 3 months for Rs.300</h6>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"
                        data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday -
                                Saturday</strong>

                            <p data-aos="fade-up" data-aos-delay="800">5:00 AM - 7:00 PM</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Gym</h2>

                    <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Hic libero illum consequatur veritatis earum dolores velit ipsa culpa blanditiis commodi sunt
                        impedit aspernatur nesciunt nostrum natus molestias in est voluptatibus non, quidem
                        exercitationem consequuntur dicta officia? Cupiditate sed nobis tempore!</p>
                    <!-- 
                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="#" target="_parent">Gym Fitness </a>, you can <a rel="nofollow" href=##" target="_parent">contact Tooplate</a> immediately. Thank you.</p> -->

                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="../gym/images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Name1</h3>
                            <span> Instructor1</span>

                            <ul class="social-icon mt-3">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up"
                    data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="../gym/images/team/team-image01.jpg" class="img-fluid" alt="Trainer">
                        <div class="team-info d-flex flex-column">

                            <h3>Name2</h3>
                            <span> Instructor2</span>

                            <ul class="social-icon mt-3">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Get A Perfect Body</h6>

                    <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="../gym/images/ge.png" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Yoga</h3>

                            <span><strong>Trained by</strong> - Trainer</span>

                            <span class="class-price">Rs.50</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                        <img src="../gym/images/gp.png" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Areobic</h3>

                            <span><strong>Trained by</strong> - Trainer1</span>

                            <span class="class-price">Rs.66</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                        <img src="../gym/images/gm.png" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Cardio</h3>

                            <span><strong>Trained by</strong> - Trainer2</span>

                            <span class="class-price">Rs.75</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- SCHEDULE -->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                </div>

                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up"
                        data-aos-delay="300">

                        <thead class="thead-light">
                            <th><i class="fa fa-calendar"></i></th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td><small>7:00 am</small></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                                <td>
                                    <strong>Power Fitness</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Yoga Section</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>9:00 am</small></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                                <td>
                                    <strong>Areobic</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>11:00 am</small></td>
                                <td></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>11:00 am - 2:00 pm</span>
                                </td>
                                <td>
                                    <strong>Areobic</strong>
                                    <span>11:30 am - 3:30 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Body work</strong>
                                    <span>11:50 am - 5:20 pm</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>2:00 pm</small></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>2:00 pm - 4:00 pm</span>
                                </td>
                                <td>
                                    <strong>Power lifting</strong>
                                    <span>3:00 pm - 6:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>6:00 pm - 9:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Crossfit</strong>
                                    <span>5:00 pm - 7:00 pm</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400"
                        role="form">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>

                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9. _%+-]+@[a-z0-9. -]+\.[a-z]{3}" required>

                        <textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> CHARUSAT Health Care Campus, Changa Petlad, Anand, Gujarat 388421</p>

                    <div>
                        <img src = "../gym/images/map.jpg" alt="Location of Charusat Gym" width="600" height="300" frameborder="0" style="border:1;" allowfullscreen="">
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

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" action="index.php" class="membership-form webform" role="form">
                        <input type="text" class="form-control" name="first-name" placeholder="First Name" required>

                        <input type="text" class="form-control" name="middle-name" placeholder="Middle Name">

                        <input type="text" class="form-control" name="last-name" placeholder="Last Name" required>

                        <select class="form-control" name="name-of-institute" placeholder="Name of Institute" required>
                            <option value="">Name of Institute</option>
                            </br>
                            <option value="CSPIT">CSPIT</option>
                        </select>

                        <select class="form-control" name="name-of-department" placeholder="Name of Department" required>
                            <option value="">Name of Deparment</option>
                            </br>
                            <option value="CSE">CSE</option>
                            <option value="CE">CE</option>
                            <option value="IT">IT</option>
                            <option value="EC">EC</option>
                            <option value="EE">EE</option>
                            <option value="ME">ME</option>
                        </select>

                        <input type="text" class="form-control" name="student-id" placeholder="Student Id"
                            pattern="[0-9]{2}[A-Z]{2}[0-9]{3}" required>

                        <textarea class="form-control" rows="2" name="residential-address" placeholder="Residential Address"
                            required></textarea>

                        <input type="tel" class="form-control" name="mobile-no" placeholder="PhoneNo."
                            pattern="[0-9]{10}" required>

                        <input type="email" class="form-control" name="e-mail" placeholder="E-mail "
                            pattern="[a-z0-9. _%+-]+@[a-z0-9. -]+\.[a-z]{3}" required>

                        <input type="date" class="form-control" name="DOB" placeholder="Date " required>
                        
                        <label class="my-label">
                            <p>Male:</p>
                            <input type="radio" class="form-control" name="gender" value="Male" Id="radiobutton" />

                            <p style = margin-left:20px > Female:</p> 
                            <input type="radio" class="form-control" name="gender" value="Female" Id="radiobutton"/>
                        </label>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-agree" required>
                            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the
                                <a href="#">Terms &amp; Conditions</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>