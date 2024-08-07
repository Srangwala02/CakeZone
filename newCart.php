<?php
require_once("config.php");
include 'cartPhp.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/styleCart.css" type="text/css" rel="stylesheet" />

</head>

<body onload="hide()">
    <script>
        function hide() {
            var container = document.getElementsByClassName('container-fluid');
            for (var i = 0; i < container.length; i++) {
                i.visibility = 'hidden';
            }
            var nav = document.getElementsByClassName('navbar');
            for (var i = 0; i < nav.length; i++) {
                i.visibility = 'hidden';
            }
            var modal = document.getElementsByClassName('modal');
            for (var i = 0; i < modal.length; i++) {
                i.visibility = 'hidden';
            }
        }
    </script>

    <?php
    include 'header_nav.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">

            </div>
            <div class="col-lg-3">

            </div>
        </div>
    </div>

    <!-- Cart ---->
    <div id="shopping-cart">
        <div class="txt-heading">Shopping Cart</div>

        <a id="btnEmpty" href="newCart.php?action=empty">Empty Cart</a>
        <?php
        if (isset($_SESSION["cart_item"])) {
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
                    foreach ($_SESSION["cart_item"] as $item) {
                        $item_price = $item["quantity"] * $item["price"];
                    ?>
                        <tr>
                            <td><img src="uploads/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                            <td><?php echo $item["code"]; ?></td>
                            <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                            <td style="text-align:right;"><?php echo "&#x20B9; " . $item["price"]; ?></td>
                            <td style="text-align:right;"><?php echo "&#x20B9; " . number_format($item_price, 2); ?></td>
                            <td style="text-align:center;"><a href="newCart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                        </tr>
                    <?php
                        $total_quantity += $item["quantity"];
                        $count = $total_quantity;
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    ?>

                    <tr>
                        <td colspan="2" align="right">Total:</td>
                        <td align="right"><?php echo $total_quantity; ?></td>
                        <td align="right" colspan="2"><strong><?php echo "&#x20B9; " . number_format($total_price, 2); ?></strong></td>
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

    <?php
    include 'footer.php';
    ?>

</body>

</html>