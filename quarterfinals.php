Puolivälierät <br>
<?php
if ($_REQUEST["action"] == "lohkovaihe") {
    if ($_REQUEST["koti45"] > $_REQUEST["vieras45"]) {
        $G45=$G37;
    } else {
        $G45=$G38;
    }
    if ($_REQUEST["koti46"] > $_REQUEST["vieras46"]) {
        $G46=$G39;
    } else {
        $G46=$G40;
    }if ($_REQUEST["koti47"] > $_REQUEST["vieras47"]) {
        $G47=$G41;
    } else {
        $G47=$G42;
    }if ($_REQUEST["koti48"] > $_REQUEST["vieras48"]) {
        $G48=$G43;
    } else {
        $G48=$G44;
    }
}
    ?>


<?php echo "A2/C2  " . $G37; ?>
<select name = "koti45">
    <?php    dropmenu($_REQUEST[koti45]);   ?>
</select>
<?php echo "D1/BEF3  " . $G38; ?>
<select name="vieras45">
    <?php    dropmenu($_REQUEST[vieras45]);    ?>
</select>

<br><br>

<?php echo "B1/ACD3  " . $G39; ?>
<select name = "koti46">
    <?php    dropmenu($_REQUEST[koti46]);   ?>
</select>
<?php echo "F1/E2  " . $G40; ?>
<select name="vieras46">
    <?php    dropmenu($_REQUEST[vieras46]);    ?>
</select>

<br><br>

<?php echo "C1/ABF3  " . $G41 // huom!!!! abf oli abc onko aikaisemmissa merkattu väärin!!!?>;     
<select name = "koti47">
    <?php    dropmenu($_REQUEST[koti47]);   ?>
</select>
<?php echo "E1/D2  " . $G42; ?>
<select name="vieras47">
    <?php    dropmenu($_REQUEST[vieras47]);    ?>
</select>

<br><br>

<?php echo "A1/CDE3 " . $G43; ?>
<select name = "koti48">
    <?php    dropmenu($_REQUEST[koti48]);   ?>
</select>
<?php echo "B2/F2  " . $G44; ?>
<select name="vieras48">
    <?php    dropmenu($_REQUEST[vieras48]);    ?>
</select>
