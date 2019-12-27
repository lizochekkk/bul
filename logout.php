!<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['lvl']);
header("Location: index.php");
exit;
?>