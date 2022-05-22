<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vjezba_3";
$prijenos;

$dbc = mysqli_connect($servername, $username, $password, $dbname) or die('Error connecting to db' . mysqli_error());

$query = "SELECT id, ime, prezime FROM korisnik";
$result = mysqli_query($dbc, $query);

echo "<form action='izbrisi.php' method=POST>";
echo "Odaberite podatak koji želite obrisati<br>";

if ($result) {
    while ($row = mysqli_fetch_array($result)){
        
        echo "<input type='radio' name='radio' value='{$row['id']}'>{$row['id']} - {$row['ime']} {$row['prezime']}</option><br>";   
        #$prijenos = $row['id'];
    }
} else {
    echo "Ne može se pristupiti podacima %s\n", mysqli_error($mysqli);
}
echo "<br>";
echo "<button type='submit' name='submit'>Briši</button>";
echo "</form>";

mysqli_close($dbc);
 
?>
</body>
</html>