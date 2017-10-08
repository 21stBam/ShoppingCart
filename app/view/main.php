        <div id="content">
            <h2>Popular Products</h2>
                <?php

                    $numRows = $data[0];
                    for($i = 1; $i <= $numRows; $i++){
                        echo "<div id='div$i' class='prod'>";

                            echo "<p class='prodName'>".$data[$i][1]."</p>";

                            $img = $data[$i][6];
                            echo "<img src='$img' width='180px' height='180px' class='prodImg'' />";

                            echo "<p class='prodDesc'>".$data[$i][2]."</p>";
                            echo "<p class='prodQuan'>Quantity: ".$data[$i][3]."</p>";
                            echo "<p class='prodPrice'>Price: $".$data[$i][4].".00</p>";

                                echo "<form method='post' action='main'>";
                                    $id = $data[$i][0];
                                    echo "<input type='submit' id='product$id' name='cartButton' class='cartButton' value='Add to Cart'>";
                                    echo "<input type='hidden' name='toAdd'  value='$id'>";
                                echo "</form>";
                            echo "</div>";

                    }
                ?>
        </div>


    </body>
</html>