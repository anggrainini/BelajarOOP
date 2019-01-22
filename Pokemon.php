<?php
class Pokemon{
    /* var is variable (use $) */
    var $name;
    var $hp;
    var $type;

    protected $fight;

    private $mood;
    private $happy = 'Happy';
    private $sad = 'Sad';
    

    //example using constructor
    //which are called automatically whenever an object is created.
    function __construct($pokeName, $pokeHP, $pokeType){
        $this->name=$pokeName;
        $this->hp=$pokeHP;
        $this->type=$pokeType;
    }

    /*member function of class Pokemon */
    // function setName($pokeName){
    //     $this->name=$pokeName;
    // }

    function getName(){
        echo $this->name;
    }

    private function setMood($hungerstate){
        if($hungerstate=='hungry'){
           echo  $this->mood=$this->sad;
        }elseif($hungerstate=='full'){
           echo $this->mood=$this->happy;
        }
    }

    function getMood($hungerstate){
        $this->setMood($hungerstate);
    }

    // function setHP($pokeHP){
    //     $this->hp=$pokeHP;
    // }

    function getHP(){
        echo $this->hp;
    }

    protected function fighting($mode){
        return $this->fight=$mode;

    }



    // function setType($pokeType){
    //     $this->type=$pokeType;
    // }

    function getType(){
        echo $this->type;
    }




}


/* create class obj */

//without using constructor
// $carterpie=new Pokemon;
// $charmander = new Pokemon;
// $diglett= new Pokemon;

// /*call function*/
// $carterpie->setName('Caterpie');
// $carterpie->setHP('40');
// $carterpie->setType('Grass');

// $charmander->setName('Charmander');
// $charmander->setHP('50');
// $charmander->setType('Fire');

// $diglett->setName('Diglet');
// $diglett->setHP('30');
// $diglett->setType('Fighting');

//use constructor
// $carterpie=new Pokemon('Caterpie','40','Grass');
// $charmander = new Pokemon('Charmander','50','Fire');
// $diglett= new Pokemon('Diglet','30','Fighting');


// echo "We play a Pokemon Card Game </br>";
// echo "If you have ",$carterpie->getName()," with type ",$carterpie->getType()," and HP ", $carterpie->getHP()," Then the Defending Pokémon is now Paralyzed </br>";
// echo "If you have ",$charmander->getName()," with type ",$charmander->getType()," and HP ",$charmander->getHP()," Then Discard 1 Energy card attached to Charmander in order to use this attack </br>";
// echo "If you have ",$diglett->getName()," with type ",$diglett->getType()," and HP ",$diglett->getHP()," Then Do Nothing </br>";


;?>