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

<body class="fixed-sn mdb-skin-blue">


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
                    <a class="nav-link" href="#" >Something</a>
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
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">Logout</a>
            </div>
        </div>
        <!--/Dropdown primary-->
    </nav>

    <div class="container">

        <a class="btn-floating btn-lg btn-default"><i class="fas fa-bolt"></i></a>
        <a class="btn-floating btn-primary"><i class="fas fa-leaf"></i></a>
        <a class="btn-floating btn-sm btn-secondary"><i class="fas fa-star"></i></a>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <!-- Card -->
                <div class="card weather-card">

                    <!-- Card content -->
                    <div class="card-body pb-3">

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold">Warsaw</h4>
                        <!-- Text -->
                        <p class="card-text">Mon, 12:30 PM, Mostly Sunny</p>
                        <div class="d-flex justify-content-between">
                            <p class="display-1 degree">23</p>
                            <i class="fas fa-sun-o fa-5x pt-3 amber-text"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <p><i class="fas fa-tint fa-lg text-info pr-2"></i>3% Precipitation</p>
                            <p><i class="fas fa-leaf fa-lg grey-text pr-2"></i>21 hm/h Winds</p>
                        </div>
                        <div class="progress md-progress">
                            <div class="progress-bar black" role="progressbar" style="width: 40%" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-between font-small text-muted mb-4">
                            <li class="pl-4">8AM</li>
                            <li>11AM</li>
                            <li>2PM</li>
                            <li>5PM</li>
                            <li class="pr-4">8PM</li>
                        </ul>

                        <div class="collapse-content">

                            <div class="collapse" id="collapseExample">

                                <table class="table table-borderless table-sm mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Tuesday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">24&deg;<span class="text-muted">/12&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-sun fa-lg amber-text"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Wednesday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">19&deg;<span class="text-muted">/10&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-cloud-sun-rain fa-lg text-info"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Thursday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">23&deg;<span class="text-muted">/15&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-sun fa-lg amber-text"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Friday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">26&deg;<span class="text-muted">/19&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-sun fa-lg amber-text"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Saturday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">20&deg;<span class="text-muted">/16&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-cloud fa-lg text-info"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal align-middle">Sunday</td>
                                            <td class="float-right font-weight-normal">
                                                <p class="mb-1">22&deg;<span class="text-muted">/13&deg;</span></p>
                                            </td>
                                            <td class="float-right mr-3">
                                                <i class="fas fa-cloud-sun fa-lg text-info"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <hr class="">

                            <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 deep-purple-text collapsed"
                                data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample"></a>

                        </div>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-9">
                <figure class="col-md-4">
                    <a href="./img(117).jpg" class=" mdb-lightbox" data-size="1600x1067">
                        <img src="./img(117).jpg" class="img-fluid">
                    </a>
                </figure>
                <div class="row">
                    <div class="col-md-12">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox no-margin">
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                        class="img-fluid">
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg"
                                    data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(133).jpg"
                                        class="img-fluid" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <!-- Logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading">Modal Warning</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-3 text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                                alt="Michal Szymanski - founder of Material Design for Bootstrap"
                                class="img-fluid z-depth-1-half rounded-circle">
                            <div style="height: 10px"></div>
                            <p class="title mb-0">Jane</p>
                            <p class="text-muted " style="font-size: 13px">Consultant</p>
                        </div>

                        <div class="col-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident
                                temporibus
                                sunt earum.</p>
                            <p class="card-text">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong>
                            </p>
                        </div>
                    </div>


                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-warning">Get it now
                        <i class="far fa-gem ml-1 text-white"></i>
                    </a>
                    <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- End Logout -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>


    <script>
    // MDB Lightbox Init
    $(function() {
        $("#mdb-lightbox-ui").load("./mdb-lightbox-ui.html");
    });
    </script>


</body>

</html>