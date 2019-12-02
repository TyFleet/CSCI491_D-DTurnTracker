<?php
session_start();
require_once 'header.php';

echo "<h3>Welcome to the $clubstr. </h3>";
echo "<div>";

if ($loggedin)
    echo " $user, you are logged in";
else
    echo 'Please sign up, or log in if you\'re already a member. All Dungeon Master\'s are welcome. Player support coming soon.';

echo <<<_END
    </div><br>
_END;

require_once 'footer.php';
?>
