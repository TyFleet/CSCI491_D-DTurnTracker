<?php
  require_once "header.php";
  require_once "functions.php";

  if(sizeof($_POST) < 1){
    $query = "SELECT * FROM characterInfo";
    $result = queryMysql($query);
    $num    = $result->num_rows;

?>
  <h1>Enter Initiatives</h1>
  <form action="turns.php" method="POST">
    <fieldset id="initiative_getter">
<?php

    for($i = 0; $i < $num; $i++){
      $row = $result->fetch_array(MYSQLI_ASSOC);
      ?>
      <label for='<?php echo $row['playerName'];?>'><?php echo $row['playerName'];?></label>

      <input type='number' id='<?php echo $row['playerName'];?>' name='<?php echo $row['playerName'];?>' placeholder='0' required>

      <input type="hidden" name="<?php echo $row['playerName']."_data";?>" value="<?php echo $row['charName'].",".$row['class'].",".$row['level'].",".$row['playerName'].",".$row['race'].",".$row['alignment'].",".$row['strength'].",".$row['dexterity'].",".$row['constitution'].",".$row['intelligence'].",".$row['wisdom'].",".$row['charisma'].",".$row['armorclass'].",".$row['speed'].",".$row['maxHP'].",".$row['currentHP'].",".$row['proficiencies'].",".$row['notes'].",".$row['isPlayerCharacter'];?>"
      <?php
    }
    ?>
      <p>
        <input type="submit" value="Submit Initiatives">
      </p>
    </fieldset>
  </form>
    <?php

  }else{

    $sorted_array = array();
    $prev_value = "previous";
    $count = 0;
    foreach ($_POST as $key => $value){
      //echo $key . "<br>" . $value . "<br><br>";
      if($count % 2 == 1){
        $sorted_array[$_POST[$key]] = intval($prev_value);
      }
      $count = $count + 1;
      $prev_value = $value;
    }

    asort($sorted_array);
    //print_r($sorted_array);

    ?>
    <form action="turns.php" method="POST">
      <fieldset id='turn_tracker'>
    <?php

    foreach($sorted_array as $key => $value){
      $items = explode(",", $key);
      //print_r($items);

      $charName = $items[0];
      $class = $items[1];
      $level = $items[2];
      $playerName = $items[3];
      $race = $items[4];
      $alignment = $items[5];
      $str = $items[6];
      $dex = $items[7];
      $con = $items[8];
      $int = $items[9];
      $wis = $items[10];
      $cha = $items[11];
      $ac = $items[12];
      $speed = $items[13];
      $maxHP = $items[14];
      $currentHP = $items[15];
      $profs = $items[16];
      $notes = $items[17];
      $isPlayer = $items[18];

      ?>
        <div class="row">
          <input type='text' name='<?php echo $playerName.$charName;?>' value='<?php echo $charName;?>' required>
          <input type='text' name='<?php echo $playerName.$class;?>' value='<?php echo $class;?>' required>
          <input type='text' name='<?php echo $playerName.$level;?>' value='<?php echo $level;?>' required>
          <input type='text' name='<?php echo $playerName.$playerName;?>' value='<?php echo $playerName;?>' required>
          <input type='text' name='<?php echo $playerName.$race;?>' value='<?php echo $race;?>' required>
          <input type='text' name='<?php echo $playerName.$alignment;?>' value='<?php echo $alignment;?>' required>
          <input type='text' name='<?php echo $playerName.$str;?>' value='<?php echo $str;?>' required>
          <input type='text' name='<?php echo $playerName.$dex;?>' value='<?php echo $dex;?>' required>
          <input type='text' name='<?php echo $playerName.$con;?>' value='<?php echo $con;?>' required>
          <input type='text' name='<?php echo $playerName.$int;?>' value='<?php echo $int;?>' required>
          <input type='text' name='<?php echo $playerName.$wis;?>' value='<?php echo $wis;?>' required>
          <input type='text' name='<?php echo $playerName.$cha;?>' value='<?php echo $cha;?>' required>
          <input type='text' name='<?php echo $playerName.$ac;?>' value='<?php echo $ac;?>' required>
          <input type='text' name='<?php echo $playerName.$speed;?>' value='<?php echo $speed;?>' required>
          <input type='text' name='<?php echo $playerName.$maxHP;?>' value='<?php echo $maxHP;?>' required>
          <input type='text' name='<?php echo $playerName.$currentHP;?>' value='<?php echo $currentHP;?>' required>
          <input type='text' name='<?php echo $playerName.$profs;?>' value='<?php echo $profs;?>' required>
          <input type='text' name='<?php echo $playerName.$notes;?>' value='<?php echo $notes;?>' required>
          <input type='text' name='<?php echo $playerName.$isPlayer;?>' value='<?php echo $isPlayer;?>' required>
        </div>
        <br>
        <hr>
        <br>
        <div class="clear"></div>

      <?php
    }

    ?>
        <input type="submit" value="Next Turn">
      </fieldset>
    </form>
    <?php

  }

  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
 ?>

<?php
  require_once "footer.php";

?>
