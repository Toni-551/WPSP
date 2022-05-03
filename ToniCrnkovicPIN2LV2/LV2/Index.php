<html>
<header></header>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<label>Username</lable><br>
<input type="text" name="username"><br>
<label>Password</lable><br>
<input type="password" name="password"><br>
<button type="submit">Login</button>
</form>
<?php
include('functions.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $oUser = CheckUser($_POST['username'], $_POST['password']);
    if($oUser['username']!=null && $oUser['user_id']!=null){
        SetSessions($oUser);
        header("Location: user.php");
    }
}
?>
</body>
</html>