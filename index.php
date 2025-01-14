<?php
session_start();
if(isset($_POST['reseme'])){
    header("content-type: application/pdf");
    readfile('file/reseme.pdf');
    exit;
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--========= Style switcher========= -->
    <link rel="stylesheet" href="css/skin/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/skin/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/skin/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/skin/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/skin/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="css/style-witcher.css">
</head>

<body>
    <!-- main container start -->
    <div class="main-container">
        <!-- Aside Start -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>A</span>Lice</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i> Services</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i> Portifolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
            </ul>
        </div>
        <!-- Aside End -->
        <!-- Main content start -->
        <div class="main-content">
            <!-- Home section Start -->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span class="name">Namubiru Alice</span></h3>
                            <h3 class="my-profession">I' m a <span class="typing">Web designer</span></h3>
                            <p>I' m a web Designer with extensive experience for over 3 year.My expertise is to create
                                and design website, developing Management Systems, and many more...
                            </p>
                            <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="image/alice.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home section End -->
            <!-- About section Start -->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm Namubiru Alice and <span>Fullstack web Developer</span></h3>
                                    <p>

                                        Passionate software engineer dedicated to creating innovative and efficient
                                        solutions. As an aspiring software engineer, I am enthusiastic about learning
                                        and applying the latest technologies. I thrive on finding creative solutions to
                                        complex problems, specializing in PHP and bringing a high level of expertise to
                                        every project.
                                        A collaborative team player, I enjoy working with cross-functional teams to
                                        achieve project success.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>16th Dec 2002</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>23years</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website : <span>namubirualice2000@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>namubirualice2000@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree : <span>DSE</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone : <span>+256 753436748</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Entebbe-Kitala</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance : <span>Available</span></p>
                                        </div>
                                        <div class="row">
                                            <div class="buttons padd-15">
                                                <form action="#" class="open" method="post" target="_blank">
                                                    <button class="btn" name="reseme">Download CV</button>
                                                </form>
                                                <a href="#contact" class="btn hire-me">Hire Me</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 80%;"></div>
                                                <div class="skill-percent">80%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP, Laravel and Codeigneiter</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 80%;"></div>
                                                <div class="skill-percent">80%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 98%;"></div>
                                                <div class="skill-percent">98%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>CSS and Bootstrap</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 95%;"></div>
                                                <div class="skill-percent">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark"> -->
                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!
                                                    </p>
                                                </div> -->

                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!</p>

                                                </div> -->

                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark"> -->
                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!</p>

                                                </div> -->

                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!</p>

                                                </div> -->

                            <!------ timeline-item ---------->
                            <!-- <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Diploma in Software engineering</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Provident laboriosam perspiciatis harum, quidem delectus omnis
                                                        fugit distinctio
                                                        sit exercitationem aperiam hic labore inventore velit obcaecati
                                                        reiciendis cumque
                                                        dignissimos mollitia cum!</p>

                                                </div>
                                            </div>
                                        </div> -->
                            <!-- </div>
                                </div> -->
                            <!-- </div>
                        </div>
                    </div>
                </div>
            </section> -->
                            <!-- About section End -->
                            <!-- service section start -->
                            <section class="service section" id="services">
                                <div class="container">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Services</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- -----Services item  start ----------->
                                    <div class="service-item padd-15">
                                        <div class="service-item-inner">
                                            <div class="icon">
                                                <i class="fa fa-laptop-code"></i>
                                            </div>
                                            <h4>Management Systems</h4>

                                        </div>
                                    </div>
                                    <!-- -----Services item  end ----------->
                                    <!-- -----Services item  start ----------->
                                    <div class="service-item padd-15">
                                        <div class="service-item-inner">
                                            <div class="icon">
                                                <i class="fa fa-palette"></i>
                                            </div>
                                            <h4>Database Management</h4>

                                        </div>
                                    </div>
                                    <!-- -----Services item  end ----------->
                                    <!-- -----Services item  start ----------->
                                    <div class="service-item padd-15">
                                        <div class="service-item-inner">
                                            <div class="icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <h4>Wed Development</h4>
                                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aliquam aut id?</p> -->
                                        </div>
                                    </div>
                                    <!-- -----Services item  end ----------->

                                </div>
                            </section>
                            <!-- service section End -->
                            <!-- portfolio section start -->
                            <section class="portfolio section" id="portfolio">
                                <div class="container">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Portifolio</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="portfolio-heading padd-15">
                                            <h2>My Last Projects :</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!---=== portfolio item start ======-->
                                        <div class="portfolio-item padd-15">
                                            <div class="portfolio-item-inner shadow-dark">
                                                <div class="portfolio-img">
                                                    <a href="#"><img src="image/pharmacy.png" alt=""></a>
                                                </div>
                                                <p>PHARMACY MANAGEMENT SYSTEM</p>
                                            </div>
                                        </div>
                                        <!---=== portfolio item end ======-->
                                        <!---=== portfolio item start ======-->
                                        <div class="portfolio-item padd-15">
                                            <div class="portfolio-item-inner shadow-dark">
                                                <div class="portfolio-img">
                                                    <a href="#"> <img src="image/HRMS.png" alt=""></a>
                                                </div>
                                                <p>DASHBOARD</p>
                                            </div>
                                        </div>
                                        <!---=== portfolio item end ======-->
                                        <!---=== portfolio item start ======-->
                                        <div class="portfolio-item padd-15">
                                            <div class="portfolio-item-inner shadow-dark">
                                                <div class="portfolio-img">
                                                    <a href="#"><img src="image/school.png"></a>
                                                </div>
                                                <P>SCHOOL WEBSITE</P>
                                            </div>
                                        </div>
                                        <!---=== portfolio item end ======-->

                                    </div>
                                </div>
                            </section>
                            <!-- portfolio section End -->
                            <!-- contact section start -->
                            <div class="contact section" id="contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Contact Me</h2>
                                        </div>
                                    </div>
                                    <h3 class="contact-title padd-15">Do Have Any Questions ?</h3>
                                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICE</h4>
                                    <div class="row">
                                        <!-- contact-info-item-start -->
                                        <div class="contact-info-item padd-15">
                                            <div class="icon"><i class="fa fa-phone"></i></div>
                                            <h4>Call us on</h4>
                                            <p>+256 7568 56058</p>
                                        </div>
                                        <!-- contact-info-item-end -->
                                        <!-- contact-info-item-start -->
                                        <div class="contact-info-item padd-15">
                                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                                            <h4>Address</h4>
                                            <p>Entebbe-Kitala</p>
                                        </div>
                                        <!-- contact-info-item-end -->
                                        <!-- contact-info-item-start -->
                                        <div class="contact-info-item padd-15">
                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                            <h4>Email</h4>
                                            <p>namubirualice2000@gmail.com</p>
                                        </div>
                                        <!-- contact-info-item-end -->
                                        <!-- contact-info-item-start -->
                                        <div class="contact-info-item padd-15">
                                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                                            <h4>website</h4>
                                            <p>namubirualice2000@gmail.com</p>
                                        </div>
                                        <!-- contact-info-item-end -->
                                    </div>
                                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                                    <h4 class="contact-sub-title padd-15">I'M VERY RESPONSIVE TO MESSAGES</h4>
                                    <!----CONTACT FORM------>
                                    <form action="send.php" method="post">
                                        <div class="row">
                                            <div class="message">
                                                <?php
                            if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                                unset($_SESSION['message']); // Clear the session message after displaying it
                            }
                            ?>
                                            </div>

                                            <div class="contact-form padd-15">

                                                <div class="row">

                                                    <div class="form-item col-6 padd-15">
                                                        <div class="form-group">
                                                            <input type="text" name="name" required class="form-control"
                                                                placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-item col-6 padd-15">
                                                        <div class="form-group">
                                                            <input type="email" name="email" required
                                                                class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-item col-12 padd-15">
                                                        <div class="form-group">
                                                            <input type="text" name="subject" required
                                                                class="form-control" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-item col-12 padd-15">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" required id=""
                                                                placeholder="Message..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-item col-12 padd-15">
                                                        <button class="btn" name="send" type="submit">Send
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- contact section end -->
                        </div>
                        <!-- Main content end -->
                    </div>
                    <!-- main container end -->
                    <!-- style switcher starts here -->
                    <div class="style-switcher">
                        <div class="style-switcher-toggler s-icon">
                            <i class="fas fa-cog fa-spin"></i>
                        </div>
                        <div class="day-night s-icon">
                            <i class="fas "></i>
                        </div>
                        <h4>Theme colors</h4>
                        <div class="colors">
                            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
                            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
                            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
                            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
                            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
                        </div>
                    </div>
                    <!-- style switcher ends here -->
                    <!-- JS Files -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.16/typed.umd.js"></script>
                    <script src="js/script.js"></script>
                    <script src="js/style-switcher.js"></script>
</body>

</html>