<?php

  require_once "functions.php";

  // $result = selectAll('characterInfo');
  // echo $result;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
 ?>

<!DOCTYPE html>

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
</html>
