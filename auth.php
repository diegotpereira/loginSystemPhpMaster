<?php
session_start();
if (!isset($_SESSION['usuarionome'])) {
  # code...
  header("Location: registro_login.php");
  exit();
}
?>