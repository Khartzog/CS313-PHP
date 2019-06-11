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
$userID = $_SESSION['user_id'];

echo '<center><h1>Here are your entries</h1></center><br>';

$joinedResults = $db->prepare("SELECT eu.*, j.journal_name FROM user_entry eu LEFT JOIN journal j ON eu.journal_id = j.journal_id WHERE eu.userid = $userID");
$joinedResults->execute();

while ($row = $joinedResults->fetch(PDO::FETCH_ASSOC)){
  $journalName = $row['journal_name'];
  $date = $row['entry_date'];
  $content = $row['entry_content'];
  echo $date . '<br>' . $content . '<br><br>';
}

?>