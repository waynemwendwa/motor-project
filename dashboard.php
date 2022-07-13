<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-3 bg-primary">
            <ul class="nav flex-column navsep">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa fa-codepen fa-3x text-white"></i>
                        <span class="h4 text-white">Admin Panel</span>
                    </a>
                </li>
                <hr class="bg-white">
                <li class="nav-item navsep">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-dashboard fa-2x text-white"></i>
                        <span class="text-white h5">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link" href="students.php">
                        <i class="fa fa-users fa-2x text-white"></i>
                        <span class="text-white h5">Users</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cogs fa-2x text-white"></i>
                        <span class="text-white h5">Components</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="documents.php">
                        <i class="fa fa-file fa-2x text-white"></i>
                        <span class="text-white h5">Documents</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart fa-2x text-white"></i>
                        <span class="text-white h5">Charts</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-wrench fa-2x text-white"></i>
                        <span class="text-white h5">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 col-lg-9 bg-light">
            <div class="row bg-white">

                <div class="col-md-7 col-lg-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="col-md-5 col-lg-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <i class="fa fa-bell fa-lg text-secondary"></i>
                                            <span class="badge bg-danger rounded-pill">8+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope fa-lg text-secondary"></i>
                                            <span class="badge bg-danger rounded-pill">5+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> John Doe| </a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="images/wolves.jpg" alt="loading" width="50" height="50" class="rounded-circle">
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>

            </div>

            <div class="row m-2">
                <div class="col-sm-6">
                    <h3 class="text-secondary">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Welcome to Admin Panel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    this is a system developed by Motor class in emobilis
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-2">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body border-left-primary">
                            <span>EARNINGS</span>
                            <span class="float-end">
                                <i class="fa fa-dollar fa-lg text-secondary"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body border-left-warning">
                            <span>TASKS</span>
                            <span class="float-end">
                            <i class="fa fa-bars fa-lg text-secondary"></i>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body border-left-success">
                            <span>REQUESTS</span>
                            <span class="float-end">
                            <i class="fa fa-wechat fa-lg text-secondary"></i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-2">
                <div class="col-sm-6 col-lg-6">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="bg-white">
                        <div class="m-2 p-2">
                            <span>Software Installation</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                        <div class="p-2 m-2">
                            <span>Website Development</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>
                        <div class="m-2 p-2">
                            <span>Database Migration</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="p-2 m-2">
                            <span>Dashboard Design</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row m-2">
                <div class="col-sm-6">
                    <div class="bg-white">
                        <img src="images/chart.svg" alt="loading" width="400" height="300">
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A list item
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A second list item
                            <span class="badge bg-danger rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A third list item
                            <span class="badge bg-success rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A list item
                            <span class="badge bg-warning rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A second list item
                            <span class="badge bg-success rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A third list item
                            <span class="badge bg-danger rounded-pill">1</span>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
</body>
</html>
