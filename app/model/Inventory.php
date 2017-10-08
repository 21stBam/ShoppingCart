<?php


class inventory {

    public function getPop(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        $query = "SELECT * FROM product WHERE Popular = '1' AND Quantity > 0;";
        $result = mysqli_query($connect, $query);

        $numResult = mysqli_num_rows($result);

        //First item in array is the number of items
        $resultsArray[0] = $numResult;

        $i = 1;
        //loop to create arrays for each field in products and add them to the resultsArray
        while ($row = mysqli_fetch_array($result)){
           $resultsArray[$i] = $row;
           $i++;
        }
        return $resultsArray;

    }

    public function getAll(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        $query = "SELECT * FROM product WHERE Quantity > '0';";

        $result = mysqli_query($connect, $query);

        $numResult = mysqli_num_rows($result);

        //First item in array is the number of items
        $resultsArray[0] = $numResult;

        $i = 1;
        //loop to create arrays for each field in products and add them to the resultsArray
        while ($row = mysqli_fetch_array($result)){
            $resultsArray[$i] = $row;
            $i++;
        }
        return $resultsArray;
    }

    public function getCartItem($id){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mvc";
        $connect = mysqli_connect($host, $user, $pass, $db);

        $query = "SELECT * FROM product WHERE ProductId = '$id';";
        $result = mysqli_query($connect, $query);
        $newItem = mysqli_fetch_array($result);
        return $newItem;
    }
}