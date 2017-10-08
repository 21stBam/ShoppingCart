<?php


class Profile extends Controller {

    public function index(){
        $data = $this->model('User')->getPastOrders();
        $this->view('menu',[]);
        $this->view('profile', $data);

    }

}