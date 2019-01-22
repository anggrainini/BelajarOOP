<?php 
require_once('Poke_Interface.php');


class Play{
    
    const GAME_VERSION = '1.0';
    var $gameversion='1.0';

    function howToPlay($pokeName){
        return "$pokeName will use electricity to fight the enemy, enemy lost 10 points";
    }

    function getGameVersion(){
        return self::GAME_VERSION;        
    }

    function getVersion(){
       // define("GAME_VERSION", "1.0");
       // echo '<br>Version :'.constant("GAME_VERSION");

       //works
       echo '<br>Const Version :'.self::GAME_VERSION;
       echo '<br>Const Version :'.Play::GAME_VERSION;
       echo '<br> Var Version',$this->gameversion;
       $pokeName = 'Pikachu';
       echo '<br> how to play : '.self::howToPlay($pokeName);
       echo '<br> how to play2 : '.$this->howToPlay($pokeName);
       echo '<br> Get Game Version using $this -->', $this->getGameVersion();
       echo '<br> Get Game Version using self:: -->', self::getGameVersion();
       
       //error
       echo '<br> This const',$this->GAME_VERSION; //Undefined property: Play::$GAME_VERSION 
       echo '<br> Self Var',self::$gameversion; //Uncaught Error: Access to undeclared static property: Play::$gameversion

      
    }

    function getHP($pokeName){

    }

    function getType($pokeName){

    }

    function getDamage($pokeName){

    }

}

class NowPlaying extends Play{

    var $play = "Pokemon Die";
    function howToPlay($pokeName){
        return $play;
    }
}


$pikachu=new Play();
$pikachu->howToPlay('Pikachu');
//$pikachu->getVersion();

echo $pikachu::howToPlay('Pikachu').'<br>';
echo NowPlaying::howToPlay("Pikachu").'<br>';

;?>