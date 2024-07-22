<?php
session_start();

// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Utilise MD5 pour le hachage du mot de passe

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Identifiants corrects
        $_SESSION['username'] = $username;
        header("Location: admin_dashboard.php");
    } else {
        // Identifiants incorrects
        echo "Identifiant ou mot de passe incorrect.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion Administrateur</h2>
    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>