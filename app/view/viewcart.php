        <div id="content">
            <h2>Your Cart</h2>
            <?php
            if($_SESSION['cart'] != null){
                echo "<table class='aTable'>";
                    echo "<tr>";
                        echo "<td>Product</td>";
                        echo "<td>Price</td>";
                    echo "</tr>";
                $num = 0;//used to match indexes for removal
                $total = 0;
                foreach ($_SESSION['cart'] as $item){
                    echo "<tr>";
                        echo "<td>".$item[1]."</td>";
                        echo "<td>$".$item[4].".00</td>";
                        echo "<td>
                                  <form method='post' action='index/viewcart'>
                                        <input type='submit' name='removeFromCart' value='Remove'/>
                                        <input type='hidden' name='toDelete' value='$num'/>
                                  </form>
                             </td>";
                    echo "</tr>";
                    $num++;
                    $total = $total + $item[4];
                }
                echo "</table>";
                echo "Total: $".$total.".00";
            }
            else{
                echo "You have nothing in your cart at the moment.";
            }
            ?>
            <br/><br/><a id="checkoutLink" href="checkout">Continue to Checkout</a>
        </div>



    </body>
</html>