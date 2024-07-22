<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord Administrateur</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ceci est le tableau de bord de l'administrateur.</p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>