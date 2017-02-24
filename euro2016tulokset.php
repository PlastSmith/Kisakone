<?php
$servername = "mydb.tamk.fi";
$username = "c6tseppa";
$password = "k7kkel7sKOKKEL7S";
$DBname = "dbc6tseppa1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DBname);

mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gamedb;";
$result = mysqli_query($conn, $sql);
$games=array("Ranska - Romania", "Albania - Sveitsi", "Romania - Sveitsi", "Ranska - Albania", "Romania - Albania" , "Sveitsi - Ranska", "Wales - Slovaki", "Englanti - Venäjä", "Venäjä - Slovakia", "Englanti - Wales", "Slovakia - Englanti", "Venäjä - Wales", "Puola - Pohjois-Irlanti", "Saksa - Ukraina", "Ukraina - Pohjois-Irlanti", "Saksa - Puola", "Pohjois-Irlanti - Saksa", "Ukraina - Puola", "Turkki - Kroatia", "Espanja - Tshekki", "Tshekki - Kroatia", "Espanja - Turkki", "Kroatia - Espanja", "Tshekki - Turkki", "Irlanti - Ruotsi", "Belgia - Italia", "Italia - Ruotsi" , "Belgia - Irlanti" , "Italia - Irlanti", "Ruotsi - Belgia", "Itävalta - Unkari", "Portugali - Islanti", "Islanti - Unkari", "Portugali - Itävalta", "Islanti - Itävalta", "Unkari -  Portugali");
                        
?>


<!DOCTYPE html>
<html>
    <head>
        <title>EURO 2016</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Veikkaukset</h2>
            <a href="euro2016.php">Paluu</a>           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ottelu</th>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo " <th> {$row['nick']} </th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    mysqli_data_seek($result, 0);
                    $gamenbr = 1;
                    while ($gamenbr <= 36) {
                        echo "<tr>";
                        echo "<td>{$games[$gamenbr-1]}</td>";
                        mysqli_data_seek($result, 0);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo " <td> {$row['koti'. $gamenbr]} - {$row['vieras' . $gamenbr]} </td>";
                            
                        }
                        $gamenbr++;
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>



