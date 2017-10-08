<?php

class Home extends Controller {


	public function index(){

        $data = $this->model('Inventory')->getPop();
        $this->view('menu', []);
        $this->view('main', $data);

        if(isset($_POST['cartButton'])){
            //Get the Id of the product we want to add from the main.php view
            $id = $_POST['toAdd'];
            //Create a variable called newProduct that uses the method getCartItem in the Inventory Model to get the product
            $newProduct = $this->model('Inventory')->getCartItem($id);
            //Store this product into our Session array
            $_SESSION['cart'][] = $newProduct;
        }
	}

    public function inventory(){
        //Run the getAll method from the Inventory Model
        $data = $this->model('Inventory')->getAll();

        $this->view('menu', []);
        $this->view('inventory', $data);
    }

    public function viewcart(){
        $data = $this->model('Shoppingcart')->displayCart();
        $this->view('menu', []);
        $this->view('viewcart', $data);

        if(isset($_POST['removeFromCart'])){
            //Get the index of the product we want to remove from the cart
            $index = $_POST['toDelete'];
            //Call the removeCartItem function to remove the product from the cart
            $this->model('Shoppingcart')->removeCartItem($index);
        }
    }

}