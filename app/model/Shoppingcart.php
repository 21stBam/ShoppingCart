<?php


class ShoppingCart {

    public function displayCart(){

    }

    public function removeCartItem($index){
        //delete the index
        unset($_SESSION['cart'][$index]);
        //normalize the array
        $_SESSION['cart'] = array_values($_SESSION['cart']);

        //var_dump($_SESSION['cart']);
    }

    public function submitOrder($data){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        $query = "INSERT INTO orders(UserId, Address, Total_Cost, Date_Ordered) VALUES("."'".$data['userId']."' , '".$data['address']."' , '".$data['orderTotal']."' , '".$data['dateOrdered']."');";
        $result = mysqli_query($connect, $query);

        $query = "SELECT orderId FROM orders ORDER BY orderId DESC LIMIT 1";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        $orderNum = $row[0];
        $numBought = 1;

        foreach($data['products'] as $product){
            $query = "INSERT INTO Orderdetail(OrderId, ProductId, Quantity) VALUES('".$orderNum."' , '".$product[0]."' , '".$numBought."');";
            $result = mysqli_query($connect, $query);

            $query="update product set Quantity = Quantity-1 where ProductId ="."'".$product[0]."';";
            $result = mysqli_query($connect, $query);
        }



    }

}