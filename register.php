<?php
include("db.php");



if(isset($_POST['email'])){
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users(email,password) VALUES(?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$email,$password]);

  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="reg.css">
  <title>Inscription</title>
</head>
<body>

<header>
  <h1>Inscription Étudiant</h1>
</header>

<main>
  <section class="card">
    <form method="post">
      <label>Email</label>
      <input type="email" name="email" required>

      <label>Mot de passe</label>
      <input type="password" name="password" required>

      <button type="submit">S'inscrire</button>
    </form>
  </section>
</main>

</body>
</html>
