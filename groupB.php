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
while ($row = mysqli_fetch_assoc($rLohkoB)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>

            <br>

            Wales
            <select name = "koti7">
<?php dropmenu($_REQUEST[koti7]); ?>
            </select>

            Slovakia
            <select name="vieras7">
<?php dropmenu($_REQUEST[vieras7]); ?>
            </select>

            <br>

            Englanti
            <select name = "koti8">
<?php dropmenu($_REQUEST[koti8]); ?>
            </select>
            Venäjä
            <select name="vieras8">
<?php dropmenu($_REQUEST[vieras8]); ?>
            </select>

            <br>

            Venäjä
            <select name = "koti9">
<?php dropmenu($_REQUEST[koti9]); ?>
            </select>
            Slovakia
            <select name="vieras9">
<?php dropmenu($_REQUEST[vieras9]); ?>
            </select>

            <br>

            Englanti
            <select name = "koti10">
<?php dropmenu($_REQUEST[koti10]); ?>
            </select>
            Wales
            <select name="vieras10">
<?php dropmenu($_REQUEST[vieras10]); ?>
            </select>

            <br>

            Slovakia
            <select name = "koti11">
<?php dropmenu($_REQUEST[koti11]); ?>
            </select>
            Englanti
            <select name="vieras11">
<?php dropmenu($_REQUEST[vieras11]); ?>
            </select>

            <br>

            Venäjä
            <select name = "koti12">
<?php dropmenu($_REQUEST[koti12]); ?>
            </select>
            Wales
            <select name="vieras12">
<?php dropmenu($_REQUEST[vieras12]); ?>
            </select>
