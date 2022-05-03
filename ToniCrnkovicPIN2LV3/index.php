<?php 
include "classes.php";

$Zap1 = new Nastavnik("Marko", "Mirković", "67101582378");
//$Zap2 = new Zaposlenik("Nikola", "Jorković", "07097527818");
//$Zap3 = new Zaposlenik("Ivana", "Horvat", "40430603930");
//$Zap4 = new Zaposlenik();
/*Zadatak 2
var_dump($Zap1);
var_dump($Zap1);
var_dump($Zap1);
var_dump($Zap1);*/

$Zap1->check();

//Zadatak 3
//echo "Hello ".$Zap1->getIme()." ".$Zap1->getPrezime()." (".$Zap1->getOib().")";

//Zadatak 4
//$Zap1->Hello();

//Zadatak 9
$oPredavac = new Predavac();

//Zadatak 10
$oAsistent = new Asistent("Mirko", "Paponja", "83760875490");
$oAsistent->PripremiNastavu();
$oAsistent->CuvajIspit();
$oAsistent->DrziNastavu();

?>