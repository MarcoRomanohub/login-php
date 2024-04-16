<?php
if (isset($_POST['nome'])) {
  // se esiste salvo il nome in sessione e reindirizzo alla pagina user.php 
  session_start();
  $_SESSION['nome_utente'] = $_POST['nome'];
  header('Location: ./user.php');
}
include __DIR__ . '/partials/head.php';
?>

<body>
  <form action="index.php" method="POST">
    <input type="text" name="nome">
    <button type="submit">Invia</button>
  </form>

</body>

</html>