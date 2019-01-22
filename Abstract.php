<?php 
abstract class PokeCard{
    var $pokename='Pikachu';
    var $cardname;

    abstract function openCard();
    abstract function closeCard();
    abstract function pickCard($cardno);

    function __construct($cardname){
        $this->cardname = $cardname;
    }
    
    final function wildCard(){
        echo "<br>You get wildcard, pick 2 card";
    }
}

class Deck extends PokeCard{
    
    public static $shuffle = 'NOW SHUFFLE';
    var $deckname;

    function __construct($deckname, $cardname){
        PokeCard::__construct($cardname);
        $this->deckname= $deckname;
    }

    function getDeckname(){
        echo '<br> Deckname is ',$this->deckname, ' And Card Name is ', $this->cardname,'<br>';
    }

    function openCard(){
        echo "Deck is Open";
    }

    function closeCard(){
        echo "Deck is close";
    }

    function pickCard($cardno){
        echo '<br>You pick No. ',$cardno,' and get ',$this->pokename;
    }


}

$deck1 = new Deck('Trading Card Game','Pikachu');
$deck1->getDeckname();
$deck1->openCard();
$deck1->pickCard('1');
$deck1->wildCard();

//get static
echo '<br>', Deck::$shuffle;

//error
// $deck2 = new PokeCard();
// $deck2->openCard();




;?>