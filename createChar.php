<<?php

require_once 'functions.php';

$chartype = 0;
if ($_POST['char_type'] == 'player'){
  $chartype = 1;
}else{
  $chartype = 0;
}

//compile form data into query
insert_statement = 'INSERT INTO `characterInfo`
                                  (`charName`,
                                   `identifier`,
                                   `class`,
                                   `level`,
                                   `background`,
                                   `playerName`,
                                   `race`,
                                   `alignment`,
                                   `strength`,
                                   `dexterity`,
                                   `constitution`,
                                   `intelligence`,
                                   `wisdom`,
                                   `charisma`,
                                   `armorclass`,
                                   `initiative`,
                                   `speed`,
                                   `maxHP`,
                                   `currentHP`,
                                   `acrobatics`,
                                   `animalHandling`,
                                   `arcana`,
                                   `athletics`,
                                   `deception`,
                                   `history`,
                                   `insight`,
                                   `intimidation`,
                                   `investigation`,
                                   `medicine`,
                                   `nature`,
                                   `perception`,
                                   `performance`,
                                   `persuasion`,
                                   `religion`,
                                   `sleight of hand`,
                                   `stealth`,
                                   `survival`,
                                   `hitDice`)
                                   VALUES ($_POST['char_name'],
                                     NULL,
                                     $_POST['class'],
                                     $_POST['level'],
                                     $_POST[value-5],
                                     NULL,
                                     $_POST['player_name'],
                                     $_POST['race'],
                                     $_POST['align'],
                                     $_POST['strength'],
                                     $_POST['dex'],
                                     $_POST['constit'],
                                     $_POST['intel'],
                                     $_POST['wisdom'],
                                     $_POST['charisma'],
                                     $_POST['armor'],
                                     NULL,
                                     $_POST['speed'],
                                     $_POST['hp'],
                                     $_POST['hp'],
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     NULL,
                                     $_POST['profs'],
                                     $_POST['notes'],
                                     $chartype)'

queryMysql(insert_statement)

 ?>
