<?php
include "connection.php";
include "classes.php";

header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['json_id'])){
switch ($_GET['json_id']) {
    case 'get_all_students':{
        $stdom = new Studom();
        echo $stdom->ReturnStudents();
        break;
    }
    case 'get_all_rooms':{
        $stdom = new Studom();
        echo $stdom->ReturnRooms();
        break;
     }
    default:
        echo "error";
        break;

}
}

?>