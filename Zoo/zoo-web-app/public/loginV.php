<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vétérinaire";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT * FROM veterinaires WHERE email = '$email' AND mot_de_passe = '$mot_de_passe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Connexion réussie!";
        // Rediriger vers la page d'accueil ou tableau de bord
    } else {
        echo "Identifiants incorrects!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion Vétérinaire</title>
</head>
<body>
    <h2>Connexion Vétérinaire</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>