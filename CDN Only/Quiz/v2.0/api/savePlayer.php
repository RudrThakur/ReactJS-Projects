<?php

   require_once('config.php');

   $data = json_decode(file_get_contents('php://input'), true);
   
   $playerName = $data['playerName'];

   $score = $data['score'];

   $time_taken = $data['time_taken'];
   
   $query = 'INSERT INTO scoreboard (playername, score, time_taken) VALUES (?, ?, ?)';
   
   $statement = $conn->prepare($query);
   
   $statement->bind_param('sss', $playerName, $score, $time_taken);
   
   $statement->execute();
        
   echo 'Player Saved Successfully';

   $conn->close();

?>