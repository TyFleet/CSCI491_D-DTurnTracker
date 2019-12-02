<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Database Setup</title>
</head>

<body>
    <h3>Setting up...</h3>

<?php
require_once 'functions.php';

createTable('members',
            'user VARCHAR(16),
            pass VARCHAR(16),
            isDM tinyint(1),
            INDEX(user(6))');

createTable('characterInfo',
'charName VARCHAR(30) NULL DEFAULT NULL ,
class VARCHAR(20) NULL DEFAULT NULL ,
level INT(2) NULL DEFAULT NULL ,
playerName VARCHAR(30) NULL DEFAULT NULL ,
race VARCHAR(20)  NULL DEFAULT NULL ,
alignment VARCHAR(30) NULL DEFAULT NULL ,
strength INT(2) NULL DEFAULT NULL ,
dexterity INT(2) NULL DEFAULT NULL ,
constitution INT(2) NULL DEFAULT NULL ,
intelligence INT(2) NULL DEFAULT NULL ,
wisdom INT(2) NULL DEFAULT NULL ,
charisma INT(2) NULL DEFAULT NULL ,
armorclass INT(2) NULL DEFAULT NULL ,
speed INT(2) NULL DEFAULT NULL ,
maxHP INT(2) NULL DEFAULT NULL ,
currentHP INT(2) NULL DEFAULT NULL ,
proficiencies text ,
notes text ,
isPlayerCharacter tinyint(1)');

createTable('definitions',
 'keyword varchar(30) NULL,
 description text');
?>

    <p>The database is ready to go.</p>
</body>
</html>
