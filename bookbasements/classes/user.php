<?php
class User{
    //create user's information
    public $user_name, $user_password, $user_id, $user_object, $user_hash, $conn;

    //Call conn
    public function __construct($conn){
        $this-> conn = $conn;
    }

    public function verify_login($name, $password){
        //call user name and password to verify login
        $this->user_name = $name;
        $this->uer_password = $password;

        echo "<br><hr>";
        
        //find user name in database
        if($this->findUser() == 0){
            echo "Error!";
        } else {
            //check password
            $this->user_hash = $this->user_object['user_hash'];
            if($this->checkPassword()){
                $this->login();
            } else {
                echo "You entered wrong password. Please try again!";
            }
        }
    }

    //find user name in database
    public function findUser(){
        $sql = "SELECT userid, user_name, user_hash FROM users WHERE user_name = '$this->user_name'";
        $result = $this->connn->query($sql);

        if($result->num_rows > 0){
            $this->user_object = $result->fetch_assoc();
        }

        return $result->num_rows;
    }

    public function login(){

    }

    public function checkPassword(){
        return password_verify($this->user_password, $this->user_hash);
    }

    public function register(){
        
    }


}