<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDB Pro 4.7.7</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">


</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark indigo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
        <!--Dropdown primary-->
        <div class="dropdown">

            <!--Trigger-->
            <a class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Material dropdown</a>


            <!--Menu-->
            <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <!--/Dropdown primary-->
    </nav>

    <main>

        <div class="view jarallax" style="height: 100vh;">
            <img class="jarallax-img" src="./img%20%2844%29.jpg" alt="">
            <div class="mask rgba-blue-slight">
                <div class="container flex-center text-center">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3">
                            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">NATALIE <a
                                    class="indigo-text font-weight-bold">SMITH</a></h1>
                            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">Web
                                developer & graphic designer</h5>
                            <a class="btn btn-light-blue btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a
                                class="btn btn-indigo btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <!--Grid row-->
            <div class="row mb-5 pb-4">

                <!--Grid column-->
                <div class="col-md-12 text-center">

                    <h2 class="h1 font-weight-bold light-blue-text my-5 py-4">Lorem ipsum dolor sit amet, consectetur
                        quis elit.</h2>
                    <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro,
                        cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit
                        debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis
                        elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime
                        nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem
                        ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem
                        corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet,
                        veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit.
                        Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt
                        possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor
                        sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit,
                        ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate
                        reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro,
                        cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit
                        debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis
                        elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime
                        nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem
                        ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem
                        corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet,
                        veritatis cupiditate reprehenderit.</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

        <div class="view jarallax">
            <img class="jarallax-img" src="./nature4.jpg" alt="">
        </div>

    </main>
    <!-- Main layout -->




    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>


    <script>
    // object-fit polyfill run
    objectFitImages();

    /* init Jarallax */
    jarallax(document.querySelectorAll('.jarallax'));

    jarallax(document.querySelectorAll('.jarallax-keep-img'), {
        keepImg: true,
    });
    </script>


</body>

</html>