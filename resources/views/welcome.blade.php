<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/stylezoz.css" />
</head>

<body>
    <main>
        <header id="header">
            <div class="overlay overlay-lg">
                <img src="./img/shapes/square.png" class="shape square" alt="" />
                <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
                <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
                <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                <img src="./img/shapes/letters.png" class="letters" alt="" />
                <img src="./img/shapes/points1.png" class="points points1" alt="" />
            </div>

            <nav>
                <div class="container">
                    <div class="logo">
                        <a href="/">
                        <img  style="border-radius: 50%;"src="/images/logo.jpg" alt="" />
                    </a>
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="#header">Home</a>
                            </li>
                            <li>
                                <a href="#services">Doctors</a>
                            </li>
                            <li>
                                <a href="#services">Patients</a>
                            </li>
                            <li>
                                <a href="#services">Admin</a>
                            </li>
                            {{-- <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li> --}}
                            <li>
                                {{-- <a href="#hireme" class="active">Hire me</a> --}}
                            </li>
                        </ul>
                    </div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="container grid-2">
                    <div class="column-1">
                        <h1 class="header-title">Check your eyes</h1>
                        <p class="text">
                            after login enter your rayes to check your eyes
                        </p>
                        <a href="#services" class="btn">Enter to system</a>
                    </div>

                    <div class="column-2 image">
                        <img src="./img/shapes/points2.png" class="points points2" alt="" />
                        <img src="./mydoctors.jpg" class="img-element z-index" alt="" />
                    </div>
                </div>
            </div>
        </header>

        <section class="services section" id="services">
            <div class="container">
                {{-- <div class="section-header">
                    <h3 class="title" data-title="What I Do">Services</h3>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, vero?
                    </p>
                </div> --}}

                <div class="cards">
                    <div class="card-wrap">
                        <img src="./img/shapes/points3.png" class="points points1 points-sq" alt="" />
                        <div class="card" data-card="UI/UX">
                            <div class="card-content z-index">
                                <img src="admin.jpg" class="icon" alt="" />
                                <h3 class="title-sm">Admin</h3>
                                <p class="text">
                                    enter to system as admin
                                </p>
                                <a href="/admainlogin" class="btn small">Admin</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-wrap">
                        <div class="card" data-card="Code">
                            <div class="card-content z-index">
                                <img src="allp.png" class="icon" alt="" />
                                <h3 class="title-sm">Patients</h3>
                                <p class="text">
                                    You can login or register as patient
                                </p>
                                <a href="/register" class="btn small">Patients</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-wrap">
                        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
                        <div class="card" data-card="App">
                            <div class="card-content z-index">
                                <img src="doctors.jpeg" class="icon" alt="" />
                                <h3 class="title-sm">Doctors</h3>
                                <p class="text">
                                    welcome doctor you can use Ai system
                                </p>
                                <a href="/doctors" class="btn small">Doctors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="portfolio section" id="portfolio">
            <div class="background-bg">
                <div class="overlay overlay-sm">
                    <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                    <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                    <img src="./img/shapes/square.png" class="shape square" alt="" />
                    <img src="./img/shapes/wave.png" class="shape wave" alt="" />
                    <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                    <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                    <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                </div>
            </div>


        </section> --}}









    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
