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
while ($row = mysqli_fetch_assoc($rLohkoD)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>

            <br>

            Turkki
            <select name = "koti19">
<?php dropmenu($_REQUEST[koti19]); ?>
            </select>
            Kroatia
            <select name="vieras19">
<?php dropmenu($_REQUEST[vieras19]); ?>
            </select>

            <br>

            Espanja
            <select name = "koti20">
<?php dropmenu($_REQUEST[koti20]); ?>
            </select>
            Tshekki
            <select name="vieras20">
<?php dropmenu($_REQUEST[vieras20]); ?>
            </select>

            <br>

            Tshekki
            <select name = "koti21">
<?php dropmenu($_REQUEST[koti21]); ?>
            </select>
            Kroatia
            <select name="vieras21">
<?php dropmenu($_REQUEST[vieras21]); ?>
            </select>

            <br>

            Espanja
            <select name = "koti22">
<?php dropmenu($_REQUEST[koti22]); ?>
            </select>
            Turkki
            <select name="vieras22">
<?php dropmenu($_REQUEST[vieras22]); ?>
            </select>

            <br>

            Kroatia
            <select name = "koti23">
<?php dropmenu($_REQUEST[koti23]); ?>
            </select>
            Espanja
            <select name="vieras23">
<?php dropmenu($_REQUEST[vieras23]); ?>
            </select>

            <br>

            Tshekki
            <select name = "koti24">
<?php dropmenu($_REQUEST[koti24]); ?>
            </select>
            Turkki
            <select name="vieras24">
<?php dropmenu($_REQUEST[vieras24]); ?>
            </select>       

