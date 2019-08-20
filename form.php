<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDB Pro 4.7.7 Table</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">


    <link href="addons/datatables/datatables.css" rel="stylesheet">
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
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
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
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3 md-form">
                            <label for="validationCustom012">First name</label>
                            <input type="text" class="form-control" id="validationCustom012" placeholder="First name"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please insert First name.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 md-form">
                            <label for="validationCustom022">Last name</label>
                            <input type="text" class="form-control" id="validationCustom022" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please insert Last name.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 md-form">
                            <label for="validationCustomUsername2">Username</label>
                            <input type="text" class="form-control" id="validationCustomUsername2"
                                aria-describedby="inputGroupPrepend2" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 md-form">
                            <label for="validationCustom032">City</label>
                            <input type="text" class="form-control" id="validationCustom032" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 md-form">
                            <label for="validationCustom042">State</label>
                            <input type="text" class="form-control" id="validationCustom042" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 md-form">
                            <label for="validationCustom052">Zip</label>
                            <input type="text" class="form-control" id="validationCustom052" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 md-form">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <br>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                <div class="valid-feedback">Bagus</div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 md-form">
                            <select class="mdb-select" required>
                                <option value="1">USA</option>
                                <option value="2">Germany</option>
                                <option value="3">Poland</option>
                            </select>
                            <div class="invalid-feedback">Please select a country.</div>
                            <div class="valid-feedback">Bagus.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check pl-0">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-primary btn-sm waves-effect" type="submit">
                    <i class="fa fa-save"></i>
                    Submit form</button>
                </form>
            </div>
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



    <script type="text/javascript" src="addons/datatables/datatables.min.js"></script>


    <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
        $('.mdb-select.select-wrapper .select-dropdown').val("").removeAttr('readonly').attr("placeholder",
            "Choose your country ").prop('required', true).addClass('form-control').css('background-color',
            '#fff');
    });
    </script>


</body>

</html>