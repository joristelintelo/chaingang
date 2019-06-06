<?php
require_once("includes/database.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chaingang";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT Naam, Prijs, Beschrijving, KorteBeschrijving, Catagorie FROM product WHERE Catagorie = 'K' ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kinderfietsen | Chain Gang</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Chain Gang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h3 class="my-4"><img src="http://rijwielw-2.rijwielwebshop.nl/wp-content/uploads/2017/03/Fluit-logo.jpg" height="150" width="250" </h3><br><br>
            <div class="list-group">
                <a href="Mannenfietsen_Pagina.php" class="list-group-item">Mannenfietsen</a>
                <a href="Vrouwenfietsen_Pagina.php" class="list-group-item">Vrouwenfietsen</a>
                <a href="Kinderfietsen_Pagina.php" class="list-group-item" style="color: black">Kinderfietsen</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <br><h1>Kinderfietsen</h1><br>
            <div class="row">

                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                    echo "
                    <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100\">

                        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">
                                <a href=\"#\" style=\"color:black;\">{$row["Naam"]}</a>
                            </h4>
                            <h5>{$row["Prijs"]}</h5>
                            <p class=\"card-text\">{$row["KorteBeschrijving"]}</p>
                        </div>
                        <div class=\"card-footer\">
                            <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                    ";

                    }
                } else {
                echo "0 results";
                }
                ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

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

