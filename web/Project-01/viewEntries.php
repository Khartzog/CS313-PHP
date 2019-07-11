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
echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';
echo '<div class="textArea">';
echo '<center><h1>Here are your entries</h1></center><br>';

$joinedResults = $db->prepare("SELECT eu.*, j.journal_name FROM user_entry eu LEFT JOIN journal j ON eu.journal_id = j.journal_id WHERE eu.userid = $userID");
$joinedResults->execute();

while ($row = $joinedResults->fetch(PDO::FETCH_ASSOC)){
  $journalName = $row['journal_name'];
  $date = $row['entry_date'];
  $content = $row['entry_content'];
  $entry_id = $row['entry_id'];
  echo '<input type="radio" name="entry" value="' . $entry_id . '">' . $date . '<br>' . $content . '<br><br>';
}
$username = $_SESSION['user_name'];
echo '<center><form action="mainPage.php">
        <input type="hidden" id="username" name="username" value="' . $username . '">
        <button type="submit">Back</button><br>
        </form></center>';
echo '</div>';

?>