            <div id="content">
                <h2>Checkout</h2>
                <h3>Customer Infomation</h3>

                    First Name: <input type="text" name="firstName" value=<?php echo $_SESSION['firstName'];?> disabled /><br/>
                    Last Name: <input type="text" name="lastName" value=<?php echo $_SESSION['lastName'];?> disabled /><br/>
                    Email: <input type="text" name="email" value=<?php echo $_SESSION['email'];?> disabled/><br/>
                    Address: <input type="text" name="address" value=<?php echo $_SESSION['address'];?> /><br/>


                <h3>Order Information</h3>
                    <?php
                        echo "<table>";
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
                                    <form method='post' action='checkout'>
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

                        $_SESSION['orderTotal'] = $total;
                    ?>
                <h3>Confirm Order</h3>
                    <form method="post" action="checkout">
                        <input type="submit" name="submitOrder" value="Confirm"/>
                        <input type="submit" name="cancelOrder" value="Cancel"/>
                    </form>
            </div>
    </body>
</html>