<?php
session_start();

$clubstr = 'D&D Turn Tracker';
$userstr = 'Roll for Initiative';

echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_HEADER_OPEN

    <body>
        <div id="wrapper">
        <header>
            <div id='logo'><img id='controller_logo' src='./img/dnd.png' alt='game controller logo'></div>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN

        <nav><ul>
            <li><a href='index.php?view=$user'>Home</a></li>
            <li><a href='stats.php'>Character Input</a></li>
            <li><a href='turns.php'>Turn Tracker</a></li>
            <li><a href='logout.php'>Log out</a></li>
        </ul></nav>

_LOGGEDIN;
} else {
echo <<<_GUEST
        <nav><ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='signup.php'>Sign Up</a></li>
            <li><a href='login.php'>Log In</a></li>
        </ul></nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE

        </header>
        <div class='username'>$userstr</div>
        <div id="content">

_HEADER_CLOSE;

?>
