<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class UserController extends Controller {
	public function index(){
        $this->call->view('login');
    }
    public function create_account(){
        $this->call->view("create_account");
    }

    public function create_quiz(){
        $this->call->view('create_quiz');
    }
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $login_result = $this->user_model->check_login($username, $password);
    
            if ($login_result) {
                $this->call->view('nice_createquiz');
                exit;
            } else {
                echo 'Invalid username or password';
            }
        }
    }

    public function quiz1(){
        $this->call->view('nice_createquiz');
    }
}
?>
