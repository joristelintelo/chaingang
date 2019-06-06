<?php
require_once("../includes/databases.php");
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
            <h1 style="text-align: center">Winkelwagen</h1>
            <?php
            session_start();
            require_once("dbcontroller.php");
            $db_handle = new DBController();
            if(!empty($_GET["action"])) {
                switch($_GET["action"]) {
                    case "add":
                        if(!empty($_POST["quantity"])) {
                            $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
                            $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));

                            if(!empty($_SESSION["cart_item"])) {
                                if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                                    foreach($_SESSION["cart_item"] as $k => $v) {
                                        if($productByCode[0]["code"] == $k) {
                                            if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                                            }
                                            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                        }
                                    }
                                } else {
                                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                                }
                            } else {
                                $_SESSION["cart_item"] = $itemArray;
                            }
                        }
                        break;
                    case "remove":
                        if(!empty($_SESSION["cart_item"])) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                if($_GET["code"] == $k)
                                    unset($_SESSION["cart_item"][$k]);
                                if(empty($_SESSION["cart_item"]))
                                    unset($_SESSION["cart_item"]);
                            }
                        }
                        break;
                    case "empty":
                        unset($_SESSION["cart_item"]);
                        break;
                }
            }
            ?>
            <HTML>
            <HEAD>
                <TITLE>Simple PHP Shopping Cart</TITLE>
                <link href="style.css" type="text/css" rel="stylesheet" />
            </HEAD>
            <BODY>
            <div id="shopping-cart">
                <div class="txt-heading">Shopping Cart</div>

                <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
                <?php
                if(isset($_SESSION["cart_item"])){
                    $total_quantity = 0;
                    $total_price = 0;
                    ?>
                    <table class="tbl-cart" cellpadding="10" cellspacing="1">
                        <tbody>
                        <tr>
                            <th style="text-align:left;">Name</th>
                            <th style="text-align:left;">Code</th>
                            <th style="text-align:right;" width="5%">Quantity</th>
                            <th style="text-align:right;" width="10%">Unit Price</th>
                            <th style="text-align:right;" width="10%">Price</th>
                            <th style="text-align:center;" width="5%">Remove</th>
                        </tr>
                        <?php
                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["price"];
                            ?>
                            <tr>
                                <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                                <td><?php echo $item["code"]; ?></td>
                                <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                                <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                                <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                            </tr>
                            <?php
                            $total_quantity += $item["quantity"];
                            $total_price += ($item["price"]*$item["quantity"]);
                        }
                        ?>

                        <tr>
                            <td colspan="2" align="right">Total:</td>
                            <td align="right"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                } else {
                    ?>
                    <div class="no-records">Your Cart is Empty</div>
                    <?php
                }
                ?>
            </div>

            <div id="product-grid">
                <div class="txt-heading">Products</div>
                <?php
                $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
                if (!empty($product_array)) {
                    foreach($product_array as $key=>$value){
                        ?>
                        <div class="product-item">
                            <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                                <div class="product-tile-footer">
                                    <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                                </div>
                            </form>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            </BODY>
            </HTML>
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

