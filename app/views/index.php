<!DOCTYPE html>
<html lang="pl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SpecWords</title>
        <meta name="description" content="SpecWords - platforma do nauki specjalistycznego języka." /> 

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/home.css" id="theme-color">
    </head>
    <body data-spy="scroll" data-target="#lambda-navbar" data-offset="0">

        <!--navigation-->
        <nav class="navbar navbar-expand-md navbar-dark navbar-transparent fixed-top sticky-navigation" id="lambda-navbar">
            <a class="navbar-brand" href="index.html">
                SpecWords
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" 
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#faq">FAQ</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <a href="<?=URL?>login" class="btn btn-outline-secondary btn-navbar page-scroll">Login/Register</a>
                    
                </form>
            </div>
        </nav>

        <!--hero header-->
        <section class="py-7 py-md-0 bg-hero" id="home" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1)), url(img/parallex.jpg)">
            <div class="container">
                <div class="row vh-md-100">
                    <div class="col-md-7 my-md-auto text-center text-md-left">
                        <h1 class="display-3 text-white font-weight-bold">Ucz się specjalistycznego języka!</h1>
                        <p class="lead text-light my-4">Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                        <a href="#signup" class="btn btn-primary page-scroll">Ectetur adip</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- services section -->
        <section class="py-7 bg-light" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-9 mx-auto text-center">
                        <span class="text-muted text-uppercase">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                        <h2 class="display-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iust</h2>
                        <p class="lead">Nam liber tempor cum eleifend option congue nihil imper. 
                            Nam liber tempor cum soluta nobis.</p>
                    </div>
                </div>
                <div class="row p-4 mt-5 bg-white raised-box rounded">
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="edit-3" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Publish</h4>
                        <p class="text-muted">Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="thumbs-up" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Outreach</h4>
                        <p>Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="users" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Collaborate</h4>
                        <p>Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="globe" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Global</h4>
                        <p>Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="heart" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Premium support</h4>
                        <p>Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5 text-center">
                        <div class="icon-box">
                            <div class="icon-box-inner small-xs text-primary">
                                <span data-feather="rotate-ccw" width="30" height="30"></span>
                            </div>
                        </div>
                        <h4 class="mt-2">Money-back gaurantee</h4>
                        <p>Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.</p>
                    </div>
                </div>
                <div class="row press mt-5">
                    <div class="col-12 text-muted small-xl text-uppercase text-center mb-5">We have got our clients covered in</div>
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-1.png" alt=""></a></div>
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-2.png" alt=""></a></div>
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-3.png" alt=""></a></div>                                 
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-4.png" alt=""></a></div> 
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-5.png" alt=""></a></div>
                    <div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="img/press/press-6.png" alt=""></a></div>
                </div>
            </div>
        </section>

        <!--features section-->
        <section class="py-7" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <img src="img/feature1.png" class="img-fluid d-block mx-auto" alt="Feature 1" />
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-left pt-5 pt-md-0">
                        <h2 class="display-4">Get published in top brands</h2>
                        <p class="lead text-muted">Nam liber tempor cum eleifend option congue nihil imper. 
                            Nam liber tempor cum soluta nobis.</p>
                        <ul class="features-list">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Aenean commodo ligula eget dolor.</li>
                            <li>Aenean massa.</li>
                            <li>Cum sociis natoque penatibus mus.</li>
                        </ul>
                        <p class="lead mt-3">
                            <a href="#" class="btn btn-primary btn-sm d-inline-flex flex-row align-items-center">
                                See our partners <span class="ml-1" width="18" height="18" data-feather="chevron-right"></span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-md-6 my-auto order-1 order-md-2">
                        <img src="img/feature2.png" class="img-fluid d-block mx-auto" alt="Feature 2" />
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-left pt-5 pt-md-0 order-2 order-md-1">
                        <h2 class="display-4">Reach millions of people</h2>
                        <p class="lead text-muted">Nam liber tempor cum eleifend option congue nihil imper. 
                            Nam liber tempor cum soluta nobis.</p>
                        <ul class="features-list">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Aenean commodo ligula eget dolor.</li>
                            <li>Aenean massa.</li>
                            <li>Cum sociis natoque penatibus mus.</li>
                        </ul>
                        <p class="lead mt-3">
                            <a href="#" class="btn btn-primary btn-primary d-inline-flex flex-row align-items-center">
                                Sign up now <span class="ml-1" width="18" height="18" data-feather="chevron-right"></span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-md-6 my-auto">
                        <img src="img/feature3.png" class="img-fluid d-block mx-auto" alt="Feature 3" />
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-left pt-5 pt-md-0">
                        <h2 class="display-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p class="lead text-muted">Nam liber tempor cum eleifend option congue nihil imper. 
                            Nam liber tempor cum soluta nobis.</p>
                        <ul class="features-list">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Aenean commodo ligula eget dolor.</li>
                            <li>Aenean massa.</li>
                            <li>Cum sociis natoque penatibus mus.</li>
                        </ul>
                        <p class="lead mt-3">
                            <a href="#" class="btn btn-primary btn-primary d-inline-flex flex-row align-items-center">
                                Contact us <span class="ml-1" width="18" height="18" data-feather="chevron-right"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- reviews section -->
        <section class="py-7 bg-light" id="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto text-center">
                        <span class="text-muted small-xl text-uppercase">Loved by thousands of people</span>
                        <h2 class="display-4">What our customers say</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto review-wrapper slick-reviews">
                        <div class="card border-0 review p-5 raised-box">
                            <div class="card-body">
                                <img src="img/client-1.jpg" class="img-review rounded-circle d-block mx-auto" alt="Client 1"/>
                                <p class="quote">Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque libero.</p>
                                <div class="mt-4 small-xl">
                                    Ryan Siddle &mdash; <span class="text-muted">Google Design</span>
                                </div>
                                <div class="rating-stars text-primary mt-4">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-empty"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 review p-5 raised-box">
                            <div class="card-body">
                                <img src="img/client-2.jpg" class="img-review rounded-circle d-block mx-auto" alt="Client 2"/>
                                <p class="quote">Praesent vulputate dolor velit, in condimentum vulputate odio pellentesin condimentum odio pellentesque libero.</p>
                                <div class="mt-4 small-xl">
                                    Ameli Mao &mdash; <span class="text-muted">Developer</span>
                                </div>
                                <div class="rating-stars text-primary mt-4">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 review p-5 raised-box">
                            <div class="card-body">
                                <img src="img/client-3.jpg" class="img-review rounded-circle d-block mx-auto" alt="Client 3"/>
                                <p class="quote">Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque libero.</p>
                                <div class="mt-4 small-xl">
                                    Kathrine Jones &mdash; <span class="text-muted">DropBox</span>
                                </div>
                                <div class="rating-stars text-primary mt-4">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--pricing section-->
        <section class="py-7" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <span class="text-muted text-uppercase">Simple pricing</span>
                        <h2 class="display-4">Pay only when you need</h2>
                        <p class="lead">
                            Nam liber tempor cum eleifend option congue nihil imper. Nam liber tempor cum soluta nobis.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="card-group pricing-table">
                            <div class="card text-center bg-light">
                                <div class="card-body">
                                    <h4 class="card-title pt-3">Basic</h4>
                                    <h2 class="card-title text-primary pt-4">$99</h2>
                                    <div class="text-muted mt-4">per month</div>
                                    <ul class="list-unstyled pricing-list">
                                        <li>1 campaign</li>
                                        <li>20 media submissions</li>
                                        <li>Pitch templates</li>
                                        <li>Basic support</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                            <div class="card bg-primary text-white text-center">
                                <div class="card-body">
                                    <h4 class="card-title text-white pt-3">Startup</h4>
                                    <h2 class="card-title text-white pt-4">$159</h2>
                                    <div class="text-light mt-4">per month</div>
                                    <ul class="list-unstyled pricing-list">
                                        <li>5 campaigns</li>
                                        <li>50 media submissions</li>
                                        <li>Pitch templates</li>
                                        <li>Priority support</li>
                                    </ul>
                                    <a href="#" class="btn btn-secondary">
                                        Get started
                                    </a>
                                </div>
                            </div>
                            <div class="card text-center bg-light">
                                <div class="card-body">
                                    <h4 class="card-title pt-3">Growth</h4>
                                    <h2 class="card-title text-primary pt-4">$499</h2>
                                    <div class="text-muted mt-4">per month</div>
                                    <ul class="list-unstyled pricing-list">
                                        <li>10 campaigns</li>
                                        <li>200 media submissions</li>
                                        <li>Pitch templates</li>
                                        <li>Premium support</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-9 mx-auto">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="icon-box border-box">
                                    <div class="icon-box-inner p-2 text-primary">
                                        <span data-feather="umbrella"></span>
                                    </div>
                                </div>
                                <h6 class="mb-2">Money-back guarantee</h6>
                                <p class="text-muted small-xl">100% money back guarantee within 14 days. No worries.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="icon-box border-box">
                                    <div class="icon-box-inner p-2 text-primary">
                                        <span data-feather="shield"></span>
                                    </div>
                                </div>
                                <h6 class="mb-2">Secure payment</h6>
                                <p class="text-muted small-xl">Money transfers are protected with a 256-bit SSL Protocol.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="icon-box border-box">
                                    <div class="icon-box-inner p-2 text-primary">
                                        <span data-feather="credit-card"></span>
                                    </div>
                                </div>
                                <h6 class="mb-2">Payment methods</h6>
                                <p class="text-muted small-xl">Pay with multiple payment methods — credit card, bank transfer or PayPal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq section -->
        <section class="py-7 bg-light" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <span class="text-muted text-uppercase">Answers to common questions</span>
                        <h2 class="display-4">Frequently asked questions</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-9 mx-auto">
                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <h5>Lorem ipsum dolor sit amet?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Lorem sit andigen daepeditem amet?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Lorem ipsum dolor sit andigen daepeditem amet?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Lorem sit andigen daepeditem amet dem tumquam explabo?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Lorem sit andigen daepeditem amet?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Lorem sit daepeditem amet?</h5>
                                <p class="text-muted">
                                    Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem 
                                    rest non restibusaes maio es dem tumquam explabo.
                                </p>
                            </div>
                        </div>
                        <div class="row text-center my-5">
                            <div class="col-lg-6 col-md-8 mx-auto">
                                <div class="font-weight-bold lead">Still have more questions?</div>
                                <p class="text-muted">Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore.</p>
                                <a href="#" class="btn btn-primary btn-sm">
                                    Get in touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--hero header-->
        <section class="py-5 py-md-6 bg-hero inverse" id="signup" style="background-image: url(img/parallex.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-md-auto text-center text-md-left pb-5 pb-md-0">
                        <h1 class="display-3 text-white">Grow your business with Lambda</h1>
                        <p class="lead text-light">Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam explabo.</p>
                    </div>
                    <div class="col-md-6">
                            <div class="card-body p-4">
                                    <div class="form-group">
                                    <a href="<?=URL?>login"><button class="btn btn-primary btn-block">Create your account</button></a>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--footer / contact-->
        <footer class="py-6 bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h5 class="text-white">About SpecWords</h5>
                        <p class="about">Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore. 
                            Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam explabo.</p>
                        <ul class="list-inline social social-rounded social-sm">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 ml-auto">
                        <h5 class="text-white">SpecWords</h5>
                        <ul class="list-unstyled mt-4">
                            <li><a href="#">Restibusaes</a></li>
                            <li><a href="#">Que</a></li>
                            <li><a href="#">Labore</a></li>
                            <li><a href="#">Tumquam</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h5 class="text-white">SpecWords</h5>
                        <ul class="list-unstyled mt-4">
                            <li><a href="#">Maio</a></li>
                            <li><a href="#">Laceaque</a></li>
                            <li><a href="#">Andigen</a></li>
                            <li><a href="#">Global</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h5 class="text-white">SpecWords</h5>
                        <ul class="list-unstyled mt-4">
                            <li><a href="#">Tumquam</a></li>
                            <li><a href="#">andigen</a></li>
                            <li><a href="#">Laceaque</a></li>
                            <li><a href="#">Tumquam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-muted text-center small-xl">
                        <p>&copy;Michał Kordziński - projekt edukacyjny</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--scroll to top-->
        <div class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <!-- theme switcher (FOR DEMO ONLY - REMOVE FROM PRODUCTION)-->
        <div class="switcher-wrap">
            <div class="switcher-trigger">
                <span class="fa fa-gear"></span>
            </div>
            <div class="color-switcher">
                <h6>Color Switcher</h6>
                <ul class="mt-3 clearfix">
                    <li class="bg-green active" data-color="default" title="Default Green"></li>
                    <li class="bg-purple" data-color="purple" title="Purple"></li>
                    <li class="bg-blue" data-color="blue" title="Blue"></li>
                    <li class="bg-red" data-color="red" title="Red"></li>
                    <li class="bg-orange" data-color="orange" title="Orange"></li>
                    <li class="bg-indigo" data-color="indigo" title="Indigo"></li>
                    <li class="bg-black" data-color="black" title="Black"></li>
                    <li class="bg-teal" data-color="teal" title="Teal"></li>
                    <li class="bg-cyan" data-color="cyan" title="Cyan"></li>
                    <li class="bg-pink" data-color="pink" title="Pink"></li>
                </ul>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="js/home.js"></script>
        
    </body>
</html>