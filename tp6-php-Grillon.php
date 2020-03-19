<?php
class FootballTeam{
    //public $name, $nbTitles; pour exo1
    private $name, $nbTitles;
    function display(){
        echo "L'équipe ".$this->name." a ".$this->nbTitles." titres";
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
}
$atl= new FootballTeam(); /*pour exo1
$atl->name="Atlanta Falcons";
$atl->nbTitles=8;
$atl->display();
*/
$atl->setName("Atlanta Falcons");
$atl->setNbTitle(8);
$atl->display();