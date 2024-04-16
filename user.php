<?php
session_start();
// controllo se nomeutente è presente in sessione lo stampo altrimenti reindirizzo alla index 
if (isset($_SESSION['nome_utente'])) {
  $nome = $_SESSION['nome_utente'];
} else {
  header('Location: ./index.php');
}
include __DIR__ . '/partials/head.php';
?>

<body>
  Grazie
  <?php echo $nome ?> <br>
  <a href="logout.php">Logout</a>

</body>

</html>