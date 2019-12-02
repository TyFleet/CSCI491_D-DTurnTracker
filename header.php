<?php
session_start();

$clubstr = 'Kyle\'s Gaming Website';
$userstr = 'Welcome to the Fish Bowl';

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
        <div class='clear'></div>
        <header>
            <div id='logo'><img id='controller_logo' src='./img/dnd.png' alt='game controller logo'></div>
            <div class='clear'></div>
        </header>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN

        <div class='sidebar'><nav><ul>
            <li><a href='members.php?view=$user'>Home</a></li>
            <li><a href='members.php'>Members</a></li>
            <li><a href='friends.php'>Friends</a></li>
            <li><a href='games.php'>Games</a></li>
            <li><a href='messages.php'>Messages</a></li>
            <li><a href='profile.php'>Edit Profile</a></li>
            <li><a href='logout.php'>Log out</a></li>
        </ul></nav></div>

_LOGGEDIN;
} else {
echo <<<_GUEST

        <div class='sidebar'><nav><ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='signup.php'>Sign Up</a></li>
            <li><a href='login.php'>Log In</a></li>
        </ul></nav></div>
_GUEST;
 }

echo <<<_HEADER_CLOSE

        <div class='username'>$userstr</div>
        <div id="content">

_HEADER_CLOSE;

?>
