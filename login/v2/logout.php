<?php
session_start();
//FIXME destruction session sous safari
$_SESSION['user'] = null;
session_reset();

session_unset();
session_destroy();
header('location:login.php');
?>