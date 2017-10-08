<?php

class User {

    public function addUser($data){
         $host = "localhost";
         $user = "root";
         $pass = "";
         $db = "mvc";
         $connect = mysqli_connect($host, $user, $pass, $db);

         $query = "INSERT INTO users(Username, Password_Hash, First_Name, Last_Name, Email, Address, Date_Created) VALUES ('".$data['username']."', '".$data['password']."', '".$data['firstName']."', '".$data['lastName']."', '".$data['email']."', '".$data['address']."', '".$data['dateCreated']."');";
         $result = mysqli_query($connect ,$query);
    }

    public function checkUser($data){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        $query = "SELECT * FROM users WHERE Username = "."'".$data['username']."'"." AND Password_Hash ="."'".$data['password']."';";
        $result = mysqli_query($connect ,$query);

        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION['username'] = $row['Username'];
            $_SESSION['userId'] = $row['UserId'];
            $_SESSION['firstName'] = $row['First_Name'];
            $_SESSION['lastName'] = $row['Last_Name'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['address'] = $row['Address'];
            $_SESSION['memberSince'] = $row['Date_Created'];
            $_SESSION['logged'] = TRUE;
            header("Location: main");
        }
        else{
            echo mysqli_error($connect);
        }
    }

    public function getPastOrders(){
        error_reporting(E_ALL ^ E_NOTICE);
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        session_start();
        $currentUser = @$_SESSION['userId'];

        $query="SELECT orders.OrderId , orderdetail.Quantity, product.Product_Name FROM orders INNER JOIN orderdetail ON orders.UserId ="."'".$currentUser."' "."AND orders.OrderId = orderdetail.OrderId INNER JOIN product ON product.ProductId = orderdetail.ProductId";
        $result = mysqli_query($connect, $query);


        //$currentOrder = 0;
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        return $data;
    }

    public function logout(){

    }

}