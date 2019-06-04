<?php
try{
    $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $ex)
{
  echo 'Error Connecting!';
  die();
}
$username = $_GET['username'];

echo '<br/>';
$userid = NULL;
//$userid = $db->query('SELECT userid FROM userinfo WHERE username == $username');
//echo $userid;
foreach ($db->query('SELECT userid, username FROM userinfo WHERE') as $row)
{
  echo "User Id: " . $row['userid'] . " " . $row['username'];
  echo '<br/>';
}

?>