<?php
session_start();
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
$entryid = $_GET['entry'];
$query = 'DELETE FROM user_entry WHERE entry_id = :entryid';
$statement = $db->prepare($query);

$statement->bindValue(':entryid', $entryid);
$statement->execute();

echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';
echo '<div class="textArea">';
echo '<center><h1>Entry Deleted</h1></center>';


echo '<center><form action="viewEntries.php">
<button type="submit">View Entries</button><br>
</form></center>';

echo '</div>';
?>