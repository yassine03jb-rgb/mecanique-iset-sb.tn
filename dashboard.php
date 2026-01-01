<?php
session_start();

// حماية الصفحة: إذا ما فيش تسجيل دخول → يرجع للـ login
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Étudiant</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<header>
    <h1>Bienvenue, <?php echo $_SESSION['email']; ?></h1>
</header>

<nav>
    <a href="dashboard.php">Accueil</a>
    <a href="cours/rdm.php">Résistance des Matériaux</a>
    <a href="logout.php">Déconnexion</a>
</nav>

<main>
    <section class="card">
        <h2>Vos Modules</h2>
        <ul>
            <li><a href="cours/rdm.php">Résistance des Matériaux (RDM)</a></li>
            <!-- نجم تضيف modules آخرين هنا -->
        </ul>
    </section>

    <section class="card">
        <h2>Informations utiles</h2>
        <p>Bienvenue sur votre espace étudiant. Ici vous pouvez accéder aux cours, télécharger les PDF et visionner les vidéos.</p>
    </section>
</main>

</body>
</html>
