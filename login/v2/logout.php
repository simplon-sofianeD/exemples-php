<?php
session_start();
//FIXME destruction session sous safari
$_SESSION['user'] = '';
unset($_SESSION['user']);
session_unset();
session_destroy();
session_write_close();
header('location:login.php');
?>