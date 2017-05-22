<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Informator site</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/search.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <?php include 'ssi/mainMenu.php'; ?>
        </header><!-- /header -->

        <!-- Page Content -->
        <div class="container">
            <?php include 'ssi/search.php'; ?>
            
            <div class="row">
                <div class="col-lg-9">
                    <div class="result">
                        <h3>А - Стела - А - Албена Ал - Асуад ЕТ</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="productView.php">Виж още ... </a>
                    </div>
                    
                    <hr />
                    <div class="result">
                        <h3>А - Стела - А - Албена Ал - Асуад ЕТ</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="productView.php">Виж още ... </a>
                    </div>

                    <hr />
                    <div class="result">
                        <h3>Автосервизи</h3>
                        <a href="productView.php">Виж още ... </a>
                    </div>
                </div>
                <div class="col-lg-3 smallBanner">
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                    <a href="productView.php"><img src="images/banners/small/1.jpg"></a>
                </div>
            </div>
            <!-- /.row -->

            <hr />

            <div class="row">
                <div class="col-lg-12">
                    <a href="productView.php">
                        <img class="img-responsive" src="images/banners/large/1.jpg">
                    </a>
                </div>

                <?php include 'ssi/publish.php'; ?>
            </div>

            <hr/>

            <?php include 'ssi/footer.php'; ?>
        </div>
        <!-- /.container -->
    </body>
</html>
