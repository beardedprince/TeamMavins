<?php
   session_start();
   require_once('config/db_config.php');
   session_destroy();
   header("location:index.php");

?>

