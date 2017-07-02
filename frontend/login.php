<?php 
// Include Header File
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=codehub','codehub','codehub');
    
}catch (PDOException $e) {
    die('Could Not Connect');
}


if(file_exists(__DIR__ . '/components/header.php')){
    require_once __DIR__ . '/components/header.php';
}

?>




<body class="login-page">
    
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="../assets/img/now-logo.png" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="First Name...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Password..." class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Get Started</a>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="#pablo" class="link">Create Account</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





<?php 
// Include Footer File
if( file_exists(__DIR__ . '/components/footer.php')) {
    require_once __DIR__ . '/components/footer.php' ;
};

?>