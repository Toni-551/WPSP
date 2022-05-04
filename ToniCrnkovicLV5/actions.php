<?php

include "connection.php";

if(isset($_POST['choice'])){
switch ($_POST['choice']) {
    case "NewEmployee":{
        $sQuery = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ('".$_POST['id']."', '".$_POST['birth']."', '".$_POST['name']."', '".$_POST['lastName']."', '".$_POST['gender']."', '".$_POST['hireDate']."');";
        $oStatement = $oConnection->query($sQuery);
        break;
    }
    case "UpdateEmployee":{
        $sQuery ="UPDATE employees SET first_name='".$_POST['name']."', last_name='".$_POST['lastName']."', birth_date='".$_POST['birth']."', gender='".$_POST['gender']."' WHERE emp_no=".$_POST['id'];
        echo($sQuery);
        $oStatement = $oConnection->query($sQuery);
        break;
    }
    case "DeleteEmployee":{
        $sQuery="DELETE FROM employees WHERE emp_no=".$_POST['id'];
        $oStatement = $oConnection->query($sQuery);
        break;
    }   
    default:
        echo "wrong choice";
        break;
}
}else{
    $statement="";
    echo "choice is not set";
}
?>