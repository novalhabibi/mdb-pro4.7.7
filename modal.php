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
    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess">Launch
            Modal Success
            <i class="far fa-eye ml-1"></i>
        </a>
        <a href="" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#centralModalInfo">Launch
            Modal Info
            <i class="far fa-eye ml-1"></i>
        </a>
        <a href="" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#centralModalDanger">Launch
            Modal Info
            <i class="far fa-eye ml-1"></i>
        </a>
        <a href="" class="btn btn-warning btn-rounded" data-toggle="modal" data-target="#centralModalWarningDemo">Launch
            Modal Info
            <i class="far fa-eye ml-1"></i>
        </a>
    </div>
    <!-- Central Modal Medium Success -->
    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Modal Success</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                            blanditiis
                            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                            enim,
                            ab officiis totam.</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-success">Get it now <i class="far fa-gem ml-1 text-white"></i></a>
                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Success-->



    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Modal Info</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                            blanditiis
                            ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                            enim,
                            ab officiis totam.</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a>
                    <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Info-->


    <!-- Central Modal Medium Danger -->
    <div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading">Modal Danger</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!--Body-->
          <div class="modal-body">

            <div class="row">
              <div class="col-3">
                <p></p>
                <p class="text-center">
                  <i class="fas fa-shopping-cart fa-4x"></i>
                </p>
              </div>

              <div class="col-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident temporibus
                  sunt earum.</p>
                <h2>
                  <span class="badge">v52gs1</span>
                </h2>
              </div>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-danger">Get it now
              <i class="far fa-gem ml-1 text-white"></i>
            </a>
            <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Medium Danger-->

    <div class="modal fade" id="centralModalWarningDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Michal Szymanski - founder of Material Design for Bootstrap"
                  class="img-fluid z-depth-1-half rounded-circle">
                <div style="height: 10px"></div>
                <p class="title mb-0">Jane</p>
                <p class="text-muted " style="font-size: 13px">Consultant</p>
              </div>

              <div class="col-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident temporibus
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





    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>





</body>

</html>