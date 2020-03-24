<?php
include "formulaire.php";

$form=new Formulaire("testFormulaire.php");
$form->addTextZone("Votre nom :");
$form->addTextZone("Votre code :");
$form->addButton();
echo $form->getForm();