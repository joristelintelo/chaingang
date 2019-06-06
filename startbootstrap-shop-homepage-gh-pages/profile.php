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

    <title>Inloggen | Chain Gang</title>

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
            <h1 style="text-align: center">Profielpagina</h1>
            <?php
            session_start();

            echo "Klantnummer: " . $_SESSION['id'] . "</br>" . "Gebruikersnaam: " . $_SESSION["username"] . "<br>";


           /*/ $sql = "SELECT  FROM users";
            $result = $conn->query($sql);

            ?>

            <table border="1">
                <tr>
                    <th>id</th>
                    <th>Land</th>
                    <th>Werelddeel</th>
                    <th>Inwoners</th>
                </tr>


                <?php while($row = $result ->fetch_assoc()){
                    echo "<tr>";

                    echo "<td> {$row["id"]} </td>";

                    echo "<td> {$row['Vnaam']} </td>";
                    echo "<td> {$row['Anaam']} </td>";
                    echo "<td> {$row['Straat']} </td>";

                    echo"</tr>";
                }
                ?>
            </table>

/*/         $query = "SELECT * FROM 'users'";
            $result = mysqli_query($query);

            $row = mysqli_fetch_row($result);

            echo $row;



            ?>
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

