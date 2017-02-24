<?php
#############
## LOHKO A ##
#############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='A';";
    $result = mysqli_query($conn, $sql);
    if ($_REQUEST['koti1'] > $_REQUEST['vieras1']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti1']}, maaliero=maaliero+{$_REQUEST['koti1']} - {$_REQUEST['vieras1']}, pisteet=pisteet+3 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras1']} , maaliero = maaliero+{$_REQUEST['vieras1']} - {$_REQUEST['koti1']} WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti1'] < $_REQUEST['vieras1']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti1']}, maaliero = maaliero+{$_REQUEST['koti1']} - {$_REQUEST['vieras1']} WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras1']}, maaliero = maaliero+{$_REQUEST['vieras1']} - {$_REQUEST['koti1']} , pisteet=pisteet+3 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti1']}, maaliero = maaliero+{$_REQUEST['koti1']} - {$_REQUEST['vieras1']}, pisteet=pisteet+1 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras1']}, maaliero = maaliero+{$_REQUEST['vieras1']} - {$_REQUEST['koti1']}, pisteet=pisteet+1 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti2'] > $_REQUEST['vieras2']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti2']}, maaliero = maaliero+{$_REQUEST['koti2']} - {$_REQUEST['vieras2']}, pisteet=pisteet+3 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras2']}, maaliero = maaliero+{$_REQUEST['vieras2']} - {$_REQUEST['koti2']} WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti2'] < $_REQUEST['vieras2']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti2']}, maaliero = maaliero+{$_REQUEST['koti2']} - {$_REQUEST['vieras2']} WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras2']}, maaliero = maaliero+{$_REQUEST['vieras2']} - {$_REQUEST['koti2']} , pisteet=pisteet+3 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti2']}, maaliero = maaliero+{$_REQUEST['koti2']} - {$_REQUEST['vieras2']}, pisteet=pisteet+1 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras2']}, maaliero = maaliero+{$_REQUEST['vieras2']} - {$_REQUEST['koti2']}, pisteet=pisteet+1 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti3'] > $_REQUEST['vieras3']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti3']}, maaliero = maaliero+{$_REQUEST['koti3']} - {$_REQUEST['vieras3']}, pisteet=pisteet+3 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras3']}, maaliero = maaliero+{$_REQUEST['vieras3']} - {$_REQUEST['koti3']} WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti3'] < $_REQUEST['vieras3']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti3']}, maaliero = maaliero+{$_REQUEST['koti3']} - {$_REQUEST['vieras3']} WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras3']}, maaliero = maaliero+{$_REQUEST['vieras3']} - {$_REQUEST['koti3']} , pisteet=pisteet+3 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti3']}, maaliero = maaliero+{$_REQUEST['koti3']} - {$_REQUEST['vieras3']}, pisteet=pisteet+1 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras3']}, maaliero = maaliero+{$_REQUEST['vieras3']} - {$_REQUEST['koti3']}, pisteet=pisteet+1 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti4'] > $_REQUEST['vieras4']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti4']}, maaliero = maaliero+{$_REQUEST['koti4']} - {$_REQUEST['vieras4']}, pisteet=pisteet+3 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras4']}, maaliero = maaliero+{$_REQUEST['vieras4']} - {$_REQUEST['koti4']} WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti4'] < $_REQUEST['vieras4']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti4']}, maaliero = maaliero+{$_REQUEST['koti4']} - {$_REQUEST['vieras4']} WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras4']}, maaliero = maaliero+{$_REQUEST['vieras4']} - {$_REQUEST['koti4']} , pisteet=pisteet+3 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti4']}, maaliero = maaliero+{$_REQUEST['koti4']} - {$_REQUEST['vieras4']}, pisteet=pisteet+1 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras4']}, maaliero = maaliero+{$_REQUEST['vieras4']} - {$_REQUEST['koti4']}, pisteet=pisteet+1 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti5'] > $_REQUEST['vieras5']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti5']}, maaliero = maaliero+{$_REQUEST['koti5']} - {$_REQUEST['vieras5']}, pisteet=pisteet+3 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras5']}, maaliero = maaliero+{$_REQUEST['vieras5']} - {$_REQUEST['koti5']} WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti5'] < $_REQUEST['vieras5']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti5']}, maaliero = maaliero+{$_REQUEST['koti5']} - {$_REQUEST['vieras5']} WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras5']}, maaliero = maaliero+{$_REQUEST['vieras5']} - {$_REQUEST['koti5']} , pisteet=pisteet+3 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti5']}, maaliero = maaliero+{$_REQUEST['koti5']} - {$_REQUEST['vieras5']}, pisteet=pisteet+1 WHERE  joukkue='Romania' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras5']}, maaliero = maaliero+{$_REQUEST['vieras5']} - {$_REQUEST['koti5']}, pisteet=pisteet+1 WHERE  joukkue='Albania' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti6'] > $_REQUEST['vieras6']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti6']}, maaliero = maaliero+{$_REQUEST['koti6']} - {$_REQUEST['vieras6']}, pisteet=pisteet+3 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras6']}, maaliero = maaliero+{$_REQUEST['vieras6']} - {$_REQUEST['koti6']} WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti6'] < $_REQUEST['vieras6']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti6']}, maaliero = maaliero+{$_REQUEST['koti6']} - {$_REQUEST['vieras6']} WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras6']}, maaliero = maaliero+{$_REQUEST['vieras6']} - {$_REQUEST['koti6']} , pisteet=pisteet+3 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti6']}, maaliero = maaliero+{$_REQUEST['koti6']} - {$_REQUEST['vieras6']}, pisteet=pisteet+1 WHERE  joukkue='Sveitsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras6']}, maaliero = maaliero+{$_REQUEST['vieras6']} - {$_REQUEST['koti6']}, pisteet=pisteet+1 WHERE  joukkue='Ranska' ;";
        $result = mysqli_query($conn, $sql);
    }
}

#############
## LOHKO B ##
#############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='B';";
    $result = mysqli_query($conn, $sql);

    if ($_REQUEST['koti7'] > $_REQUEST['vieras7']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti7']}, maaliero=maaliero+{$_REQUEST['koti7']} - {$_REQUEST['vieras7']}, pisteet=pisteet+3 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras7']} , maaliero = maaliero+{$_REQUEST['vieras7']} - {$_REQUEST['koti7']} WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti7'] < $_REQUEST['vieras7']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti7']}, maaliero = maaliero+{$_REQUEST['koti7']} - {$_REQUEST['vieras7']} WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras7']}, maaliero = maaliero+{$_REQUEST['vieras7']} - {$_REQUEST['koti7']} , pisteet=pisteet+3 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
   } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti7']}, maaliero = maaliero+{$_REQUEST['koti7']} - {$_REQUEST['vieras7']}, pisteet=pisteet+1 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras7']}, maaliero = maaliero+{$_REQUEST['vieras7']} - {$_REQUEST['koti7']}, pisteet=pisteet+1 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti8'] > $_REQUEST['vieras8']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti8']}, maaliero = maaliero+{$_REQUEST['koti8']} - {$_REQUEST['vieras8']}, pisteet=pisteet+3 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras8']}, maaliero = maaliero+{$_REQUEST['vieras8']} - {$_REQUEST['koti8']} WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti8'] < $_REQUEST['vieras8']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti8']}, maaliero = maaliero+{$_REQUEST['koti8']} - {$_REQUEST['vieras8']} WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras8']}, maaliero = maaliero+{$_REQUEST['vieras8']} - {$_REQUEST['koti8']} , pisteet=pisteet+3 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti8']}, maaliero = maaliero+{$_REQUEST['koti8']} - {$_REQUEST['vieras8']}, pisteet=pisteet+1 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras8']}, maaliero = maaliero+{$_REQUEST['vieras8']} - {$_REQUEST['koti8']}, pisteet=pisteet+1 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti9'] > $_REQUEST['vieras9']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti9']}, maaliero = maaliero+{$_REQUEST['koti9']} - {$_REQUEST['vieras9']}, pisteet=pisteet+3 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras9']}, maaliero = maaliero+{$_REQUEST['vieras9']} - {$_REQUEST['koti9']} WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti9'] < $_REQUEST['vieras9']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti9']}, maaliero = maaliero+{$_REQUEST['koti9']} - {$_REQUEST['vieras9']} WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras9']}, maaliero = maaliero+{$_REQUEST['vieras9']} - {$_REQUEST['koti9']} , pisteet=pisteet+3 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti9']}, maaliero = maaliero+{$_REQUEST['koti9']} - {$_REQUEST['vieras9']}, pisteet=pisteet+1 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras9']}, maaliero = maaliero+{$_REQUEST['vieras9']} - {$_REQUEST['koti9']}, pisteet=pisteet+1 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti10'] > $_REQUEST['vieras10']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti10']}, maaliero = maaliero+{$_REQUEST['koti10']} - {$_REQUEST['vieras10']}, pisteet=pisteet+3 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras10']}, maaliero = maaliero+{$_REQUEST['vieras10']} - {$_REQUEST['koti10']} WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti10'] < $_REQUEST['vieras10']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti10']}, maaliero = maaliero+{$_REQUEST['koti10']} - {$_REQUEST['vieras10']} WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras10']}, maaliero = maaliero+{$_REQUEST['vieras10']} - {$_REQUEST['koti10']} , pisteet=pisteet+3 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti10']}, maaliero = maaliero+{$_REQUEST['koti10']} - {$_REQUEST['vieras10']}, pisteet=pisteet+1 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras10']}, maaliero = maaliero+{$_REQUEST['vieras10']} - {$_REQUEST['koti10']}, pisteet=pisteet+1 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti11'] > $_REQUEST['vieras11']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti11']}, maaliero = maaliero+{$_REQUEST['koti11']} - {$_REQUEST['vieras11']}, pisteet=pisteet+3 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras11']}, maaliero = maaliero+{$_REQUEST['vieras11']} - {$_REQUEST['koti11']} WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti11'] < $_REQUEST['vieras11']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti11']}, maaliero = maaliero+{$_REQUEST['koti11']} - {$_REQUEST['vieras11']} WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras11']}, maaliero = maaliero+{$_REQUEST['vieras11']} - {$_REQUEST['koti11']} , pisteet=pisteet+3 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti11']}, maaliero = maaliero+{$_REQUEST['koti11']} - {$_REQUEST['vieras11']}, pisteet=pisteet+1 WHERE  joukkue='Slovakia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras11']}, maaliero = maaliero+{$_REQUEST['vieras11']} - {$_REQUEST['koti11']}, pisteet=pisteet+1 WHERE  joukkue='Englanti' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti12'] > $_REQUEST['vieras12']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti12']}, maaliero = maaliero+{$_REQUEST['koti12']} - {$_REQUEST['vieras12']}, pisteet=pisteet+3 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras12']}, maaliero = maaliero+{$_REQUEST['vieras12']} - {$_REQUEST['koti12']} WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti12'] < $_REQUEST['vieras12']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti12']}, maaliero = maaliero+{$_REQUEST['koti12']} - {$_REQUEST['vieras12']} WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras12']}, maaliero = maaliero+{$_REQUEST['vieras12']} - {$_REQUEST['koti12']} , pisteet=pisteet+3 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti12']}, maaliero = maaliero+{$_REQUEST['koti12']} - {$_REQUEST['vieras12']}, pisteet=pisteet+1 WHERE  joukkue='Venäjä' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras12']}, maaliero = maaliero+{$_REQUEST['vieras12']} - {$_REQUEST['koti12']}, pisteet=pisteet+1 WHERE  joukkue='Wales' ;";
        $result = mysqli_query($conn, $sql);
    }
}

#############
## LOHKO C ##
#############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='C';";
    $result = mysqli_query($conn, $sql);

    if ($_REQUEST['koti13'] > $_REQUEST['vieras13']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti13']}, maaliero=maaliero+{$_REQUEST['koti13']} - {$_REQUEST['vieras13']}, pisteet=pisteet+3 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras13']} , maaliero = maaliero+{$_REQUEST['vieras13']} - {$_REQUEST['koti13']} WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti13'] < $_REQUEST['vieras13']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti13']}, maaliero = maaliero+{$_REQUEST['koti13']} - {$_REQUEST['vieras13']} WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras13']}, maaliero = maaliero+{$_REQUEST['vieras13']} - {$_REQUEST['koti13']} , pisteet=pisteet+3 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti13']}, maaliero = maaliero+{$_REQUEST['koti13']} - {$_REQUEST['vieras13']}, pisteet=pisteet+1 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras13']}, maaliero = maaliero+{$_REQUEST['vieras13']} - {$_REQUEST['koti13']}, pisteet=pisteet+1 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti14'] > $_REQUEST['vieras14']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti14']}, maaliero = maaliero+{$_REQUEST['koti14']} - {$_REQUEST['vieras14']}, pisteet=pisteet+3 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras14']}, maaliero = maaliero+{$_REQUEST['vieras14']} - {$_REQUEST['koti14']} WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti14'] < $_REQUEST['vieras14']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti14']}, maaliero = maaliero+{$_REQUEST['koti14']} - {$_REQUEST['vieras14']} WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras14']}, maaliero = maaliero+{$_REQUEST['vieras14']} - {$_REQUEST['koti14']} , pisteet=pisteet+3 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti14']}, maaliero = maaliero+{$_REQUEST['koti14']} - {$_REQUEST['vieras14']}, pisteet=pisteet+1 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras14']}, maaliero = maaliero+{$_REQUEST['vieras14']} - {$_REQUEST['koti14']}, pisteet=pisteet+1 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti15'] > $_REQUEST['vieras15']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti15']}, maaliero = maaliero+{$_REQUEST['koti15']} - {$_REQUEST['vieras15']}, pisteet=pisteet+3 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras15']}, maaliero = maaliero+{$_REQUEST['vieras15']} - {$_REQUEST['koti15']} WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti15'] < $_REQUEST['vieras15']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti15']}, maaliero = maaliero+{$_REQUEST['koti15']} - {$_REQUEST['vieras15']} WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras15']}, maaliero = maaliero+{$_REQUEST['vieras15']} - {$_REQUEST['koti15']} , pisteet=pisteet+3 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti15']}, maaliero = maaliero+{$_REQUEST['koti15']} - {$_REQUEST['vieras15']}, pisteet=pisteet+1 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras15']}, maaliero = maaliero+{$_REQUEST['vieras15']} - {$_REQUEST['koti15']}, pisteet=pisteet+1 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti16'] > $_REQUEST['vieras16']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti16']}, maaliero = maaliero+{$_REQUEST['koti16']} - {$_REQUEST['vieras16']}, pisteet=pisteet+3 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras16']}, maaliero = maaliero+{$_REQUEST['vieras16']} - {$_REQUEST['koti16']} WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti16'] < $_REQUEST['vieras16']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti16']}, maaliero = maaliero+{$_REQUEST['koti16']} - {$_REQUEST['vieras16']} WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras16']}, maaliero = maaliero+{$_REQUEST['vieras16']} - {$_REQUEST['koti16']} , pisteet=pisteet+3 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti16']}, maaliero = maaliero+{$_REQUEST['koti16']} - {$_REQUEST['vieras16']}, pisteet=pisteet+1 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras16']}, maaliero = maaliero+{$_REQUEST['vieras16']} - {$_REQUEST['koti16']}, pisteet=pisteet+1 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti17'] > $_REQUEST['vieras17']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti17']}, maaliero = maaliero+{$_REQUEST['koti17']} - {$_REQUEST['vieras17']}, pisteet=pisteet+3 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras17']}, maaliero = maaliero+{$_REQUEST['vieras17']} - {$_REQUEST['koti17']} WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti17'] < $_REQUEST['vieras17']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti17']}, maaliero = maaliero+{$_REQUEST['koti17']} - {$_REQUEST['vieras17']} WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras17']}, maaliero = maaliero+{$_REQUEST['vieras17']} - {$_REQUEST['koti17']} , pisteet=pisteet+3 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti17']}, maaliero = maaliero+{$_REQUEST['koti17']} - {$_REQUEST['vieras17']}, pisteet=pisteet+1 WHERE  joukkue='Pohjois-Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras17']}, maaliero = maaliero+{$_REQUEST['vieras17']} - {$_REQUEST['koti17']}, pisteet=pisteet+1 WHERE  joukkue='Saksa' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti18'] > $_REQUEST['vieras18']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti18']}, maaliero = maaliero+{$_REQUEST['koti18']} - {$_REQUEST['vieras18']}, pisteet=pisteet+3 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras18']}, maaliero = maaliero+{$_REQUEST['vieras18']} - {$_REQUEST['koti18']} WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti18'] < $_REQUEST['vieras18']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti18']}, maaliero = maaliero+{$_REQUEST['koti18']} - {$_REQUEST['vieras18']} WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras18']}, maaliero = maaliero+{$_REQUEST['vieras18']} - {$_REQUEST['koti18']} , pisteet=pisteet+3 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti18']}, maaliero = maaliero+{$_REQUEST['koti18']} - {$_REQUEST['vieras18']}, pisteet=pisteet+1 WHERE  joukkue='Ukraina' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras18']}, maaliero = maaliero+{$_REQUEST['vieras18']} - {$_REQUEST['koti18']}, pisteet=pisteet+1 WHERE  joukkue='Puola' ;";
        $result = mysqli_query($conn, $sql);
    }
}
##############
### LOHKO D ##
##############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='D';";
    $result = mysqli_query($conn, $sql);

    if ($_REQUEST['koti19'] > $_REQUEST['vieras19']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti19']}, maaliero=maaliero+{$_REQUEST['koti19']} - {$_REQUEST['vieras19']}, pisteet=pisteet+3 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras19']} , maaliero = maaliero+{$_REQUEST['vieras19']} - {$_REQUEST['koti19']} WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti19'] < $_REQUEST['vieras19']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti19']}, maaliero = maaliero+{$_REQUEST['koti19']} - {$_REQUEST['vieras19']} WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras19']}, maaliero = maaliero+{$_REQUEST['vieras19']} - {$_REQUEST['koti19']} , pisteet=pisteet+3 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti19']}, maaliero = maaliero+{$_REQUEST['koti19']} - {$_REQUEST['vieras19']}, pisteet=pisteet+1 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras19']}, maaliero = maaliero+{$_REQUEST['vieras19']} - {$_REQUEST['koti19']}, pisteet=pisteet+1 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti20'] > $_REQUEST['vieras20']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti20']}, maaliero = maaliero+{$_REQUEST['koti20']} - {$_REQUEST['vieras20']}, pisteet=pisteet+3 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras20']}, maaliero = maaliero+{$_REQUEST['vieras20']} - {$_REQUEST['koti20']} WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti20'] < $_REQUEST['vieras20']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti20']}, maaliero = maaliero+{$_REQUEST['koti20']} - {$_REQUEST['vieras20']} WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras20']}, maaliero = maaliero+{$_REQUEST['vieras20']} - {$_REQUEST['koti20']} , pisteet=pisteet+3 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti20']}, maaliero = maaliero+{$_REQUEST['koti20']} - {$_REQUEST['vieras20']}, pisteet=pisteet+1 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras20']}, maaliero = maaliero+{$_REQUEST['vieras20']} - {$_REQUEST['koti20']}, pisteet=pisteet+1 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti21'] > $_REQUEST['vieras21']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti21']}, maaliero = maaliero+{$_REQUEST['koti21']} - {$_REQUEST['vieras21']}, pisteet=pisteet+3 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras21']}, maaliero = maaliero+{$_REQUEST['vieras21']} - {$_REQUEST['koti21']} WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti21'] < $_REQUEST['vieras21']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti21']}, maaliero = maaliero+{$_REQUEST['koti21']} - {$_REQUEST['vieras21']} WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras21']}, maaliero = maaliero+{$_REQUEST['vieras21']} - {$_REQUEST['koti21']} , pisteet=pisteet+3 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti21']}, maaliero = maaliero+{$_REQUEST['koti21']} - {$_REQUEST['vieras21']}, pisteet=pisteet+1 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras21']}, maaliero = maaliero+{$_REQUEST['vieras21']} - {$_REQUEST['koti21']}, pisteet=pisteet+1 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti22'] > $_REQUEST['vieras22']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti22']}, maaliero = maaliero+{$_REQUEST['koti22']} - {$_REQUEST['vieras22']}, pisteet=pisteet+3 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras22']}, maaliero = maaliero+{$_REQUEST['vieras22']} - {$_REQUEST['koti22']} WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti22'] < $_REQUEST['vieras22']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti22']}, maaliero = maaliero+{$_REQUEST['koti22']} - {$_REQUEST['vieras22']} WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras22']}, maaliero = maaliero+{$_REQUEST['vieras22']} - {$_REQUEST['koti22']} , pisteet=pisteet+3 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti22']}, maaliero = maaliero+{$_REQUEST['koti22']} - {$_REQUEST['vieras22']}, pisteet=pisteet+1 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras22']}, maaliero = maaliero+{$_REQUEST['vieras22']} - {$_REQUEST['koti22']}, pisteet=pisteet+1 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti23'] > $_REQUEST['vieras23']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti23']}, maaliero = maaliero+{$_REQUEST['koti23']} - {$_REQUEST['vieras23']}, pisteet=pisteet+3 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras23']}, maaliero = maaliero+{$_REQUEST['vieras23']} - {$_REQUEST['koti23']} WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti23'] < $_REQUEST['vieras23']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti23']}, maaliero = maaliero+{$_REQUEST['koti23']} - {$_REQUEST['vieras23']} WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras23']}, maaliero = maaliero+{$_REQUEST['vieras23']} - {$_REQUEST['koti23']} , pisteet=pisteet+3 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti23']}, maaliero = maaliero+{$_REQUEST['koti23']} - {$_REQUEST['vieras23']}, pisteet=pisteet+1 WHERE  joukkue='Kroatia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras23']}, maaliero = maaliero+{$_REQUEST['vieras23']} - {$_REQUEST['koti23']}, pisteet=pisteet+1 WHERE  joukkue='Espanja' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti24'] > $_REQUEST['vieras24']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti24']}, maaliero = maaliero+{$_REQUEST['koti24']} - {$_REQUEST['vieras24']}, pisteet=pisteet+3 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras24']}, maaliero = maaliero+{$_REQUEST['vieras24']} - {$_REQUEST['koti24']} WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti24'] < $_REQUEST['vieras24']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti24']}, maaliero = maaliero+{$_REQUEST['koti24']} - {$_REQUEST['vieras24']} WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras24']}, maaliero = maaliero+{$_REQUEST['vieras24']} - {$_REQUEST['koti24']} , pisteet=pisteet+3 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti24']}, maaliero = maaliero+{$_REQUEST['koti24']} - {$_REQUEST['vieras24']}, pisteet=pisteet+1 WHERE  joukkue='Tshekki' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras24']}, maaliero = maaliero+{$_REQUEST['vieras24']} - {$_REQUEST['koti24']}, pisteet=pisteet+1 WHERE  joukkue='Turkki' ;";
        $result = mysqli_query($conn, $sql);
    }
}

#############
## LOHKO E ##
############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='E';";
    $result = mysqli_query($conn, $sql);

    if ($_REQUEST['koti25'] > $_REQUEST['vieras25']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti25']}, maaliero=maaliero+{$_REQUEST['koti25']} - {$_REQUEST['vieras25']}, pisteet=pisteet+3 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras25']} , maaliero = maaliero+{$_REQUEST['vieras25']} - {$_REQUEST['koti25']} WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti25'] < $_REQUEST['vieras25']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti25']}, maaliero = maaliero+{$_REQUEST['koti25']} - {$_REQUEST['vieras25']} WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras25']}, maaliero = maaliero+{$_REQUEST['vieras25']} - {$_REQUEST['koti25']} , pisteet=pisteet+3 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti25']}, maaliero = maaliero+{$_REQUEST['koti25']} - {$_REQUEST['vieras25']}, pisteet=pisteet+1 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras25']}, maaliero = maaliero+{$_REQUEST['vieras25']} - {$_REQUEST['koti25']}, pisteet=pisteet+1 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti26'] > $_REQUEST['vieras26']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti26']}, maaliero = maaliero+{$_REQUEST['koti26']} - {$_REQUEST['vieras26']}, pisteet=pisteet+3 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras26']}, maaliero = maaliero+{$_REQUEST['vieras26']} - {$_REQUEST['koti26']} WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti26'] < $_REQUEST['vieras26']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti26']}, maaliero = maaliero+{$_REQUEST['koti26']} - {$_REQUEST['vieras26']} WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras26']}, maaliero = maaliero+{$_REQUEST['vieras26']} - {$_REQUEST['koti26']} , pisteet=pisteet+3 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti26']}, maaliero = maaliero+{$_REQUEST['koti26']} - {$_REQUEST['vieras26']}, pisteet=pisteet+1 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras26']}, maaliero = maaliero+{$_REQUEST['vieras26']} - {$_REQUEST['koti26']}, pisteet=pisteet+1 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti27'] > $_REQUEST['vieras27']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti27']}, maaliero = maaliero+{$_REQUEST['koti27']} - {$_REQUEST['vieras27']}, pisteet=pisteet+3 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras27']}, maaliero = maaliero+{$_REQUEST['vieras27']} - {$_REQUEST['koti27']} WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti27'] < $_REQUEST['vieras27']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti27']}, maaliero = maaliero+{$_REQUEST['koti27']} - {$_REQUEST['vieras27']} WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras27']}, maaliero = maaliero+{$_REQUEST['vieras27']} - {$_REQUEST['koti27']} , pisteet=pisteet+3 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti27']}, maaliero = maaliero+{$_REQUEST['koti27']} - {$_REQUEST['vieras27']}, pisteet=pisteet+1 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras27']}, maaliero = maaliero+{$_REQUEST['vieras27']} - {$_REQUEST['koti27']}, pisteet=pisteet+1 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti28'] > $_REQUEST['vieras28']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti28']}, maaliero = maaliero+{$_REQUEST['koti28']} - {$_REQUEST['vieras28']}, pisteet=pisteet+3 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras28']}, maaliero = maaliero+{$_REQUEST['vieras28']} - {$_REQUEST['koti28']} WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti28'] < $_REQUEST['vieras28']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti28']}, maaliero = maaliero+{$_REQUEST['koti28']} - {$_REQUEST['vieras28']} WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras28']}, maaliero = maaliero+{$_REQUEST['vieras28']} - {$_REQUEST['koti28']} , pisteet=pisteet+3 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti28']}, maaliero = maaliero+{$_REQUEST['koti28']} - {$_REQUEST['vieras28']}, pisteet=pisteet+1 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras28']}, maaliero = maaliero+{$_REQUEST['vieras28']} - {$_REQUEST['koti28']}, pisteet=pisteet+1 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti29'] > $_REQUEST['vieras29']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti29']}, maaliero = maaliero+{$_REQUEST['koti29']} - {$_REQUEST['vieras29']}, pisteet=pisteet+3 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras29']}, maaliero = maaliero+{$_REQUEST['vieras29']} - {$_REQUEST['koti29']} WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti29'] < $_REQUEST['vieras29']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti29']}, maaliero = maaliero+{$_REQUEST['koti29']} - {$_REQUEST['vieras29']} WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras29']}, maaliero = maaliero+{$_REQUEST['vieras29']} - {$_REQUEST['koti29']} , pisteet=pisteet+3 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti29']}, maaliero = maaliero+{$_REQUEST['koti29']} - {$_REQUEST['vieras29']}, pisteet=pisteet+1 WHERE  joukkue='Italia' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras29']}, maaliero = maaliero+{$_REQUEST['vieras29']} - {$_REQUEST['koti29']}, pisteet=pisteet+1 WHERE  joukkue='Irlanti' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti30'] > $_REQUEST['vieras30']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti30']}, maaliero = maaliero+{$_REQUEST['koti30']} - {$_REQUEST['vieras30']}, pisteet=pisteet+3 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras30']}, maaliero = maaliero+{$_REQUEST['vieras30']} - {$_REQUEST['koti30']} WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti30'] < $_REQUEST['vieras30']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti30']}, maaliero = maaliero+{$_REQUEST['koti30']} - {$_REQUEST['vieras30']} WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras30']}, maaliero = maaliero+{$_REQUEST['vieras30']} - {$_REQUEST['koti30']} , pisteet=pisteet+3 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti30']}, maaliero = maaliero+{$_REQUEST['koti30']} - {$_REQUEST['vieras30']}, pisteet=pisteet+1 WHERE  joukkue='Ruotsi' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras30']}, maaliero = maaliero+{$_REQUEST['vieras30']} - {$_REQUEST['koti30']}, pisteet=pisteet+1 WHERE  joukkue='Belgia' ;";
        $result = mysqli_query($conn, $sql);
    }
}

#############
## LOHKO F ##
############
if ($_REQUEST["action"] == "lohkovaihe") {
    $sql = "UPDATE euro2016 SET voitot=0, tasapelit = 0, tappiot=0, tehdyt =0, maaliero = 0, pisteet=0 WHERE lohko='F';";
    $result = mysqli_query($conn, $sql);

    if ($_REQUEST['koti31'] > $_REQUEST['vieras31']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti31']}, maaliero=maaliero+{$_REQUEST['koti31']} - {$_REQUEST['vieras31']}, pisteet=pisteet+3 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras31']} , maaliero = maaliero+{$_REQUEST['vieras31']} - {$_REQUEST['koti31']} WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti31'] < $_REQUEST['vieras31']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti31']}, maaliero = maaliero+{$_REQUEST['koti31']} - {$_REQUEST['vieras31']} WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras31']}, maaliero = maaliero+{$_REQUEST['vieras31']} - {$_REQUEST['koti31']} , pisteet=pisteet+3 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti31']}, maaliero = maaliero+{$_REQUEST['koti31']} - {$_REQUEST['vieras31']}, pisteet=pisteet+1 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras31']}, maaliero = maaliero+{$_REQUEST['vieras31']} - {$_REQUEST['koti31']}, pisteet=pisteet+1 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    }


    if ($_REQUEST['koti32'] > $_REQUEST['vieras32']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti32']}, maaliero = maaliero+{$_REQUEST['koti32']} - {$_REQUEST['vieras32']}, pisteet=pisteet+3 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras32']}, maaliero = maaliero+{$_REQUEST['vieras32']} - {$_REQUEST['koti32']} WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti32'] < $_REQUEST['vieras32']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti32']}, maaliero = maaliero+{$_REQUEST['koti32']} - {$_REQUEST['vieras32']} WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras32']}, maaliero = maaliero+{$_REQUEST['vieras32']} - {$_REQUEST['koti32']} , pisteet=pisteet+3 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti32']}, maaliero = maaliero+{$_REQUEST['koti32']} - {$_REQUEST['vieras32']}, pisteet=pisteet+1 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras32']}, maaliero = maaliero+{$_REQUEST['vieras32']} - {$_REQUEST['koti32']}, pisteet=pisteet+1 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti33'] > $_REQUEST['vieras33']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti33']}, maaliero = maaliero+{$_REQUEST['koti33']} - {$_REQUEST['vieras33']}, pisteet=pisteet+3 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras33']}, maaliero = maaliero+{$_REQUEST['vieras33']} - {$_REQUEST['koti33']} WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti33'] < $_REQUEST['vieras33']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti33']}, maaliero = maaliero+{$_REQUEST['koti33']} - {$_REQUEST['vieras33']} WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras33']}, maaliero = maaliero+{$_REQUEST['vieras33']} - {$_REQUEST['koti33']} , pisteet=pisteet+3 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti33']}, maaliero = maaliero+{$_REQUEST['koti33']} - {$_REQUEST['vieras33']}, pisteet=pisteet+1 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras33']}, maaliero = maaliero+{$_REQUEST['vieras33']} - {$_REQUEST['koti33']}, pisteet=pisteet+1 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti34'] > $_REQUEST['vieras34']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti34']}, maaliero = maaliero+{$_REQUEST['koti34']} - {$_REQUEST['vieras34']}, pisteet=pisteet+3 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras34']}, maaliero = maaliero+{$_REQUEST['vieras34']} - {$_REQUEST['koti34']} WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti34'] < $_REQUEST['vieras34']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti34']}, maaliero = maaliero+{$_REQUEST['koti34']} - {$_REQUEST['vieras34']} WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras34']}, maaliero = maaliero+{$_REQUEST['vieras34']} - {$_REQUEST['koti34']} , pisteet=pisteet+3 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti34']}, maaliero = maaliero+{$_REQUEST['koti34']} - {$_REQUEST['vieras34']}, pisteet=pisteet+1 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras34']}, maaliero = maaliero+{$_REQUEST['vieras34']} - {$_REQUEST['koti34']}, pisteet=pisteet+1 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti35'] > $_REQUEST['vieras35']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti35']}, maaliero = maaliero+{$_REQUEST['koti35']} - {$_REQUEST['vieras35']}, pisteet=pisteet+3 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras35']}, maaliero = maaliero+{$_REQUEST['vieras35']} - {$_REQUEST['koti35']} WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti35'] < $_REQUEST['vieras35']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti35']}, maaliero = maaliero+{$_REQUEST['koti35']} - {$_REQUEST['vieras35']} WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras35']}, maaliero = maaliero+{$_REQUEST['vieras35']} - {$_REQUEST['koti35']} , pisteet=pisteet+3 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti35']}, maaliero = maaliero+{$_REQUEST['koti35']} - {$_REQUEST['vieras35']}, pisteet=pisteet+1 WHERE  joukkue='Islanti' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras35']}, maaliero = maaliero+{$_REQUEST['vieras35']} - {$_REQUEST['koti35']}, pisteet=pisteet+1 WHERE  joukkue='Itävalta' ;";
        $result = mysqli_query($conn, $sql);
    }

    if ($_REQUEST['koti36'] > $_REQUEST['vieras36']) {
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['koti36']}, maaliero = maaliero+{$_REQUEST['koti36']} - {$_REQUEST['vieras36']}, pisteet=pisteet+3 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tapiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['vieras36']}, maaliero = maaliero+{$_REQUEST['vieras36']} - {$_REQUEST['koti36']} WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
    } else if ($_REQUEST['koti36'] < $_REQUEST['vieras36']) {
        $sql = "UPDATE euro2016 SET tappiot = tappiot+1, tehdyt = tehdyt+{$_REQUEST['koti36']}, maaliero = maaliero+{$_REQUEST['koti36']} - {$_REQUEST['vieras36']} WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET voitot= voitot+1, tehdyt = tehdyt+{$_REQUEST['vieras36']}, maaliero = maaliero+{$_REQUEST['vieras36']} - {$_REQUEST['koti36']} , pisteet=pisteet+3 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE euro2016 SET tasapelit = tasapelit+1, tehdyt = tehdyt+{$_REQUEST['koti36']}, maaliero = maaliero+{$_REQUEST['koti36']} - {$_REQUEST['vieras36']}, pisteet=pisteet+1 WHERE  joukkue='Unkari' ;";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE euro2016 SET tasapelit= tasapelit+1, tehdyt = tehdyt+{$_REQUEST['vieras36']}, maaliero = maaliero+{$_REQUEST['vieras36']} - {$_REQUEST['koti36']}, pisteet=pisteet+1 WHERE  joukkue='Portugali' ;";
        $result = mysqli_query($conn, $sql);
    }
}
?>