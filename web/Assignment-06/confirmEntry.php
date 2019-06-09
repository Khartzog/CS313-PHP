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
    $journalName = $_GET['journal'];
    $isJournal = 'False';
    
    
    foreach ($db->query('SELECT journal_id, journal_name FROM journal') as $row)
    {
      if ($row['journal_name'] == $journalName) {
        $isJournal = 'True';
        $journalId = $row['journal_id'];
        $_SESSION['journal_Id'] = $journalId;
      }
    }
    
    if ($isJournal == 'False') {
      $content = $_GET['content'];
      echo $content;
        echo '<center><h4>Invalid Journal Name</h4></center><br>';
        echo '<p>Please enter a journal name.</p>';
        echo '<form action="confirmEntry.php">
        <input type="text" name="journal" id="journal"><br>
        <input type="hidden" id="content" name="content" value=$_GET["content"]>
        <button type="submit">Make Entry</button><br>
        </form>';
    }
    else if($isJournal == 'True') {
      echo '<center><h1>Entry Added</h1></center>';

      $userID = $_SESSION['user_id'];
      echo $content;

    //   $query = 'INSERT INTO user_entry(entry_content, entry_date, userid, journal_id) VALUES(:entry_content, now(), :userid, :journal_id)';
	  //   $statement = $db->prepare($query);

  	//   $statement->bindValue(':entry_content', $content);
	  //   $statement->bindValue(':userid', $userID);
	  //   $statement->bindValue(':journal_id', $journalId);
	  //   $statement->execute();
    // }
    ?>