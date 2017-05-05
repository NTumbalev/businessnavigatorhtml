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
            
            </div>
            <!-- /.row -->

            <hr>

            <?php include 'ssi/footer.php'; ?>
        </div>
        <!-- /.container -->
    </body>
</html>
