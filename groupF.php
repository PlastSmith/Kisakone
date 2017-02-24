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
while ($row = mysqli_fetch_assoc($rLohkoF)) {
    echo " <td> {$row['joukkue']} </td> <td> {$row['voitot']} </td> <td> {$row['tasapelit']} </td> <td> {$row['tappiot']} </td> <td> {$row['maaliero']} </td> 
        <td> {$row['tehdyt']} </td> <td> {$row['pisteet']} </td></tr> ";
}
?>
            </table>

            <br>

            Itävalta
            <select name = "koti31">
<?php dropmenu($_REQUEST[koti31]); ?>
            </select>
            Unkari
            <select name="vieras31">
<?php dropmenu($_REQUEST[vieras31]); ?>
            </select>

            <br>

            Portugali
            <select name = "koti32">
<?php dropmenu($_REQUEST[koti32]); ?>
            </select>
            Islanti
            <select name="vieras32">
<?php dropmenu($_REQUEST[vieras32]); ?>
            </select>

            <br>

            Islanti
            <select name = "koti33">
<?php dropmenu($_REQUEST[koti33]); ?>
            </select>
            Unkari
            <select name="vieras33">
<?php dropmenu($_REQUEST[vieras33]); ?>
            </select>

            <br>

            Portugali
            <select name = "koti34">
<?php dropmenu($_REQUEST[koti34]); ?>
            </select>
            Itävalta
            <select name="vieras34">
<?php dropmenu($_REQUEST[vieras34]); ?>
            </select>

            <br>

            Islanti
            <select name = "koti35">
<?php dropmenu($_REQUEST[koti35]); ?>
            </select>
            Itävalta
            <select name="vieras35">
<?php dropmenu($_REQUEST[vieras35]); ?>
            </select>

            <br>

            Unkari
            <select name = "koti36">
<?php dropmenu($_REQUEST[koti36]); ?>
            </select>
            Portugali
            <select name="vieras36">
<?php dropmenu($_REQUEST[vieras36]); ?>
            </select>   