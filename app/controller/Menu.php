<?php


class Menu extends Controller {

    public function index(){
        $this->view('menu',[]);
        if(isset($_POST['logoutButton'])){
            session_destroy();
            header("Location: login");
        }





    }

}