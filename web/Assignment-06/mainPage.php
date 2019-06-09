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
    $username = $_GET['username'];
    $validUser = 'False';
    foreach ($db->query('SELECT username FROM userinfo') as $row)
{
  if ($row['username'] == $username) {
    $validUser = 'True';
    $_SESSION['user_name'] = $username;
    break;
  }
}
    if($validUser == 'False') {
        echo '<h1><center>Invalid User Name</center></h1><br>';
        echo '<p><center>Please try signing in again.</center></p><br>';
        echo '<center><form action="signIn.php">
        <button type="submit">Sign In</button><br>
        </form></center>';
    }
    else if($validUser == 'True') {
        echo '<center><h1>Welcome ' . $username . '</h1></center>';
        echo '<br><br>';
        echo '<center><form action="newEntry.php">
        <p>Click here to make a new entry.</p>
        <button type="submit">New Entry</button><br>
        <p>Click here to see you existing entries.</p>
        <button type="submit" formaction="viewEntries.php">View Entries</button>
        </form></center>';
    }


?>