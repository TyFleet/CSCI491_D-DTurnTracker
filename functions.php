<?php
$dbhost  = 'localhost';

$dbname  = 'db23';   // Modify these...
$dbuser  = 'user23';   // ...variables according
$dbpass  = '23lair';   // ...to your installation


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error)
    die("Fatal Error 1");

function createTable($name, $query){
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}

function insertInto($db_name, $query_columns, $query_values){
  queryMysql("INSERT INTO $db_name ($query_columns) VALUES ('$query_values[0]', '$query_values[1]', '$query_values[2]', '$query_values[3]', '$query_values[4]', '$query_values[5]', '$query_values[6]', '$query_values[7]', '$query_values[8]', '$query_values[9]', '$query_values[10]', '$query_values[11]', '$query_values[12]', '$query_values[13]', '$query_values[14]', '$query_values[15]', '$query_values[16]', '$query_values[17]', '$query_values[18]')");
}

function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("Fatal Error 2");
    return $result;
}

function destroySession() {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

function sanitizeString($var){
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

function showProfile($user) {
    if (file_exists("userpics/$user.jpg"))
        echo "<img class='userpic' src='userpics/$user.jpg'>";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
    else echo "<p>Nothing to see here, yet</p><br>";
}
?>
