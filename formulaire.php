<?php
class Formulaire{
    private $form="";
    public function __construct($filename)
    {
        $this->form.="<form action='$filename' method='post'><br>";
    }
    function addTextZone($text){
        $this->form.=$text."<input type='text'><br>";
    }
    function addButton(){
        $this->form.="<input type='submit' value='Envoi'><br>";
    }
    function getForm(){
        return $this->form;
    }
}
