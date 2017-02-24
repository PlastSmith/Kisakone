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
while ($row = mysqli_fetch_assoc($rLohkoC)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>

            <br>

            Puola
            <select name = "koti13">
<?php dropmenu($_REQUEST[koti13]); ?>
            </select>
            Pohjois-Irlanti
            <select name="vieras13">
<?php dropmenu($_REQUEST[vieras13]); ?>
            </select>

            <br>

            Saksa
            <select name = "koti14">
<?php dropmenu($_REQUEST[koti14]); ?>
            </select>
            Ukraina
            <select name="vieras14">
<?php dropmenu($_REQUEST[vieras14]); ?>
            </select>

            <br>

            Unkraina
            <select name = "koti15">
<?php dropmenu($_REQUEST[koti15]); ?>
            </select>
            Pohjois-Irlanti
            <select name="vieras15">
<?php dropmenu($_REQUEST[vieras15]); ?>
            </select>

            <br>

            Saksa
            <select name = "koti16">
<?php dropmenu($_REQUEST[koti16]); ?>
            </select>
            Puola
            <select name="vieras16">
<?php dropmenu($_REQUEST[vieras16]); ?>
            </select>

            <br>

            Pohjois-Irlanti
            <select name = "koti17">
<?php dropmenu($_REQUEST[koti17]); ?>
            </select>
            Saksa
            <select name="vieras17">
<?php dropmenu($_REQUEST[vieras17]); ?>
            </select>
            <br>
            Ukraina
            <select name = "koti18">
<?php dropmenu($_REQUEST[koti18]); ?>
            </select>
            Puola
            <select name="vieras18">
<?php dropmenu($_REQUEST[vieras18]); ?>
            </select>
