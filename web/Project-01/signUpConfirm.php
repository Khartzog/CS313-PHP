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
    $password = $_GET['password'];
    
    $userUnavailable = "False";
    
    
    foreach ($db->query('SELECT username FROM userinfo') as $row)
    {
      if ($row['username'] == $username) {
        $userUnavailable = 'True';
      }
    }
    
    if ($userUnavailable == 'False') {
        $query = 'INSERT INTO userinfo(username, pass) VALUES(:username, :pass)';
	    $statement = $db->prepare($query);

  	  $statement->bindValue(':username', $username);
	    $statement->bindValue(':pass', $password);
      $statement->execute();
      
      echo '<center><form action="mainPage.php">
        <input type="hidden" id="username" name="username" value="' . $username . '">
        <button type="submit">Continue To Home</button><br>
        </form></center>';
    }
    else if($userUnavailable == 'True') {
        echo '<center><h4>User Name Already Taken</h4></center><br>';
        echo '<form action="signUpConfirm.php">
        <h4>Please Choose A User Name</h4><br>
        <input type="text" name="username" id="username"><br>
        <h4>Please Choose A Password</h4><br>
        <input type="text" id="password" name="password"><br>
        <button type="submit">Make Entry</button><br>
        </form>';
     }
    ?>