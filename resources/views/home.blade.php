<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('assets/images/light_logo_1.png')}}">

    <!-- ICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/styles/main.css')}}">

    <!-- PLUGIN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>Website Portfolio Saya</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary-new fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#header">
            <h4>N Q A</h4>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#header" class="nav-link  ml-0 ml-md-4">Home </a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link  ml-0 ml-md-4" href="#">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="#skill" class="nav-link  ml-0 ml-md-4" href="#">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link  ml-0 ml-md-4" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#certificate" class="nav-link  ml-0 ml-md-4" href="#">Certificates</a>
                </li>
                
            </ul>
        </div>
        </div>
    </nav>

    <section id="header" class="section-header" data-aos="fade-up" data-aos-duration="1000">
       <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 my-4 text-wrapper">
                    <div class="small-text">Hey, I am Nayla Qanita Alifia 👋 </div>
                    <div class="title">I am a <span style="color : #5E3BEE">Junior Website Developer</span></div>
                    <div class="subtitle">A software and game development student who is passionate about creating innovative solutions. Explore my projects and skills to learn more about my journey in the world of technology.</div>
                    <a href="#" class="btn btn-get-touch">Get In Touch</a>
                    <div class="logo-wrapper">
                        <i class='bx bxl-linkedin'></i>
                        <a href="https://www.linkedin.com/in/nayla-qanita-alifia-0644772b5/"></a>

                        <i class='bx bxl-github' ></i>
                        <a href="https://github.com/naylaqanitaalifia"></a>

                        <i class='bx bxl-instagram' ></i>
                        <a href="https://www.instagram.com/q4nlf_/"></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 img-wrapper d-none d-md-block">
                    <img src="{{asset('assets/images/profile.png')}}" alt="">
                </div>
                
            </div>
       </div>
    </section>

    <section id="about" class="section-about" data-aos="fade-up" data-aos-duration="1000">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">About Me</div>
                    <div class="subtitle">
                        <p>
                            I am Nayla Qanita Alifia, a dedicated student majoring in Software and Game Development with professional experience in software and application development. My expertise includes HTML, CSS, JavaScript, PHP, and frameworks like Bootstrap and Laravel. With a strong interest in coding and design, I strive to build software and games that are both functional and visually appealing. I am passionate about innovation, continuous learning, and collaborating with dynamic teams. My goal is to continue learning and applying new technologies to create impactful solutions.
                        </p>    
                        </p>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <section id="skill" class="section-skill" data-aos="fade-up" data-aos-duration="1000">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Skills</div>
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/html.png')}}" alt="">
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/css.png')}}" alt="">
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/js.png')}}" alt="">
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/php.png')}}" alt="">
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/bootstrap.svg')}}" alt="">
                </div>
                <div class="col-6 col-md-2 mb-5 img-wrapper">
                    <img src="{{asset('assets/images/laravel.png')}}" alt="">
                </div>
            </div>
       </div>
    </section>
   

    <section id="projects" class="section-projects" data-aos="fade-up" data-aos-duration="1000">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Projects</div>
                </div>
                <div class="col-12 col-md-4 card-project mb-5">
                    <a href="http://naylaqanitaalifia.liveblog365.com/projekukk/session1.php" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/data-siswa.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Student Data Management</div>
                            <div class="desc">A web-based system for managing student data.</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-project mb-5">
                    <a href="http://naylaqanitaalifia.liveblog365.com/kasir/" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/kasir.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Cashier Payment System</div>
                            <div class="desc">A web-based system for efficiently managing sales transactions.</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-project mb-5">
                    <a href="http://naylaqanitaalifia.liveblog365.com/bahanbakar/" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/shell.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Fuel Purchase Management System</div>
                            <div class="desc">Efficiently managing fuel purchases for operational smoothness.</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-project mb-5">
                    <a href="http://naylaqanitaalifia.liveblog365.com/rentalmotor/" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/rental.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Motorcycle Rental Management System</div>
                            <div class="desc">Web-based motorbike rental platform for convenient and seamless transactions.</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-project mb-5">
                    <a href="http://naylaqanitaalifia.liveblog365.com/projekats/kalkulator.php" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/kalkulator.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Calculator</div>
                            <div class="desc">A calculator website for fast and accurate calculations.</div>
                        </div>
                    </a>
                </div>
            </div>
       </div>
    </section>


    <section id="certificate"  class="section-certificate" data-aos="fade-up" data-aos-duration="1000">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Certificate</div>
                </div>
                <div class="col-12 col-md-4 card-certificate mb-5">
                    <a href="https://www.dicoding.com/certificates/JMZV10RWNXN9" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/dicoding-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Learn Web Programming Basics - Dicoding</div>
                            <div class="year">21 Oct 2023</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-certificate mb-5">
                    <a href="https://www.dicoding.com/certificates/0LZ0298W3X65" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/dicoding-2.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Learning to Create Front-End Web for Beginners - Dicoding</div>
                            <div class="year">24 Dec 2023</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-certificate mb-5">
                    <a href="https://www.dicoding.com/certificates/GRX5Q50QVZ0M" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/dicoding-3.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Learn Basic Data Visualization - Dicoding</div>
                            <div class="year">30 Mar 2024</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-certificate mb-5">
                    <a href="https://olympus.mygreatlearning.com/courses/61375/certificate" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/great-learning.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">PHP for Beginners - Great Learning</div>
                            <div class="year">15 Apr 2024</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 card-certificate mb-5">
                    <a href="https://www.ratatype.com/u6286054/certificate/en_new/" target="_blank">
                        <div class="img-wrapper">
                        <img src="{{asset('assets/images/ratatype.jpg')}}" alt="">
                        </div>
                        <div class="text-wrapper">
                            <div class="project">Typing Test - Ratatype</div>
                            <div class="year">4 Jun 2024</div>
                        </div>
                    </a>
                </div>
            </div>
       </div>
    </section>

    <footer class="text-center p-3" style="background-color: #F6FCFF;">Copyright &copy; Nayla Qanita Alifia | 2024</footer>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- PLUGIN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            const offset = 100; // Atur offset margin atas yang diinginkan di sini

            window.scrollTo({
                top: target.offsetTop - offset,
                behavior: 'smooth'
            });
        });
    });
</script>
  </body>
</html>