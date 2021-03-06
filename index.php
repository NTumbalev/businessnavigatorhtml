<!DOCTYPE html>
<html>
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
            <div class="row">
                <?php include 'ssi/headerCarousel.php'; ?>
            </div>

            <?php include 'ssi/search.php'; ?>

            <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <p class="allCategories">
                            <a href="categoriesListing.php">Всички категории</a>
                        </p>
                        <h2 class="page-header">Категории</h2>
                    </div>
                    <div class="homepageCategories">
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Автосервизи</a>
                            </h3>
                            <a class="categoryImage" href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/business/" alt="">
                            </a>
                        </div>
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Дограма</a>
                            </h3>
                            <a href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/abstract/" alt="">
                            </a>
                        </div>
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Мебели</a>
                            </h3>
                            <a href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/city/" alt="">
                            </a>
                        </div>
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Категория 1</a>
                            </h3>
                            <a href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/food/" alt="">
                            </a>
                        </div>
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Категория 2</a>
                            </h3>
                            <a href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/nature/" alt="">
                            </a>
                        </div>
                        <div class="categoryAccent col-md-3 col-sm-6">
                            <h3>
                                <a href="categoryListing.php">Категория 3</a>
                            </h3>
                            <a href="categoryListing.php">
                                <img class="img-responsive img-portfolio img-hover" src="http://lorempixel.com/700/450/transport/" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Някакви по-малки банери или акценти
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Акцент 1</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?
                                    </p>
                                </div>
                                
                                <div class="col-md-5">
                                    <img src="http://lorempixel.com/200/215/nature/" alt="">
                                </div>
                            </div>

                            <a href="#" class="btn btn-default">Научи повече</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Акцент 2</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?
                                    </p>
                                </div>
                                
                                <div class="col-md-5">
                                    <img src="http://lorempixel.com/200/215/nature/" alt="">
                                </div>
                            </div>

                            <a href="#" class="btn btn-default">Научи повече</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Някакъв описателен текст</h2>
                </div>
                <div class="col-md-6">
                    <p>Тук може да се опише дейност на фирма, а отстрани да има банер</p>
                    <ul>
                        <li><strong>Основна дейност</strong>
                        </li>
                        <li>Акцент 1</li>
                        <li>Акцент 2</li>
                        <li>Акцент 3</li>
                        <li>Акцент 4</li>
                        <li>Акцент 5</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="http://lorempixel.com/700/450/fashion/" alt="">
                </div>
            </div> -->
            <!-- /.row -->

            <hr>

            <?php include 'ssi/footer.php'; ?>
        </div>
        <!-- /.container -->

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>
    </body>
</html>
