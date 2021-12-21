<?php

class user{
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $phoneNumber;

    function __construct($name,$lastname,$age,$email,$phoneNumber,$premiumUser=false){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->premiumUser = $premiumUser;
    }
}

class premiumUser extends user{
    public $level;
    public $premiumUser;
    public $discount;
    public $creditCard;

    function __construct($name,$lastname,$age,$email,$phoneNumber,int $level,bool $premiumUser=false){
        parent::__construct($name,$lastname,$age,$email,$phoneNumber);
        $this->level = $level;
        $this->premiumUser = $premiumUser;
    }

    public function setDiscount(){
        if($this->premiumUser){
            if($this->level == 2){
                return $this->discount = '20%';
            }else{
                return $this->discount = '10%';
            }
        } return $this->discount = 'nessuno sconto applicabile';
    }

    public function insertCrediCard($creditCard){
        $this->creditCard = ($creditCard);
    }

}

$user_1 = new premiumUser('mario','rossi',50,'mrossi@gmail.com',3334556767,2,true);
$user_2 = new premiumUser('ludovica','olgiati',27,'ldol@gmail.com',3334526767,0);
$user_3 = new premiumUser('carlo','esposito',80,'espo@gmail.com',3217856767,1,true);
$user_1->setDiscount();
$user_2->setDiscount();
$user_3->setDiscount();
$user_3->insertCrediCard('visa' . ' ' . rand(1111111111111111,9999999999999999));
$user_2->insertCrediCard('visa' . ' ' . rand(1111111111111111,9999999999999999));
$user_1->insertCrediCard('visa' . ' ' . rand(1111111111111111,9999999999999999));

