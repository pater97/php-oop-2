<?php

 class product{
    public $code; //coice identificativo prodotto
    public $name; //nome prodotto
    public $type; //tipo di nprodotto (casa/cucina/giardino)
    public $price; //prezzo prodotto
    public $avalabile; //disponibilità del prodotto

    function __construct($code,$name,$type,$price,$avalabile=false){
        $this->code = $code;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->avalabile = $avalabile;
    }

 }

 class gardenProduct extends product{
     public $power; //eletric/manual/water
     public $application; //wood,grass,ground
     public $genre; //knife,to dig,cleaner

     function __construct($code,$name,$type,$price,$avalabile=false,$power,$application,$genre){
         parent:: __construct($code,$name,$type,$price,$avalabile=false);
         $this->power = $power;
         $this->application = $application;
         $this->genre = $genre;
     }
 }


 class fashionProduct extends product{
     public $categories; //hoody,pants,giacet,gloves
     public $season; //winter,summer
     public $materials; //denim,poliester,wool,cashmire

     function __construct ($code,$name,$type,$price,$avalabile=false,$categories,$season,$materials){
        parent:: __construct($code,$name,$type,$price,$avalabile=false);
        $this->categories = $categories;
        $this->season = $season;
        $this->materials = $materials;
    }
 }

 class kitchenProduct extends product{
     public $whatCook; //sweet or salty
     public $use; //oven,micronde,stove
     public $kind; //gadget/elettrodomestico

     function __construct($code,$name,$type,$price,$avalabile=false,$whatCook,$use,$kind){
        parent:: __construct($code,$name,$type,$price,$avalabile=false);
        $this->whatCook = $whatCook;
        $this->use = $use;
        $this->kind = $kind;
    }
 }

 
 $ax = new gardenProduct(rand(0,100),'ax','garden',19.99,true,'manual','wood','knife');
 $gloves = new kitchenProduct(rand(0,100),'gloves','outdoor',4.99,false,'gloves','winter','wool');
 $colander = new fashionProduct(rand(0,100),'colander','kitchen',9.99,true,'salty','stove','plastic');
