<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("location: ../item2/index.php");
exit;
