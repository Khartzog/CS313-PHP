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
echo '<h1>Welcome ' . $username . '</h1><br><h3>Here are your entries:</h3>';
echo '<br><br>';
$userid = NULL;
//$userid = $db->query('SELECT userid FROM userinfo WHERE username == $username');
//echo $userid;
foreach ($db->query('SELECT userid, username FROM userinfo') as $row)
{
  if ($row['username'] == $username) {
    $userid = $row['userid'];
  }
}

$journalName = NULL;
$journalId = NULL;

foreach ($db->query('SELECT entry_id, entry_content, entry_date, userid, journal_id, media_id FROM user_entry') as $row)
{
  if ($row['userid'] == $userid) {
    $journalID = $row['journal_id'];
    echo "this is journal id: " . $journalID . '<br>';
    //foreach ($db->query('SELECT journal_id, journal_name FROM journal') as $row)
    //{
    //  if ($row['journal_id'] == $journalID) {
    //    $journalName = $row['journal_name'];
    //  }
    //}   
    echo $journalName . '<br>' . $row['entry_date'] . '<br><br>';
    echo $row['entry_content'];
  }
}

?>