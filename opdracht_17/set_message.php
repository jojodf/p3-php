<?php
// Start de session
session_start();

// Zet een flash message
$_SESSION['flash'] = "Opgeslagen!";

// Redirect naar show_message.php
header("Location: show_message.php");
exit; // altijd exit na een redirect
?>