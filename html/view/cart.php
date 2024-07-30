<div class="products">

    <?php


    // if ($results) {

    //     //output results from database

    //     while ($obj = $results->fetch_object()) {



    //         echo '<div class="product">';

    //         echo '<form method="post" action="cart_update.php">';

    //         echo '<div class="product-thumb"><img src="images/' . $obj->img  . '"></div>';

    //         echo '<div class="product-content"><h3>' . $obj->title . '</h3>';

    //         echo '<div class="product-desc">' . $obj->product_desc . '</div>';

    //         echo '<div class="product-info">Price ' . $currency . $obj->price . ' <button class="add_to_cart">Add To Cart</button></div>';

    //         echo '</div>';

    //         echo '<input type="hidden" name="product_code" value="' . $obj->product_code . '" />';

    //         echo '<input type="hidden" name="type" value="add" />';

    //         echo '<input type="hidden" name="return_url" value="' . $current_url . '" />';

    //         echo '</form>';

    //         echo '</div>';
    //     }
    // }

    ?>

</div>


<div class="shopping-cart">

    <h2>Your Shopping Cart</h2>

    <?php

    if (isset($_SESSION["product"])) {

        $total = 0;

        echo '<ol>';

        foreach ($_SESSION["product"] as $cart_itm) {

            echo '<li class="cart-itm">';

            echo '<span class="remove-itm"><a href="cart_update.php?removep=' . $cart_itm["code"] . '&return_url=' . $current_url . '">&times;</a></span>';

            echo '<h3>' . $cart_itm["name"] . '</h3>';

            echo '<div class="p-code">P code : ' . $cart_itm["code"] . '</div>';

            echo '<div class="p-qty">Qty : ' . $cart_itm["qty"] . '</div>';

            echo '<div class="p-price">Price :' . $currency . $cart_itm["price"] . '</div>';

            echo '</li>';

            $subtotal = ($cart_itm["price"] * $cart_itm["qty"]);

            $total = ($total + $subtotal);
        }

        echo '</ol>';

        echo '<span class="check-out-txt"><strong>Total : ' . $currency . $total . '</strong> <a href="view_cart.php">Check-out!</a></span>';

        echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url=' . $current_url . '">Empty Cart</a></span>';
    } else {

        echo 'Your Cart is empty';
    }

    ?>

</div>