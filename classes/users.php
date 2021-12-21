<?php

class user{
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $phoneNumber;
    public $premiumUser;

    function __construct($name,$lastname,$age,$email,$phoneNumber,$premiumUser=false){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->premiumUser = $premiumUser;
    }
}

$user_1 = new user('mario','rossi',50,'mrossi@gmail.com',3334556767);
$user_2 = new user('ludovica','olgiati',27,'ldol@gmail.com',3334526767);
$user_3 = new user('carlo','esposito',80,'espo@gmail.com',3217856767);
