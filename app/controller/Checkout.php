<?php


class Checkout extends Controller {

    public function index(){
        $this->view('menu', []);
        $this->view('checkout', []);

        if(isset($_POST['removeFromCart'])){
            //Get the index of the product we want to remove from the cart
            $index = $_POST['toDelete'];
            //Call the removeCartItem function to remove the product from the cart
            $this->model('Shoppingcart')->removeCartItem($index);
        }

        if(isset($_POST['cancelOrder'])){
            header("Location: index/viewcart");
        }

        if(isset($_POST['submitOrder'])){
            $data['firstName'] = $_SESSION['firstName'];
            $data['lastName'] = $_SESSION['lastName'];
            $data['userId'] = $_SESSION['userId'];
            $data['email'] = $_SESSION['email'];
            $data['address'] = $_SESSION['address'];

            @date_default_timezone_get();
            $date = @date('Y/m/d h:i:s', time());
            $data['dateOrdered'] = $date;

            $data['orderTotal'] = $_SESSION['orderTotal'];
            $data['products'] = $_SESSION['cart'];

            $this->model('Shoppingcart')->submitOrder($data);

            $_SESSION['cart'] = "";
            header("Location: checkout/thanks");
        }
    }

    public function thanks(){
        $this->view('thanks', []);

    }

}