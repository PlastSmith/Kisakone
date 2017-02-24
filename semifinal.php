Välierä <br>
<?php
if ($_REQUEST["action"] == "lohkovaihe") {
    if ($_REQUEST["koti49"] > $_REQUEST["vieras49"]) {
        $G49=$G45;
        $G49L=$G46;
    } else {
        $G49=$G46;
        $G49L=$G45;
    }
    if ($_REQUEST["koti50"] > $_REQUEST["vieras50"]) {
        $G50=$G47;
        $G50L=$G48;
    } else {
        $G50=$G48;
        $G50L=$G47;
    }
}
?>
<?php echo "A2/C2/D1/BEF  " . $G45; ?>
<select name = "koti49">
    <?php    dropmenu($_REQUEST[koti49]);   ?>
</select>
<?php echo "B1/ACD3/F1/E2  " . $G46; ?>
<select name="vieras49">
    <?php    dropmenu($_REQUEST[vieras49]);    ?>
</select>

<br><br>

<?php echo "B1/ACD3/F1/E2  " . $G47; ?>
<select name = "koti50">
    <?php    dropmenu($_REQUEST[koti50]);   ?>
</select>
<?php echo "C1/ABF3/E1/D2  " . $G48; ?>
<select name="vieras50">
    <?php    dropmenu($_REQUEST[vieras50]);    ?>
</select>