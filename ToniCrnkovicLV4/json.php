<?php
include "connection.php";

header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['json_id'])){
switch ($_GET['json_id']) {
    case 'get_all_employees':
        $sQuery="SELECT * FROM employees LIMIT 50";
        $oStatement = $oConnection->query($sQuery);
        $oEmployees = array();
        while($oRow = $oStatement->fetch(PDO::FETCH_BOTH))
        {
            $oEmployee = new Employee($oRow['emp_no'], $oRow['birth_date'], $oRow['first_name'], $oRow['last_name'], $oRow['gender'], $oRow['hire_date']);
            array_push($oEmployees, $oEmployee);
        }
        echo json_encode($oEmployees);
        break;
    case 'get_all_departments':
        $sQuery="SELECT * FROM departments";
        $oStatement = $oConnection->query($sQuery);
        $Departments= array();
        while($oRow = $oStatement->fetch(PDO::FETCH_BOTH))
        {
            $oDepart = new Department($oRow['dept_no'], $oRow['dept_name']);
            array_push($Departments, $oDepart);
        }
        echo json_encode($Departments);
        break;
    case 'get_employee_by_id':
        $sQuery='SELECT * FROM employees WHERE emp_no='.$_GET['employee_id'];
        $oStatement = $oConnection->query($sQuery);
        $oEmployees = array();
        while($oRow = $oStatement->fetch(PDO::FETCH_BOTH))
        {
            $oEmployee = new Employee($oRow['emp_no'], $oRow['birth_date'], $oRow['first_name'], $oRow['last_name'], $oRow['gender'], $oRow['hire_date']);
            array_push($oEmployees, $oEmployee);
        }
        echo json_encode($oEmployees);
        break;
    default:
        echo "error";
        break;
}
}else{
    $statement="";
    echo "json_id is not set";
}


?>