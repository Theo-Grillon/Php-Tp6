<?php
class Formulaire{
    private $form="";
    public function __construct($filename)
    {
        $this->form.="<form action='$filename' method='get'><br>";
    }
    function addTextZone($text=""){
        $this->form.="<b>".$text."</b><input type='text' name='$text'><br>";
    }
    function addButton(){
        $this->form.="<input type='submit' value='Envoi'><br>";
    }
    function addSelect($text){
        $this->form.="$text"."<select name='age'>
        <option value=''>--Age--</option>
        <option value='0-20'>0-20</option>
        <option value='20-40'>24-40</option>
        <option value='41-60'>41-60</option>
        <option value='60+'>60 et +</option>
    </select><br>";
    }
    function addGenderChoice(){
        $this->form.="Monsieur<input type=\"checkbox\" name=\"Gender\">
    Madame<input type=\"checkbox\" name=\"Gender\"><br>";
    }
    function getForm(){
        $this->form.="</form>";
        return $this->form;
    }
}
