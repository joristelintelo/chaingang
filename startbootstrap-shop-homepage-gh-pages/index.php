<?php
require_once("includes/database.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage | Chain Gang</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Chain Gang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Winkelwagen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h5 class="my-4"><img src="http://rijwielw-2.rijwielwebshop.nl/wp-content/uploads/2017/03/Fluit-logo.jpg" height="150" width="250" </h5>
            <div class="list-group">
                <a href="#" class="list-group-item">Mannenfietsen</a>
                <a href="#" class="list-group-item">Vrouwenfietsen</a>
                <a href="#" class="list-group-item">Kinderfietsen</a>
            </div>

        </div>



        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.1675582418025!2d6.2963730157544315!3d51.96736997971336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c784c716ae2ee7%3A0xe3665d8a07166e2a!2sGraafschap+College!5e0!3m2!1snl!2snl!4v1557911538288!5m2!1snl!2snl" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-lg-6">

                        <h2>Contact</h2>
                        <p class="contact">
                            J.F. Kennedylaan 49 <br>
                            7001 EA             <br>
                            Doetinchem          <br>
                            <br>
                            Tel: 06 94039382
                        </p>

                    </div>

                </div>

                <div class="row" >

                    <div id="col-lg-6">

                    <h2>Contact opnemen</h2>

                    <form class="form" type="get">

                        Voornaam:<br>
                        <input type="text" name="Vnaam" required><br><br>
                        Achternaam:<br>
                        <input type="text" name="Anaam" required><br><br>
                        E-mail:<br>
                        <input type="email" name="Email" required><br><br>
                        Bericht: <br>
                        <textarea name="bericht" cols="55" rows="10" required></textarea><br>
                        <br>
                        <input type="submit">

                    </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Chain Gang Gang 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

