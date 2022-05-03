<?php
$predmeti = array("Vjerojatnost i statistika", "Web programiranje na strani poslužitelja","Operacijski sustavi","Skriptni programski jezici");
for($i=0; $i<count($predmeti);$i++){
    echo $predmeti[$i]." ".strlen($predmeti[$i])."<br>";
}
?>