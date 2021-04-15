<?php
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("conection die due to ".mysqli_connect_error());
    }
    // echo "Successfully Connected to db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `prof`.`prof`(`name`, `email`, `subject`, `message`, `dt`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
      // echo "succesfully Inserted";
    }

    else{
      echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prasanna Bajare</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- font awesome-->
    <script src="./js/all.js"></script>
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="style_resume.css">

    <script>
         alert("Welcome To Prasanna's Webpage");
        function cls(){
             confirm("Are You Sure You Want To leave?");
             window.close();
        }
    </script> 
</head>

<body>
    <!--navbar-->
    <nav class="navbar py-3 navbar-light navbar-expand-sm">
        <!--logo-->
        <a href="#" class="navbar-brand text-uppercase font-italic bg-dark text-white"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item active"><a href="#header" class="nav-link">Home</a>
                </li>
                <li class="nav-item"><a href="#skills" class="nav-link">Skills</a>
                </li>
                <li class="nav-item"><a href="#progress" class="nav-link">Progress</a>
                </li>
                <li class="nav-item"><a href="#about-section" class="nav-link">About</a>
                </li>
                <li class="nav-item"><a href="#education-section" class="nav-link">Education</a>
                </li>
                <li class="nav-item"><a href="#certificates-section" class="nav-link">Certificates</a>
                </li>
                <li class="nav-item"><a href="#contact-section" class="nav-link">Contact</a>
                </li>
                <li class="nav-item"><a href="#footer-section" class="nav-link">Enquiry</a>
                </li>

            </ul>
        </div>
    </nav>
    <!--end of navbar-->
    <section class="s" id="header">
        <div class="fluid-container text-white">
            <div class="row">
                <div class="col-lg-8 col-md-6 d-flex">
                    <div class="texas">
                        <span class="subheading">Hey! I am</span>
                        <h1>Prasanna bajare</h1>
                        <h2>I'm a :</h2><br/>
                            <h2><ul>
                                <li>Student</li><br/>
                                <li>Programmer</li><br/>
                                <li>Web Developer</li><br/>
                            </ul>
                            </h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills section-->
    <section id="skills" class=" sk py-5 bg-dark">
        <div class="container">
            <!--title-->
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-4 text-uppercase text-white mb-0">
                        <strong>skills</strong>
                    </h1>
                </div><br/>
                <!--end of title-->
                <div class="row">
                    <!--single col-->

                    <div class="col-md-6 col-lg-3 text-center my-4">
                        <i class="fab fa-java fa-5x text-danger"></i>
                        <h3 class="text-uppercase text-white my-3">Java</h3>
                        <p class="text-info">Java is Class-based object oriented programming language.Java applications are compiled to bytecode that can run on any Java virtual machine regardless of the underlying computer architecture.</p>
                        <a href="https://www.coursera.org/projects/learn-programming-java" class="btn btn-outline-danger btn-block text-uppercase">click here</a>
                    </div>
                    
                    <!--end of single col-->

                    <!--single col-->

                    <div class="col-md-6 col-lg-3 text-center my-4">
                        <i class="fab fa-html5 fa-5x text-danger"></i>
                        <h3 class="text-uppercase text-white my-3">Html5</h3>
                        <p class="text-info">HTML term represents two different concepts.HTML5 is a new version of the language HTML with attributes and a larger set of technologies that allows building of more diverse and powerful Web sites,applications.</p>
                        <a href="https://www.coursera.org/programs/rmd-sinhgad-school-of-engineering-warje-on-coursera-ylq9p/browse?currentTab=MY_COURSES&productId=nQ5d7TbQEeWW9BKhJ4xW0Q&productType=course&query=introduction+to+HTML5&showMiniModal=true" class="btn btn-outline-danger btn-block text-uppercase">click here</a>
                    </div>
                    <!--end of single col-->

                    <!--single col-->

                    <div class="col-md-6 col-lg-3 text-center my-4">
                        <i class="fab fa-css3 fa-5x text-danger"></i>
                        <h3 class="text-uppercase text-white my-3">Css3</h3>
                        <p class="text-info">CSS3 contains just about everything that's included in CSS2.New features in CSS3 include support for additional selectors,drop shadows,rounded corners,updated layout features,animation.</p>
                        <a href="https://www.coursera.org/programs/rmd-sinhgad-school-of-engineering-warje-on-coursera-ylq9p?currentTab=MY_COURSES&productId=Vh4RJTk8EeWJaxK5AT4frw&productType=course&showMiniModal=true" class="btn btn-outline-danger btn-block text-uppercase">click here</a>
                    </div>
                    <!--end of single col-->

                    <!--single col-->

                    <div class="col-md-6 col-lg-3 text-center my-4">
                        <i class="fab fa-js fa-5x text-danger"></i>
                        <h3 class="text-uppercase text-white my-3">Java Script</h3>
                        <p class="text-info">JavaScript is interpreted programming language with object-oriented capabilities.It is most commonly used as a part of web pages,whose implementations allow client-side script to interact with the user and make dynamic pages.</p>
                        <a href="https://www.coursera.org/learn/javascript?" class="btn btn-outline-danger btn-block text-uppercase">click here</a>
                    </div>
                    <!--end of single col-->
                </div>
            </div>
        </div>
    </section>
    <!--end of skill section-->


    <!--Progress section-->
    <section id="progress" class="pr p-5">
        <div class="co">
            <!--section-title-->
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-4 text-uppercase text-dark mb-0">
                        <strong>Progress</strong>
                    </h1><br/>
                    <div class="title-underline text-dark">
                        <h3>About My Progress In Language Understanding</h3>
                    </div>
                </div>
            </div>
            <!--end of section-title-->
            <div class="row">
                <div class="col md-8 mx-auto">
                    <!--progress bar single-->
                    <div class="prog my-3 text-dark d-flex justify-content-between">
                        <h3>html</h3>
                        <h3>80%</h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <!--progress bar single-->
                    <div class="prog my-3 text-dark d-flex justify-content-between">
                        <h3>css3</h3>
                        <h3>70%</h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <!--progress bar single-->
                    <div class="prog my-3 text-dark d-flex justify-content-between">
                        <h3>js</h3>
                        <h3>60%</h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <!--progress bar single-->
                    <div class="prog my-3 text-dark d-flex justify-content-between">
                        <h3>bootstrap</h3>
                        <h3>60%</h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--end of Progress section-->
    <!--about section-->
    <section class="about" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
              
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="col-md-0 my-3 about-picture height-80"></div>
                        <img src="about-me.jpg" class="img1 img-fluid rounded-square" alt="about">
                    </div>
                </div>
                <div class=" col-md-6 col-lg-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="about col-md-12 ">
                            <h1 class="big">About:</h1>
                            <br>
                            <h2 class="mb-4">About Me</h2>
                            <p>I am a 3rd year Computer Engineering Student studying at RMD Sinhgad School of Engineering, Pune. I like to work on Web Development Projects.</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>Prasanna Bajare</span> </li>
                                <br>
                                <li class="d-flex"><span>Date of birth:</span> <span>18 december,2000</span></li>
                                <br>
                                <li class="d-flex"><span>Address:</span> <span>Pune,India</span></li>
                                <br>
                                <li class="d-flex"><span>Email:</span> <span>bajareprasanna@gmail.com</span></li>
                                <br>
                                <li class="d-flex"><span>Phone:</span> <span>8600242466</span></li>

                            </ul>
                        </div>
                    </div>

                </div>
              
            </div>
        </div>

    </section>

    <section class="about">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6 col-lg-3 text-center my-4">
                    <i class="fab fa-html5 fa-5x text-danger"></i>
                    <h3 class="text-uppercase my-3">Html5</h3>
                </div>

                <div class="col-md-6 col-lg-3 text-center my-4">
                    <i class="fab fa-css3 fa-5x text-danger"></i>
                    <h3 class="text-uppercase my-3">Css3</h3>
                </div>

                <div class="col-md-6 col-lg-3 text-center my-4">
                    <i class="fab fa-python fa-5x text-danger"></i>
                    <h3 class="text-uppercase my-3">Python</h3>
                </div>
            </div>
        </div>
    </section>

    <!--Education-->
    <section class="education" id="education-section">
        <div class="col-sm-9 py-3">
            <div id="page-1" class="page one">
                <div class="resume d-flex">
                    <h2 class="heading">Education:</h2>
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    


                    <div class="tex">
                        <span class="date">2018-2022:</span>
                        <h2>Bachelor of Computer Engineering</h2>
                        <span class="position"><h5><b>Savitribai Phule Pune University</b></h5></span>
                        <span class="position">Rmd Sinhgad School of Engineering, Pune<br></span>
                    </div>



                    <div class="image col-md-6 my-0">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236.49611063964048!2d73.7966972041306!3d18.48647777504209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb088b75f8f%3A0x499414447665729d!2sRMD%20SINHGAD%20TECHNICAL%20INSTITUTE%20CAMPUS!5e0!3m2!1sen!2sin!4v1607073091959!5m2!1sen!2sin"
                                width="450" height="400" frameborder="5.5" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p>RMD Sinhgad Technical Institute Campus</p>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="resume-wrap d-flex">
                    <div class="text pl-3">
                        <span class="date">2016-2018:</span>
                        <h2>11th and HSC</h2>
                        <span class="position">Sangola Vidyamandir Junior College,Sangola</span>
                        <span class="position"><h5><b>Punyashlok Ahilyadevi Holkar Solapur University</b></h5></span>
                        <span class="position">75.08%</span>
                    </div>

                    <div class="col-md-6 my-0">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.321327941967!2d75.19322571435394!3d17.444327905753077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6a7abf4975623%3A0x554f17f08eaff946!2sSangola%20Vidyamandir%20Prashala%2C%20Sangola!5e0!3m2!1sen!2sin!4v1607074925877!5m2!1sen!2sin"
                                width="450" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <label>Sangola Vidyamandir Jr.College Sangola</label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>


                <div class="resume-wrap d-flex">
                    <div class="text pl-3">
                        <span class="date">2015</span>
                        <h2>SSC</h2>
                        <span class="position">Sangola Vidyamandir Junior College,Sangola</span>
                        <span class="position"><h5><b>Punyashlok Ahilyadevi Holkar Solapur University</b></h5></span>
                        <span class="position">85.40%</span>
                    </div>

                    <div class="col-md-6 my-0">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.321327941967!2d75.19322571435394!3d17.444327905753077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6a7abf4975623%3A0x554f17f08eaff946!2sSangola%20Vidyamandir%20Prashala%2C%20Sangola!5e0!3m2!1sen!2sin!4v1607074925877!5m2!1sen!2sin"
                                width="450" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Certificates-->
    <section class="certificate bg-dark text-white" id="certificates-section">
        <div class="col-sm-9 py-3">
            <div id="page-4" class="page four">
                <h2 class="hea text-around">Certificates :</h2>
                <div class="car">
            
                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">Oct 2020</span>
                        <h2>Programming for Everybody (Getting Started with Python)</h2>
                        <span class="position">Coursera</span>
                        <p><a href="python.pdf">View Certificate</a></p>
                    </div>
                </div><br/>

                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">Oct 2020</span>
                        <h2>Introduction to HTML5</h2>
                        <span class="position">Coursera</span>
                        <p><a href="HTML.pdf">View Certificate</a></p>
                    </div>
                </div><br/>

                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">Mar 2020</span>
                        <h2>Introduction to Data Science</h2>
                        <span class="position">LinkedIn</span>
                        <p><a href="CertificateOfCompletion_Introduction to Data Science.pdf">View Certificate</a></p>
                    </div>
                </div><br/>

                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">March 2021</span>
                        <h2>Javascript Essential Training</h2>
                        <span class="position">Linkedin</span>
                        <p><a href="CertificateOfCompletion_JavaScript Essential Training.pdf">View Certificate</a></p>
                    </div>
                </div><br/>

                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">March 2021</span>
                        <h2>Python Essential Training</h2>
                        <span class="position">Linkedin</span>
                        <p><a href="CertificateOfCompletion_Python Essential Training.pdf">View Certificate</a></p>
                    </div>
                </div><br/>

            </div>
            <br/>
                <!--section-title-->
                <div class="row text-center">
                    <div class="col text-center">
                        <div class="title-underline bg-warning"></div>
                    </div>
                </div><br>
                <!--end of section-title-->
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <div id="example" class="carousel slide" data-ride='carousel'>
                            <!-- indicators-->
                            <ul class="carousel-indicators bg-dark">
                                <li data-target="#example" data-slide-to='0' class="active"></li>
                                <li data-target="#example" data-slide-to='1'></li>
                                <li data-target="#example" data-slide-to='2'></li>
                                <li data-target="#example" data-slide-to='3'></li>
                                <li data-target="#example" data-slide-to='4'></li>

                            </ul>
                            <!--images-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Getting-started-with-python.PNG" alt="project" class="d-block w-100">
                                </div>

                                <div class="carousel-item">
                                    <img src="HTML5.PNG" alt="certificate" class="d-block w-100">
                                </div>

                                <div class="carousel-item">
                                    <img src="DS.PNG" alt="certificate" class="d-block w-100">
                                </div>

                                <div class="carousel-item">
                                    <img src="js.PNG" alt="certificate" class="d-block w-100">
                                </div>

                                <div class="carousel-item">
                                    <img src="python-essential.PNG" alt="certificate" class="d-block w-100">
                                </div>

                                <!-- end of images-->
                                <!--controls-->
                                <a href="#example" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark"></span>
                                    <a href="#example" class="carousel-control-next " data-slide="next">
                                        <span class="carousel-control-next-icon bg-dark"></span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--contact Section-->

    <section class="contact ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Me</h2>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-6 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://8600242466">+91-8600242466</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-6 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div class="">
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:bajareprasanna@gmail.com">bajareprasanna@gmail.com</a></p>
		        </div>
	        </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="s.php" method="post" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex">
          	<div class="img">
                <img src="about-me.jpg" alt="My photo">
            </div>
          </div>
         </div>
      </div>
    </section>

    <footer class="footer" id="footer-section">
        <div class="container">
        <div class="t">Lets Keep In Touch!!</div>
            <div class="sp row mb-5 justify-content-around">
                <div class="col-md">
                    <div class="ft mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>I'm a Computer Engineering Student currently studying at RMD Sinhgad School Of Engineering, Pune</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul>
                            <li><a href="#header">Home</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#progress">Progress</a></li>
                            <li><a href="#about-section">About</a></li>
                            <li><a href="#education-section">Education</a></li>
                            <li><a href="#certificates-section">Certificates</a></li>
                            <li><a href="#contact-section">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Any Doubt?</h2>
                        <div class="block-23 mb-3">
                            <ol>
                                <li><a href="#"><span class="fas fa-phone-alt"></span><span class="text">8600242466</span></a></li>
                                <li>
                                    <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span class="fas fa-envelope"></span><span class="text">bajareprasanna@gmail.com</span></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="https://www.facebook.com/prasanna.bajare.7" class="btn">
                        <i class="fab fa-facebook fa-3x text-primary m-2"></i>
                    </a>
                    <a href="https://twitter.com/prasann40734647" class="btn">
                        <i class="fab fa-twitter fa-3x text-primary m-2"></i>
                    </a>
                    <a href="https://www.facebook.com/prasanna.bajare.7" class="btn">
                        <i class="fab fa-instagram fa-3x text-primary m-2"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/prasanna-bajare-71233b207/" class="btn">
                        <i class="fab fa-linkedin fa-3x text-primary m-2"></i>
                    </a>
                    <button type="button" onclick="cls()" class="btn btn-danger d-block mx-auto my-3" data-toggle="modal" data-target="#modal">log out</button>
                </div>
            </div>
        </div>
    </footer>

            
        
    







    <!-- Jqueiry -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!-- java script-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
