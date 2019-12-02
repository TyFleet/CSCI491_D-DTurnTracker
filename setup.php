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
level VARCHAR(2) NULL DEFAULT NULL ,
playerName VARCHAR(30) NULL DEFAULT NULL ,
race VARCHAR(20)  NULL DEFAULT NULL ,
alignment VARCHAR(30) NULL DEFAULT NULL ,
strength VARCHAR(2) NULL DEFAULT NULL ,
dexterity VARCHAR(2) NULL DEFAULT NULL ,
constitution VARCHAR(2) NULL DEFAULT NULL ,
intelligence VARCHAR(2) NULL DEFAULT NULL ,
wisdom VARCHAR(2) NULL DEFAULT NULL ,
charisma VARCHAR(2) NULL DEFAULT NULL ,
armorclass VARCHAR(2) NULL DEFAULT NULL ,
speed VARCHAR(2) NULL DEFAULT NULL ,
maxHP VARCHAR(2) NULL DEFAULT NULL ,
currentHP VARCHAR(2) NULL DEFAULT NULL ,
proficiencies VARCHAR(1000) NULL DEFAULT NULL ,
notes VARCHAR(1000) NULL DEFAULT NULL ,
isPlayerCharacter VARCHAR(1)');

createTable('definitions',
 'keyword varchar(30) NULL,
 description text');
?>

    <p>The database is ready to go.</p>
</body>
</html>
