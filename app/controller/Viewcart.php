<?php


class Viewcart extends Controller {

      public function index(){
        $this->view('menu', []);
        $this->view('viewcart',[]);
      }

}

