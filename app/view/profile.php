<div id="content">
    <h2>Your Profile</h2>
    <div id="userInfo">
        <table class='aTable'>
            <tr><td><?php echo "Username: ".$_SESSION['username'] ?></td></tr>
            <tr><td><?php echo "First Name: ".$_SESSION['firstName'] ?></td></tr>
            <tr><td><?php echo "Last Name: ".$_SESSION['lastName'] ?></td></tr>
            <tr><td><?php echo "Email: ".$_SESSION['email'] ?></td></tr>
            <tr><td><?php echo "Address: ".$_SESSION['address'] ?></td></tr>
        </table>
    </div>
    <div id="pastOrders">
        <h3>Past Orders</h3>
        <?php
        echo "<table class='aTable'>";
        echo "<tr><td>Order Num</td><td>Product Name</td><td>Quantity</td></tr>";
        foreach($data as $item){
            echo "<tr>";
            echo "<td>".$item[0]."</td>";
            echo "<td>".$item[2]."</td>";
            echo "<td>".$item[1]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>

    </div>
</div>


</body>
</html>