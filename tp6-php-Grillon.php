<?php
class FootballTeam{
    public $name, $nbTitles;
    function display(){
        echo "L'équipe ".$this->name." a ".$this->nbTitles." titres";
    }
}
$atl= new FootballTeam();
$atl->name="Falcons";
$atl->nbTitles=8;
$atl->display();