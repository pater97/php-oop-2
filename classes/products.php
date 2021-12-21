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

 $ascia = new product(rand(0,100),'ascia','garden',19.99,true);
 $scolapasta = new product(rand(0,100),'scolapasta','kitchen',9.99,true);
 $guanti = new product(rand(0,100),'guanti','outdoor',4.99,false);
