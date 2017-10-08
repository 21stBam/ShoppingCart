<?php


class Login extends Controller {

    public function index(){
        $this->view('login',[]);

        if(isset($_POST['registerButton'])){
            $funct = $this->getRegisterInfo();
        }

        if(isset($_POST['loginButton'])){
            $funct = $this->getLoginInfo();
        }
    }

    public function getLoginInfo(){
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];

        $this->model('User')->checkUser($data);
        $this->view('login',[]);
    }

    public function getRegisterInfo(){

        @date_default_timezone_get();
        $date = @date('Y/m/d h:i:s', time());

        $data = array();
        $data['firstName'] = $_POST['firstname'];
        $data['lastName'] = $_POST['lastname'];
        $data['address'] = $_POST['address'];
        $data['email'] = $_POST['email'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['passwordConfirm'] = $_POST['passwordconfirm'];
        $data['dateCreated'] = $date;

        $this->model('User')->addUser($data);
        $this->view('login',[]);
    }

}