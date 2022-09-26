<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Midterm Exam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            background-color: #EDE9E8;
        }
        #more {display: none;}
    </style>

    <body>   
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="640px-H&M-Logo.svg.png" alt="" width="40" height="24" class="d-inline-block align-text-top">
                    PH
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CART</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MY ACCOUNT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOPPING BAG (0)</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                CUSTOMER SERVICE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Coronavirus</a></li>
                                <li><a class="dropdown-item" href="#">Shopping</a></li>
                                <li><a class="dropdown-item" href="#">Gift Cards</a></li>
                                <li><a class="dropdown-item" href="#">Size Guide</a></li>
                                <li><a class="dropdown-item" href="#">Product & Quality</a></li>
                                <li><a class="dropdown-item" href="#">Legal & Privacy</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">CHECK-OUT</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br/>
        <br/>
        <br/>
            <div class="container container-fluid bg-danger">
                <nav class="navbar navbar-md justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Divided</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Baby</a>
                        </li>
                        <li class="nav-item">
                            <img src ="hm-logo-black-and-white.png" class="nav-link" width="100" height="50">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">MAGAZINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">SUSTAINABILITY</a>
                        </li>
                    </ul>
                </nav>
            </div> 
        <br/>
            <div class="container container-fluid bg-transparent">
                <nav class="navbar justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"> Sustainability at H&M </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Download the H&M app</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Sign up & get 25% off one item + free delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Find a store</a>
                        </li>

                    </ul>
                </nav>
            </div> 
            
            <br/>

            <div class="container-fluid container-lg">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  class="d-block w-100" src="2024-3x2-Magazine-Landscape-1688x1126_72ppi_1.jpg" width="1000" height="800" alt="christmas">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Christmas arrivals</h1>
                                <h5>Velour jumpsuits, quilted trousers, satiny slip dresses & other luxe looks</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="OhGWrDTFBE0DajkUP80dotvA1YTGUsyOgT6_HWh1oHM.jpg" width="1000" height="800" alt="model">
                            <div class="carousel-caption d-none d-md-block text-light">
                                <h1>Don't let fashion go to waste</h1>
                                <h5>Get ready to do some serious shopping...</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="3275ab-smiley-x-hm-CPM-05.jpg" width="1000" height="800" alt="smiley">
                            <div class="carousel-caption d-none d-md-block text-warning">
                                <h1>SMILEY X H&M</h1>
                                <h5>Hit the streets retro style with relaxed hoodies, rugby shirts and washed denim. The smiley style is here to stay.</h5>
                            </div>
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg">
            <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="Maisie Williams x H&M.mp4" allowfullscreen></iframe>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg"> 
           <div class="card">
                <center><h2 class="text-danger">Shop by Category</h2></center>
                <div class="row text-center">
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (1).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Tanks
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (2).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Shirts
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (3).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Shorts
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-lg">
            <div class="card">
                <div class="row text-center">
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (4).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Denim
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (5).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Co-ords
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (6).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Swimwear
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-lg">
            <div class="card">
                <div class="row text-center">
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (7).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Sleepwear
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (9).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Underwear
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (8).jfif">
                            </div>
                            <h3 class="card-title mb-3">
                                Activewear
                            </h3>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="265251430_1180620005677194_4898998390844404556_n.jpg" class="d-block w-100" width="600" height="600" alt="Download the H&M app">
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>

        <div class="container-fluid container-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="265309385_1180375232368338_4734716046319224429_n.jpg" class="d-block w-100" width="1000" height="800" alt="disney">
                    </div>
                    <div class="carousel-item">
                        <img src="263531402_1179264975812697_7895202336467258359_n.jpg" class="d-block w-100" width="1000" height="800" alt="disney">
                    </div>
                    <div class="carousel-item">
                        <img src="4104A-3x2-disney-x-hm.jpg" class="d-block w-100" width="1000" height="800" alt="disney">
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg">
            <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="H&M Spring Season 2015_ Men's Fashion - Look Book.mp4" allowfullscreen></iframe>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg">
            <div style="background:mediumseagreen !important" class="jumbotron text-light">
                <center>
                    <h2>Shop our Conscious products</h2>
                    <p>Made from sustainability sourced materials</p>
                    <button type="button" class="btn-light"> WOMEN </button>
                    <button type="button" class="btn-light"> MEN </button>
                    <button type="button" class="btn-light"> KIDS </button>
                    <button type="button" class="btn-light"> BABY </button>
                </center>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid container-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="263078536_1175113199561208_8699524293349752651_n.png" class="d-block w-100" width="600" height="600" alt="Family Gifts">
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid bg-warning">
            <br/>
            <br/>
                <center>
                    <h2 class="text-dark fw-bold">MAGAZINE</h2>
                    <p>A WORLD OF INSPIRATION</p>
                    <nav class="navbar navbar-md justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#" data-toggle="tooltip" data-placement="right" title="MAGAZINE - READ H&M MAGAZINE">READ H&M MAGAZINE</a>
                        </li>
                    </ul>
                </center>
                <div class="row text-center">
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (11).jfif">
                            </div>
                            <p>INSIDE H&M</p>
                            <h3 class="card-title mb-3">
                                A circular design story
                            </h3>
                            <a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="A Circular design story | H&M - Read The Story">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (12).jfif">
                            </div>
                            <p>INSIDE H&M</p>
                            <h3 class="card-title mb-3">
                                The perfect gift for her...
                            </h3>
                            <a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="Gift Guides for Babies, Kids and Teens - Read The Story">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-dark">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="hmgoepprod (13).jfif">
                            </div>
                            <p>INSIDE H&M</p>
                            <h3 class="card-title mb-3">
                                Cute gifts for kids
                            </h3>
                            <a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="Gift Guides for Babies, Kids and Teens - Read The Story">READ MORE</a>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row text-left">
                <div class="col">
                    <ul class="nav flex-column">
                        <h5>SHOP</h5>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark href="#">Baby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Kids</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="nav flex-column">
                        <h5>CORPORATE INFO</h5>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">Career at H&M</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">About H&M group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark href="#">Sustainability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Press</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Investors relations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Corporate governance</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="nav flex-column">
                        <h5>HELP</h5>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">Customer Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark href="#">Find a store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Legal & Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Cookies Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="nav flex-column">
                        <h5>Sign up for newsletter</h5>
                        <br/>
                        <li class="nav-item">
                            <p>Sign up now and get 25% off one item.</p>
                        </li>
                        <br/>
                        <br/>
                        <li class="nav-item">
                            <a href="#" class="btn btn-danger">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br/>
            <br/>
            <div>
            <center><a class="navbar-brand" href="#">
                    <img src="facebook.svg" alt="" width="40" height="24" data-toggle="tooltip" data-placement="right" title="Facebook">
                    <img src="twitter.svg" alt="" width="40" height="24" data-toggle="tooltip" data-placement="right" title="Twitter">
                    <img src="instagram.svg" alt="" width="40" height="24" data-toggle="tooltip" data-placement="right" title="Instagram">
                    <img src="youtube.svg" alt="" width="40" height="24" data-toggle="tooltip" data-placement="right" title="Youtube">
                    <img src="pinterest.svg" alt="" width="40" height="24" data-toggle="tooltip" data-placement="right" title="Pinterest">
                    </a></center>
            </div>
            <br/>
            <div class="row text-center">
                <p>The content of this site is copyright-protected and is the property of H & M Hennes & Mauritz AB. H&M’s business concept is to offer fashion and quality at the best price in a sustainable way. H&M has since it was founded in 1947 grown into one of the world's leading fashion companies.</p>
            </div>
            <div>
                <p><center>H E N N E S <img src="hm-logo-black-and-white.png" width="40" height="30"> M A U R I T Z</center></p>
            </div>
            <div>
            <nav class="navbar navbar-md justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#" data-toggle="tooltip" data-placement="right" title="Change Location">Choose Location | PH</a>
                        </li>
                    </ul>


            </div>

        </div>
    </body>

</html>