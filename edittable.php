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
                <div class="wrapper-editor">

                    <div class="d-flex justify-content-center buttons-wrapper my-3">
                        <button class="btn btn-rounded text-white blue darken-3 btn-sm add-content-edit"
                            type="button"><i class="fas fa-toggle-off"></i></button>
                        <button class=" btn btn-rounded text-white purple
    lighten-2 btn-sm add-new-row" type="button">
                            <i class="fas fa-plus"></i></button>
                        <button class="btn btn-rounded text-white red btn-sm remove-first-tr" type="button"> <i
                                class="fas fa-eraser"></i></button>
                    </div>

                    <table id="ex3" class="table table-striped table-bordered" cellspacing=" 0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Extn.</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Examples</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Extn.</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Examples</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
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


    <script>
    let dataSet = [
        ["Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011-04-25", "$320,800", "Examples"],
        ["Garrett Winters", "Accountant", "Tokyo", "8422", "2011-07-25", "$170,750", "Examples"],
        ["Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009-01-12", "$86,000", "Examples"],
        ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012-03-29", "$433,060", "Examples"],
        ["Airi", "Accountant", "Tokyo", "5407", "2008-11-28", "$162,700", "Examples"],
        ["Brielle Williamson", "Integration Specialist", "New York", "4804", "2012-12-02",
            "$372,000", "Examples"
        ],
        ["Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012-08-06", "$137,500", "Examples"],
        ["Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010-10-14", "$327,900", "Examples"],
        ["Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009-09-15", "$205,500", "Examples"],
        ["Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008-12-13", "$103,600", "Examples"],
        ["Jena Gaines", "Office Manager", "London", "3814", "2008-12-19", "$90,560", "Examples"],
        ["Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013-03-03", "$342,000", "Examples"],
        ["Charde Marshall", "Regional Director", "San Francisco", "6741", "2008-10-16", "$470,600", "Examples"],
        ["Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012-12-18", "$313,500", "Examples"],
        ["Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010-03-17", "$385,750", "Examples"],
        ["Michael Silva", "Marketing Designer", "London", "1581", "2012-11-27", "$198,500", "Examples"],
        ["Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010-06-09", "$725,000", "Examples"],
        ["Gloria Little", "Systems Administrator", "New York", "1721", "2009-04-10", "$237,500", "Examples"],
        ["Bradley Greer", "Software Engineer", "London", "2558", "2012-10-13", "$132,000", "Examples"],
        ["Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012-09-26", "$217,500", "Examples"],
        ["Jenette Caldwell", "Development Lead", "New York", "1937", "2011-09-03", "$345,000", "Examples"],
        ["Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009-06-25", "$675,000", "Examples"],
        ["Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011-12-12", "$106,450", "Examples"],
        ["Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010-09-20", "$85,600", "Examples"],
        ["Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009-10-09", "$1,200,000",
            "Examples"],
        ["Gavin Joyce", "Developer", "Edinburgh", "8822", "2010-12-22", "$92,575", "Examples"],
        ["Jennifer Chang", "Regional Director", "Singapore", "9239", "2010-11-14", "$357,650", "Examples"],
        ["Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011-06-07", "$206,850",
            "Examples"
        ],
        ["Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010-03-11", "$850,000",
            "Examples"
        ],
        ["Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011-08-14", "$163,000", "Examples"],
        ["Michelle House", "Integration Specialist", "Sidney", "2769", "2011-06-02", "$95,400", "Examples"],
        ["Suki Burks", "Developer", "London", "6832", "2009-10-22", "$114,500", "Examples"],
        ["Prescott Bartlett", "Technical Author", "London", "3606", "2011-05-07", "$145,000", "Examples"],
        ["Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008-10-26", "$235,500", "Examples"],
        ["Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011-03-09", "$324,050", "Examples"],
        ["Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009-12-09", "$85,675", "Examples"]
    ];


    $('#ex3).DataTable({
    data: dataSet,
    columns: [{
            title: "Name"
        },
        {
            title: "Position"
        },
        {
            title: "Office"
        },
        {
            title: "Extn."
        },
        {
            title: "Start date"
        },
        {
            title: "Salary"
        },
        {
            title: "Examples"
        }
    ]
    });

    $('#ex3').mdbEditor({
        contentEditor: true,
        headerLength: 7,
        evenTextColor: 'rgba(0,0,255, .4)',
        oddTextColor: 'rgba(100,140,120, .6)',
        bgEvenColor: '',
        bgOddColor: '',
        thText: '#fff',
        thBg: 'rgba(22, 66, 192, .2)',
        bubblePositionX: 80,
        bubblePositionY: 0,
    });

    $('.dataTables_length').addClass('bs-select');
    </script>


</body>

</html>