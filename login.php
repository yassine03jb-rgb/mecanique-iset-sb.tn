<?php
session_start();
include("db.php");

$error = "";

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<header>
  <h1>Connexion Étudiant</h1>
</header>

<main>
  <section class="card">
    <form method="post">
      <label>Email</label>
      <input type="email" name="email" required>

      <label>Mot de passe</label>
      <input type="password" name="password" required>

      <button type="submit">Se connecter</button>

      <?php
      // هنا نتأكد أن if مسكر بالكامل
      if($error != ""){
          echo '<p style="color:red; margin-top:10px;">'.$error.'</p>';
      }
      ?>
    </form>
    <p>Pas encore inscrit ? <a href="register.php">Créer un compte</a></p>
  </section>
</main>

</body>
</html>
