<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body >
        <div class="container">
            <button class="btn btn-primary m-3" id="zap">Zaposlenik</button>
            <button class="btn btn-primary m-3" id="odj">Odjel</button>
        </div>
        <script type="text/javascript">
            document.getElementById("zap").onclick = function () {
                location.href = "zaposlenici.php";
            };
            document.getElementById("odj").onclick = function () {
                location.href = "odjeli.php";
            };
        </script>
    </body>

</html>

<?php 

/*
ini_set('memory_limit', '2048M');

include "connection.php";


$sQuery = "SELECT * FROM employees LIMIT 50";
$oRecord = $oConnection->query($sQuery);
$oEmployees = array();
while($oRow = $oRecord->fetch(PDO::FETCH_BOTH))
{
 $oEmployee = new Employee($oRow['emp_no'], $oRow['birth_date'], $oRow['first_name'], $oRow['last_name'], $oRow['gender'], $oRow['hire_date']);
 array_push($oEmployees, $oEmployee);
}
?>
<table>
    <tr>
        <th>Rbr</th>
        <th>Id</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
    </tr>
<?php
 foreach($oEmployees as $emp){
     echo "<tr><td>$emp->emp_no </td><td>$emp->birth_date </td><td>$emp->first_name </td><td>$emp->last_name </td><td>$emp->gender </td><td>$emp->hire_date </td></tr>";    
 }
 echo"</table>";
 */
?>