<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>Learn To Program</title>
</head>
<body>
    <!-- HEADER SECTION -->
    <header>
        <div class="overlay"></div>
        <!-- NAVBAR SECTION -->
        <nav>
            <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
            <ul class="nav-links">
                <li><a href="#" class="nav-link">C</a></li>
                <li><a href="#" class="nav-link">C++</a></li>
                <li><a href="#" class="nav-link">HTML & CSS</a></li>
                <li><a href="#" class="nav-link">JavaScript</a></li>
                <li><a href="#" class="nav-link">Java</a></li>
                <li><a href="#" class="nav-link">PHP</a></li>
                <li><a href="#" class="nav-link">Python</a></li>
                <li><a href="#" class="nav-link">.NET</a></li>
            </ul>
            <div class="search">
                <form action="" method="POST">
                    <input type="text" class="serach-bar" placeholder="Search Here...">
                </form>
            </div>
        </nav>
        <!-- SHOWCASE SECTION -->
        <div class="showcase">
            <img src="img/logo.png" alt="LeanToProg" id="logo">
            <h1 class="page-title">C'est L'heur Pour Programmer</h1>
            <p class="page-text">C, C++, HTML & CSS, JavaScript, JAVA, PHP .....</p>
        </div>
    </header>
    <!-- SIDENAV SECTION -->
    <section id="sidenav">
        <a href="#" id="close">&times;</a>
        <ul>
            <li><a href="#">C</a></li>
            <li><a href="#">C++</a></li>
            <li><a href="#">HTML & CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">Java</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">.NET</a></li>
        </ul>
    </section>
    <!-- WELECOME SECTION -->
    <section id="welcome">
        <div class="container">
            <h2 class="section-title">Welcome</h2>
            <p>Welcome to the free interactive learning prog tutorial. Whether you are an experienced programmer or not, this site is intended for all those who wish to learn programming languages. There's no need to download anything - just click on the chapter you want to start from and follow the instructions.</p>
        </div>
    </section>
    <!-- COURSES SECTION -->
    <section id="courses">
        <div class="container">
            <h2 class="section-title">Our courses</h2>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="post">
                            <div class="post-img">
                                <img src="{{"/storage/uploads/$course->img"}}" alt="">
                            </div>
                            <div class="post-body">
                                <h3 class="post-title">{{$course->title}}</h3>
                                <p class="post-description">
                                    {{strlen($course->description) >= 100 ? 
                                        substr($course->description, 0, 99) : $course->description
                                    }}...
                                </p>
                                <a href="{{"/course/$course->slug"}}" class="post-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- SUBSCRIBE SECTION -->
    <section id="subscribe">
        <div class="container">
            <h2 class="section-title">Subscribe To Our News Letter</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="" method="POST">
                        <input type="email" class="email" placeholder="Your email">
                        <button type="submit" class="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <section id="links">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="#">Pravacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p><a href="#">Learntoprog.com</a> © Tous droits réservés</p>
        </div>
    </footer>
    <script src="/js/app.js"></script>
</body>
</html>