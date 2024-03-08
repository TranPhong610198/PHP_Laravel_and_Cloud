<?php
class User{
    public $username;
    
    public $password;

    public $fullname;

    public function __construct($username, $password, $fullname){
        $this->username = $username;
        $this->password = $password;
        $this->fullname = $fullname;
    }
    
}
