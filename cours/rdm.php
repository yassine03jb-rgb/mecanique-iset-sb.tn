<?php
session_start();

// حماية الصفحة
if(!isset($_SESSION['user'])){
    header("Location: ../login.php"); // يرجع للـ login إذا ما فيش session
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résistance des Matériaux</title>
    <link rel="stylesheet" href="cours.css">  <!-- CSS عام لكل modules -->
</head>
<body>

<header>
    <h1>Résistance des Matériaux (RDM)</h1>
</header>

<nav>
    <a href="../dashboard.php">Dashboard</a>
    <a href="../logout.php">Déconnexion</a>
</nav>

<main>
    <!-- PDF -->
    <section class="card">
        <h2>Cours PDF</h2>
        <a href="rdm.pdf" target="_blank">Télécharger le PDF du cours</a>
    </section>

    <!-- Vidéo -->
    <section class="card">
        <h2>Vidéo</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
    </section>
</main>

</body>
</html>
