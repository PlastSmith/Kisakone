<?php
$sql = "SELECT * FROM euro2016 ORDER BY pisteet DESC, maaliero DESC, tehdyt DESC;";
$rBest3s = mysqli_query($conn, $sql);

$A1 = $A2 = $A3 = $B1 = $B2= $B3 = $C1 = $C2= $C3 = $D1 = $D2 = $D3 = $E1 = $E2 = $E3 = $F1 = $F2 = $F3 = "tyhja"; // do NOT change the "tyhja"
$a3 = $b3 = $c3 = $d3 = $e3 = $f3 = "tyhja";
$A=$B=$C=$D=$E=$F=1;
$fourBest3S=0;
   
//echo "Parhaat neloset: <br>";

while($row=mysqli_fetch_assoc($rBest3s)) {
    if($row["lohko"] == "A") {
        if ($A == 1 ) {
        $A1=$row["joukkue"];
        $A++;
        } else if ($A==2) {
        $A2=$row["joukkue"];
        $A++;    
        } else if($A==3 && $A3 == "tyhja" && $fourBest3S <4) {
        $A3=$row["joukkue"];
        $a3=$row["lohko"];
        $A++;
        $fourBest3S++;
        //echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
    
    
    if($row["lohko"] == "B") {
        if ($B == 1 ) {
        $B1=$row["joukkue"];
        $B++;
        } else if ($B==2) {
        $B2=$row["joukkue"];
        $B++;    
        } else if($B==3 && $B3 == "tyhja" && $fourBest3S <4) {
        $B3=$row["joukkue"];
        $b3=$row["lohko"];
        $B++;        
        $fourBest3S++;
        //echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
    
    if($row["lohko"] == "C") {
        if ($C == 1 ) {
        $C1=$row["joukkue"];
        $C++;
        } else if ($C==2) {
        $C2=$row["joukkue"];
        $C++;    
        } else if($C==3 && $C3 == "tyhja" && $fourBest3S < 4) {
        $C3=$row["joukkue"];
        $c3=$row["lohko"];
        $C++;        
        $fourBest3S++;
       // echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
    
    if($row["lohko"] == "D") {
        if ($D == 1 ) {
        $D1=$row["joukkue"];
        $D++;
        } else if ($D==2) {
        $D2=$row["joukkue"];
        $D++;    
        } else if($D==3 && $D3 == "tyhja" && $fourBest3S <4) { 
        $D3=$row["joukkue"];
        $d3=$row["lohko"];
        $D++;        
        $fourBest3S++;
        //echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
    
    if($row["lohko"] == "E") {
        if ($E == 1 ) {
        $E1=$row["joukkue"];
        $E++;
        } else if ($E==2) {
        $E2=$row["joukkue"];
        $E++;    
        } else if($E==3 && $E3 == "tyhja" && $fourBest3S <4) {
        $E3=$row["joukkue"];
        $e3=$row["lohko"];
        $E++;        
        $fourBest3S++;
       // echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
    
    if($row["lohko"] == "F") {
        if ($F == 1 ) {
        $F1=$row["joukkue"];
        $F++;
        } else if ($F==2) {
        $F2=$row["joukkue"];
        $F++;    
        } else if($F==3 && $F3 == "tyhja" && $fourBest3S <4) {
        $F3=$row["joukkue"];
        $f3=$row["lohko"];
        $F++;        
        $fourBest3S++;
        //echo $row["lohko"].  " " . $row["joukkue"] . "<br>";
        }
    }
}
    echo "<br><br>";
?>
