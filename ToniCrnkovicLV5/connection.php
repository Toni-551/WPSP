<?php

include "classes.php";

$oConf=new Configuration();
$oConf->host="127.0.0.1";
$oConf->dbName="employees";
$oConf->username="root";
$oConf->password="";


try
{
 $oConnection = new PDO("mysql:host=$oConf->host;dbname=$oConf->dbName", $oConf->username, $oConf->password);
 //echo "Connected to $oConf->dbName at $oConf->host successfully.";
}
catch (PDOException $pe)
{
 die("Could not connect to the database $oConf->dbname :" . $pe->getMessage());
}


?>