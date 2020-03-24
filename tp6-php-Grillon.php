<?php
class FootballTeam{
    //public $name, $nbTitles; pour exo1
    private $name, $nbTitles;
    const Txt="Nombre d'équipes";
    static $inc=0;
    static function getTeamNum(){
        echo FootballTeam::$inc." équipes<br>";
    }
    function display(){
        echo "L'équipe ".$this->name." a ".$this->nbTitles." titres<br>";
    }
    function getName(){
        return $this->name;
    }
    function getNbTitles(){
        return $this->nbTitles;
    }
    function setName($name){
        $this->name=$name;
    }
    function setNbTitle($num){
        $this->nbTitles=$num;
    }
    function __construct($name, $num){
        $this->name=$name;
        $this->nbTitles=$num;
        FootballTeam::$inc++;
    }
    function __destruct(){
        echo "Destructor<br>";
    }
}

//-----Tests-----
/*$atl= new FootballTeam(); pour exo1
$atl->name="Atlanta Falcons";
$atl->nbTitles=8;
$atl->display();

$atl->setName("Atlanta Falcons");
$atl->setNbTitle(8);
$atl->display();*/
$atl= new FootballTeam("Atlanta Falcons", 8);
$char=new FootballTeam("Chargers", 0);
$steel= new FootballTeam("Pittsburgh Steelers", 5);
$atl->display();
$char->display();
$steel->display();
FootballTeam::getTeamNum();