<?php
session_start();
unset($_Session["email"]);
session_destroy();
header("Location: index.php")
?>