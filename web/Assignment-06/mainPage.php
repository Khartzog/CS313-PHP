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
    $validUser = 'False';
    foreach ($db->query('SELECT username FROM userinfo') as $row)
{
  if ($row['username'] == $username) {
    $validUser = 'True';
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


?>