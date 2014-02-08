<?php

require_once 'shared.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Beer and Bacon Finder</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>Zombeeraconator! <small>Your guide to all things Beer & Bacon.</small></h1>
            <h5>Enter your information below, but watch out for zombies.</h5>
        </div>

        <div class="row">
            <form class="form-horizontal" role="form" action="submit.php" method="post">
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="John" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Bacon" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" name="email" id="email" class="form-control" placeholder="heartsbacon@mmm.com" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-5">
                        <input type="text" name="city" id="city" class="form-control" placeholder="BaconTown" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-5">
                        <input type="text" name="state" id="state" class="form-control" placeholder="IL" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-2">
                        <button class="btn btn-lg btn-danger btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- /container -->


   <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
