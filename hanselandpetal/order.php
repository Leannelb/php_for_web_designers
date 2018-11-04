<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Details - Hansel and Petal</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
    <?php require 'includes/header.php'?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bouquet.php">Build a Bouquet</a></li>
                <li>Order Details</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Your Order</h1>
            <p>Please check the details of your order.</p>
            <table id="order_details">
                <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Item</th>
                    <th scope="col">Color</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Cost</th>
                </tr>
                <tr>
                    <td><img src="images/160_calla_blush_160337318.jpg" alt="" width="80" height="80"/></td>
                    <td>Calla lilies</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_sunflower_146748795.jpg" alt="" width="80" height="80"/></td>
                    <td>Sunflowers</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_iris_purple_121549009.jpg" alt="" width="80" height="80"/></td>
                    <td>Iris</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_alstromeria_87519333.jpg" alt="" width="80" height="80"/></td>
                    <td>Peruvian lilies</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_daffodil_122442732.jpg" alt="" width="80" height="80"/></td>
                    <td>Daffodils (Narcissus)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_gerbera_purple_146798391.jpg" alt="" width="80" height="80"/></td>
                    <td>Gerbera daisies</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_dendrobium2_152158743.jpg" alt="" width="80" height="80"/></td>
                    <td>Dendrobium orchids</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_rose_red_92974998.jpg" alt="" width="80" height="80"/></td>
                    <td>Roses</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_lily_pink_160102549.jpg" alt="" width="80" height="80"/></td>
                    <td>Lilies</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_tulip_purple_160910481.jpg" alt="" width="80" height="80"/></td>
                    <td>Tulips</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_lilac_157045915.jpg" alt="" width="80" height="80"/></td>
                    <td>Lilac</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><img src="images/160_daisy_white_159207232.jpg" alt="" width="80" height="80"/></td>
                    <td>Daisies</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>$</td>
                </tr>
            </table>
            <div id="order_buttons">
                <form method="post">
                    <span>
                    <input class="btn alt" value="Cancel Order" name="cancel" id="cancel" type="submit">
                    </span> <span>
                    <input class="btn checkout" value="Confirm Order" type="submit">
                    </span>
                </form>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
</div>
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>