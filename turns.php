<?php

  require_once "functions.php";

  if(!isset($_POST)){
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
    <label for='<?php $row['playerName'];?>'><?php echo $row['playerName'];?></label>
    <input type='number' id='<?php $row['playerName'];?>' name='<?php $row['playerName'];?>' placeholder='0' required>
    <input type="hidden" name="<?php $row['playerName']."_data";?>" value="<?php $row['charName'].",".$row['class'].",".$row['level'].",".$row['playerName'].",".$row['race'].",".$row['alignment'].",".$row['strength'].",".$row['dexterity'].",".$row['constitution'].",".$row['intelligence'].",".$row['wisdom'].",".$row['charisma'].",".$row['armorclass'].",".$row['speed'].",".$row['maxHP'].",".$row['currentHP'].",".$row['proficiencies'].",".$row['notes'].",".$row['isPlayerCharacter'];?>"
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

    $post_count = count($_POST);

    ?>
    <div id='turn_order'>
    <?php
    $sorted_array = array();
    $prev_value = "previous";
    $count = 0;
    foreach ($_POST as $key => $value){
      if($count % 2 == 1){
        $sorted_array[$_POST[$value]] = $prev_value;
      }
      $count = $count + 1;
      $prev_value = $value;
    }

    asort($sorted_array);
    print_r(sizeof($_POST));
    echo "<br> here we are <br>";
    print_r($sorted_array);
  }



  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
 ?>
</div>

<!-- <!DOCTYPE html>

<html>

	<head>
	<link rel='stylesheet' href='css/styles.css'>
	</head>

<body>

<form action="turns.php" method="post">
<div class ="tracker">
	<table id="tracker">
		<tr>
			<th>Name</th>
			<th>HP</th>
			<th>Level</th>
			<th>Speed</th>
		</tr>
		<tr>
		<th><input type="text" name="char_name" size="10" value="<?php echo $_POST['char_name'];?>" /></th>
		<th><input type="text" name="hp" maxlength="4" size="1" value="<?php echo $_POST['hp'];?>" /></th>
		<th><input type="text" name="level" maxlength="2" size="1" value="<?php echo $_POST['level'];?>" /></th>
		<th><input type="text" name="speed" maxlength="3" size="1" value="<?php echo $_POST['speed'];?>" /></th>
		</tr>
	</table>
</div>
<div class ="player">

	Strength:<input type="text" name="strength" maxlength="2" size="1" value="<?php echo $_POST['strength'];?>" />
	Dex:<input type="text" name="dex" maxlength="2" size="1" value="<?php echo $_POST['dex'];?>" />
	Con:<input type="text" name="constit" maxlength="2" size="1" value="<?php echo $_POST['constit'];?>" />
	Int:<input type="text" name="intel" maxlength="2" size="1" value="<?php echo $_POST['intel'];?>" />
	Wis:<input type="text" name="wisdom" maxlength="2" size="1" value="<?php echo $_POST['wisdom'];?>" />
	Charisma:<input type="text" name="charisma" maxlength="2" size="1" value="<?php echo $_POST['charisma'];?>" />
</div>
<div class ="sub">
	<input type="submit" value="End Round">
</div>
</form>

</body>
</html> -->
