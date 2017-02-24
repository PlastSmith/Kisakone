<table>
                <thead>
                <th>Joukkkue</th>
                <th>Voitot</th>
                <th>Tasapelit</th>
                <th>Tappiot</th>
                <th>Maaliero</th>
                <th>Tehdyt maalit</th>
                <th>Pisteet</th>
                </thead>
<?php
while ($row = mysqli_fetch_assoc($rLohkoE)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>
            <br>
            Irlanti
            <select name = "koti25">
<?php dropmenu($_REQUEST[koti25]); ?>
            </select>
            Ruotsi
            <select name="vieras25">
<?php dropmenu($_REQUEST[vieras25]); ?>
            </select>
            <br>
            Belgia
            <select name = "koti26">
<?php dropmenu($_REQUEST[koti26]); ?>
            </select>
            Italia
            <select name="vieras26">
<?php dropmenu($_REQUEST[vieras26]); ?>
            </select>
            <br>
            Italia
            <select name = "koti27">
<?php dropmenu($_REQUEST[koti27]); ?>
            </select>
            Ruotsi
            <select name="vieras27">
<?php dropmenu($_REQUEST[vieras27]); ?>
            </select>
            <br>
            Belgia
            <select name = "koti28">
<?php dropmenu($_REQUEST[koti28]); ?>
            </select>
            Irlanti
            <select name="vieras28">
<?php dropmenu($_REQUEST[vieras28]); ?>
            </select>
            <br>
            Italia
            <select name = "koti29">
<?php dropmenu($_REQUEST[koti29]); ?>
            </select>
            Irlanti
            <select name="vieras29">
<?php dropmenu($_REQUEST[vieras29]); ?>
            </select>
            <br>
            Ruotsi
            <select name = "koti30">
<?php dropmenu($_REQUEST[koti30]); ?>
            </select>
            Belgia
            <select name="vieras30">
<?php dropmenu($_REQUEST[vieras30]); ?>
            </select>   
