<html>
    <body>
    <table>
        <thead>
            <td>User id</td>
            <td>Username</td>
        </thead>
        <tbody>
            <?php 
            include('functions.php');

            $oUsers = LoadUsers();

            foreach($oUsers as $Item){
                
                if($_SESSION['user_id'] == $Item['user_id']){
                    echo "<tr bgcolor='green'><td>".$Item['user_id']."</td><td>".$Item['username']."</td></tr>";
                }else{
                    echo "<tr><td>".$Item['user_id']."</td><td>".$Item['username']."</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
    </body>
</html>