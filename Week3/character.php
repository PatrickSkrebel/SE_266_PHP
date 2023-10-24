<?php

class Character{
    private $playerName;
    private static $playerCount;
    private $health;

    public function __construct($p){
        echo "New Player entered the game";
        $this->playerName = $p;
        $this->health = 100;
    }

    public function setPlayerName($p){
        $this->playerName = $p;
    }

    public function getPlayerName(){
        return $this->playerName;
    }

    public function setPlayerHealth($h){
        $this->health = $h;
    }

    public function getPlayerHealth(){
        return $this->health;
    }

    public static function getPlayerCount(){
        return self::$playerCount;
    }
}

class Wizard extends Character{
    private $attack;
    private $defense;
    private $magic;

    public function __construct($p, $a, $d, $m){
        $this->attack = $a;
        $this->defense = $d;
        $this->magic = $m;
    }

    
}

$player1 = new Character("Patrick");

echo "<br>";
echo $player1->getPlayerName();

echo "<br>";
$player1->setPlayerName("Steve");

echo "<br>";
echo $player1->getPlayerName();

echo "<br>";
echo "Player count is: " .Character::getPlayerCount();


$wizard = new Wizard("Jack", 100,13,13);

echo "<br>";
echo $wizard->getPlayerName();
$player->setMagic(99);

?>