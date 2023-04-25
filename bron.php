<?php
include 'connect.php';

if($result = $mysqli->query("SELECT * FROM bronirovanie")){
    foreach($result as $row){
         
        $bronfio = $row["fio"];
        $bronin = $row["checkin"]; 
        $bronout = $row["checkout"];
        $bronvzrosl = $row["colvzrosl"];
        $brondetey = $row["coldetey"];

        echo "<tr class='table__tr'>";
        echo "<td class='table__td'>${bronfio}</td>";
        echo "<td class='table__td'>${bronin}</td>";
        echo "<td class='table__td'>${bronout}</td>";
        echo "<td class='table__td'>${bronvzrosl}</td>";
        echo "<td class='table__td'>${brondetey}</td>";
        echo "</tr>";
    }
}
?>
