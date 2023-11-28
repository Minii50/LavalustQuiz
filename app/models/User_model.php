<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function create_account($name, $email, $password)
    {
        $data = array(
            'username' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        );

        $result = $this->db->table('users')->insert($data);

        if ($result) {
            return true;
        }
    }

    public function check_login($username, $password)
    {
        $user = $this->db->table('users')->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
