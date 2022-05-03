<?php
session_start();
function LoadUsers(){
    $string = file_get_contents("users.json");
    $oUsers = json_decode($string, true);
    return $oUsers;
}
function CheckUser($sUsername, $sPassword){
    $oUser=array();
    $oUser['user_id']=null;
    $oUser['username']=null;
    $oUsers = LoadUsers();
    foreach($oUsers as $user){
        if($user['username']==$sUsername && $user['password']==$sPassword){
            $oUser['user_id']=$user['user_id'];
            $oUser['username']=$sUsername;
        }
    }
    return $oUser;
}

function SetSessions($oUser){
    $_SESSION['user_id']=$oUser['user_id'];
    $_SESSION['username']=$oUser['username'];
}
?>