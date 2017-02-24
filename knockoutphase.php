Neljännesvälierät<br>
<?php
if ($_REQUEST["action"] == "lohkovaihe") {
    if ($_REQUEST["koti37"] > $_REQUEST["vieras37"]) {
        $G37=$A2;
    } else {
        $G37=$C2;
    }
    
    if ($_REQUEST["koti38"] > $_REQUEST["vieras38"]) {
        $G38=$D1;
    } else {
        $G38=$XD1;
    }
    
    if ($_REQUEST["koti39"] > $_REQUEST["vieras39"]) {
        $G39=$B1;
    } else {
        $G39=$XB1;
    }
    
    if ($_REQUEST["koti40"] > $_REQUEST["vieras40"]) {
        $G40=$F1;
    } else {
        $G40=$E2;
    }
    
    if ($_REQUEST["koti41"] > $_REQUEST["vieras41"]) {
        $G41=$C1;
    } else {
        $G41=$XC1;
    }
    
    if ($_REQUEST["koti42"] > $_REQUEST["vieras42"]) {
        $G42=$E1;
    } else {
        $G42=$D2;
    }
    
    if ($_REQUEST["koti43"] > $_REQUEST["vieras43"]) {
        $G43=$A1;
    } else {
        $G43=$XA1;
    }
    
    if ($_REQUEST["koti44"] > $_REQUEST["vieras44"]) {
        $G44=$B2;
    } else {
        $G44=$F2;
    }
}
?>

<?php
echo "A2  " . $A2; ?>
<select name = "koti37">
    <?php
    dropmenu($_REQUEST[koti37]);
    ?>
</select>
<?php echo "C2  " . $C2; ?>
<select name="vieras37">
    <?php
    dropmenu($_REQUEST[vieras37]);
    ?>
</select>

<br><br>

<?php echo "D1  " . $D1; ?>
<select name = "koti38">
    <?php dropmenu($_REQUEST[koti38]); ?>
</select>
<?php echo "BEF3  " . $XD1; ?>
<select name="vieras38">
    <?php dropmenu($_REQUEST[vieras38]); ?>
</select>
<br><br>

<?php echo "B1  " . $B1; ?>
<select name = "koti39">
    <?php dropmenu($_REQUEST[koti39]); ?>
</select>
<?php echo "ACD3  " . $XB1; ?>
<select name="vieras39">
    <?php dropmenu($_REQUEST[vieras39]); ?>
</select>
<br><br>

<?php echo "F1  " . $F1; ?>
<select name = "koti40">
    <?php dropmenu($_REQUEST[koti40]); ?>
</select>
<?php echo "E2  " . $E2; ?>
<select name="vieras40">
    <?php dropmenu($_REQUEST[vieras40]); ?>
</select>
<br><br>

<?php echo "C1  " . $C1; ?>
<select name = "koti41">
    <?php dropmenu($_REQUEST[koti41]); ?>
</select>
<?php echo "ABC3  " . $XC1; ?>
<select name="vieras41">
    <?php dropmenu($_REQUEST[vieras41]); ?>
</select>
<br><br>

<?php echo "E1  " . $E1; ?>
<select name = "koti42">
    <?php dropmenu($_REQUEST[koti42]); ?>
</select>
<?php echo "D2  " . $D2; ?>
<select name="vieras42">
    <?php dropmenu($_REQUEST[vieras42]); ?>
</select>
<br><br>

<?php echo "A1  " . $A1; ?>
<select name = "koti43">
    <?php dropmenu($_REQUEST[koti43]); ?>
</select>
<?php echo "CDE3  " . $XA1; ?>
<select name="vieras43">
    <?php dropmenu($_REQUEST[vieras43]); ?>
</select>
<br><br>

<?php echo "B2  " . $B2; ?>
<select name = "koti44">
    <?php dropmenu($_REQUEST[koti44]); ?>
</select>
<?php echo "F2  " . $F2; ?>
<select name="vieras44">
    <?php dropmenu($_REQUEST[vieras44]); ?>
</select>