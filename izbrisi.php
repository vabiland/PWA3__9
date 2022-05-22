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

$dbc = mysqli_connect($servername, $username, $password, $dbname) or die('Error connecting to db' . mysqli_error());

$obrisati = $_POST['radio'];
echo $obrisati;
#$query = "DELETE * FROM korisnik WHERE id = $obrisati";
#$result = mysqli_query($dbc, $query);

mysqli_close($dbc);
 
?>
</body>
</html>