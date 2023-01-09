

    
    <?php

$server = 'localhost';
$username = 'id19878430_cuic_database';
$password = 'V]vGojBkiF98@FNS';
$database = 'id19878430_street_search';

// Créer une connexion
$conn = mysqli_connect($server, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion: " . mysqli_connect_error());
}
echo "Connecté avec succès";

?>

