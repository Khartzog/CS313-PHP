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
$entryContent = '';
$entryDate;

foreach ($db->query('SELECT entry_id, entry_content, entry_date FROM user_entry') as $row){
    if ($row['entry_id'] == $entryid){
        $entryContent = $row['entry_content'];
        $entryDate = $row['entry_date'];
    }
}

echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';
echo '<div class="textArea">';
echo '<center><h1>Edit Entry</h1></center>';
echo $entryDate . '<br>';

echo '<form name="form" action="confirmUpdate.php" method="get">';
echo '<textarea name="content" id="content" rows="30" cols="100">' . $entryContent . '</textarea><br><br>';
echo '<input type="hidden" id="entryid" name="entryid" value="' . $entryid . '">';
echo '<button type="submit">Update</button><br>';

?>