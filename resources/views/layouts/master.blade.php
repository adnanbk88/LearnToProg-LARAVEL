<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>Learn To Program</title>
</head>

<body>
    <!-- NAVBAR SECTION -->
    <nav class="dark">
        <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
        <ul class="nav-links">
            <li><a href="/" class="nav-link">Learn To prog</a></li>
            <li><a href="#" class="nav-link">C</a></li>
            <li><a href="#" class="nav-link">C++</a></li>
            <li><a href="#" class="nav-link">HTML & CSS</a></li>
            <li><a href="#" class="nav-link">JavaScript</a></li>
            <li><a href="#" class="nav-link">Java</a></li>
            <li><a href="#" class="nav-link">...</a></li>
        </ul>
        <div class="search">
            <form action="" method="POST">
                <input type="text" class="serach-bar" placeholder="Search Here...">
            </form>
        </div>
    </nav>
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

    @yield('content')


    <!-- FOOTER SECTION -->
    <section id="links">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="/">Learn To Prog</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/privacy-policy">Pravacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p><a href="/">Learntoprog.com</a> © Tous droits réservés</p>
        </div>
    </footer>
    <script src="/js/app.js"></script>
</body>

</html>