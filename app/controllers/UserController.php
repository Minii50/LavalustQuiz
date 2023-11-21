<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class UserController extends Controller {
	public function index(){
        $this->call->view('login');
    }
    public function create_account(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
                $name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $user_model = $this->load_model('User_model');
                $user_model->create_user($name, $email, $password);
            } else {
                echo "Invalid form submission.";
            }
        }
        $this->call->view("create_account");
    }

    public function create_quiz(){
        $this->call->view('create_quiz');
    }
    public function login() {
        $this->call->view('login');
    }

    public function quiz1(){
        $this->call->view('nice_createquiz');
    }
}
?>
