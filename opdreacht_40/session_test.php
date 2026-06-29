<?php
session_start();

$_SESSION['user'] = "Cassandra";

echo "Gebruiker: " . $_SESSION['user'];
?>