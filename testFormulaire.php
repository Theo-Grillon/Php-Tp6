<h2>Exercice2</h2>
<?php
include "formulaire.php";

$form=new Formulaire("testFormulaire.php");
$form->addTextZone("Nom:");
$form->addTextZone("Prenom");
$form->addTextZone("Mail:");
$form->addSelect("Age:");
$form->addGenderChoice();
$form->addButton();
echo $form->getForm();

class Recuperator{
    private $valtab=[];
    public function __construct($tab)
    {
        foreach ($tab as $value){
            $valtab[]=$value;
        }
        echo $valtab;
    }
}

if ($_POST!=null){
    $test=new Recuperator($_POST);
}
?>