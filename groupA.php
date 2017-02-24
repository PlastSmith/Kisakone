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
while ($row = mysqli_fetch_assoc($rLohkoA)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>

            <br>

            Ranska
            <select name = "koti1">
<?php dropmenu($_REQUEST[koti1]); ?>
            </select>

            Romania
            <select name="vieras1">
<?php dropmenu($_REQUEST[vieras1]); ?>
            </select>

            <br>

            Albania
            <select name = "koti2">
<?php dropmenu($_REQUEST[koti2]); ?>
            </select>
            Sveitsi
            <select name="vieras2">
<?php dropmenu($_REQUEST[vieras2]); ?>
            </select>

            <br>

            Romania
            <select name = "koti3">
<?php dropmenu($_REQUEST[koti3]); ?>
            </select>
            Sveitsi
            <select name="vieras3">
<?php dropmenu($_REQUEST[vieras3]); ?>
            </select>

            <br>

            Ranska
            <select name = "koti4">
<?php dropmenu($_REQUEST[koti4]); ?>
            </select>
            Albania
            <select name="vieras4">
<?php dropmenu($_REQUEST[vieras4]); ?>
            </select>

            <br>

            Romania
            <select name = "koti5">
<?php dropmenu($_REQUEST[koti5]); ?>
            </select>
            Albania
            <select name="vieras5">
<?php dropmenu($_REQUEST[vieras5]); ?>
            </select>

            <br>

            Sveitsi
            <select name = "koti6">
<?php dropmenu($_REQUEST[koti6]); ?>
            </select>
            Ranska
            <select name="vieras6">
<?php dropmenu($_REQUEST[vieras6]); ?>
            </select>