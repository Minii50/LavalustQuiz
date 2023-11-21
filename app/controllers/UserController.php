<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
	public function index(){
        $this->call->view('login');
    }
    public function create_account(){
        $this->call->view('create_account');
    }

    public function create_quiz(){
        $this->call->view('create_quiz');
    }
    public function login() {
        $this->call->view('login');
    }
}
?>
