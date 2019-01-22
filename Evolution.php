<?php
require_once('Pokemon.php');
class Evolution extends Pokemon{
    /* var is variable (use $) */
    var $evolution;
    
    function __construct($pokeName, $pokeHP, $pokeType,$pokeEvol){
        $this->name=$pokeName;
        $this->hp=$pokeHP;
        $this->type=$pokeType;
        $this->evolution=$pokeEvol;

    }

    private function getEvolution(){
        echo $this->evolution;
    }

    function getHP(){
        echo $this->hp . " (Hit Points)";
     }

    function wannaEvolve($pokeName){
        echo $this->name," will evolve to ",$this->getEvolution(),"</br>";
    }

    function modeFighting($mode){
        if($mode=='fighting'){
            echo $this->fighting($mode);
        }else{
            echo "can't fight";
        }
    }




}


//use constructor
$carterpie=new Evolution('Caterpie','40','Grass', 'Metapod');
$charmander = new Evolution('Charmander','50','Fire', 'charmeleon');
$diglett= new Evolution('Diglet','30','Fighting', 'Dugtrio');

echo "We play a Pokemon Card Game </br>";
echo "If you have ",$carterpie->getName()," with type ",$carterpie->getType()," and HP ", $carterpie->getHP()," Then the Defending Pokémon is now Paralyzed </br>";
echo "If you have ",$charmander->getName()," with type ",$charmander->getType()," and HP ",$charmander->getHP()," Then Discard 1 Energy card attached to Charmander in order to use this attack </br>";
echo "If you have ",$diglett->getName()," with type ",$diglett->getType()," and HP ",$diglett->getHP()," Then Do Nothing </br>";

// echo "<br> After that <br>";
// echo $carterpie->getName()," will evolve into ", $carterpie->getEvolution(),"</br>";
// echo $charmander->getName()," will evolve into ", $charmander->getEvolution(),"</br>";
// echo $diglett->getName()," will evolve into ", $diglett->getEvolution(),"</br>";

echo "<br> After that <br>";
echo $carterpie->wannaEvolve($carterpie->name);
echo $charmander->wannaEvolve($charmander->name);
echo $diglett->wannaEvolve($diglett->name);

echo "$carterpie->name is hungry so ",$carterpie->name," feel ",$carterpie->getMood('hungry'),'</br>';
echo "$charmander->name is full so ",$charmander->name," feel ",$carterpie->getMood('full'),'</br>';

echo "$diglett->name ",$diglett->modeFighting('exhausted'),' because it exhausted</br>';
echo "$diglett->name mode is ",$diglett->modeFighting('fighting'),'</br>';

//error because protected accessible at declared class as well as in classes that extend that class.
echo "$diglett->name mode is ",$diglett->fighting('fighting');

;?>