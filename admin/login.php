<?php
    session_start();
    $error = "";
    if (isset($_REQUEST["username"])) {
        if (strtoupper($_REQUEST["username"])=="ADMIN") {
            if ($_REQUEST["password"]=="1234") {
                $_SESSION["username"] = _REQUEST["username"];
                header("Location:index.php"); 
                die();
            } else {
                $error = "Password incorrecte";
            }
        } else {
            $error = "Usuari incorrecte";
        }
    }
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form action="login.php" method="POST" role="form">
                <legend>Login form</legend>
            
<?php
            if (isset($error) && !empty($error)) {
?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error</strong> <?= $error ?>
                </div>
<?php
            }
?>
                <div class="form-group">
                    <label for="">Nom d'usuari</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'usuari">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password de l'usuari">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
