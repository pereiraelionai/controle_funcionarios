<?php

session_start();
session_destroy();

echo "<script>alert('Sessão finalizada!'); location.replace('index.php');</script>";

?>