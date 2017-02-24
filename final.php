Finaali <br>
<?php
if ($_REQUEST["action"] == "lohkovaihe") {
    if ($_REQUEST["koti51"] > $_REQUEST["vieras51"]) {
        $G51 = $G49;
        $G51L = $G50;
    } else {
        $G51 = $G50;
        $G51L = $G49;
    }
}
?>

<?php echo "A2/C2/D1/BEF  " . $G49; ?>
<select name = "koti51">
    <?php dropmenu($_REQUEST[koti51]); ?>
</select>
<?php echo "B1/ACD3/F1/E2  " . $G50; ?>
<select name="vieras51">
    <?php dropmenu($_REQUEST[vieras51]); ?>
</select>

<?php
echo "<br><br>Top 4<br>";
echo "1. " . $G51 . "<br>";
echo "2. " . $G51L . "<br>";
echo "3. " . $G49L . "<br>";
echo "4. " .  $G50L . "<br>";
?>
        

