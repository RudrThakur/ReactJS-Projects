<?php

    header("Access-Control-Allow-Origin: *");
   
   require_once('config.php');
   
   $players = [];
   
   $query = 'SELECT * FROM `scoreboard` ORDER BY score DESC LIMIT 5;';
   
   $result = $conn->query($query);
   
   if ($result->num_rows > 0) {
  
   while($row = $result->fetch_assoc()) {
   
       array_push($players, $row);
       
      }
      
      echo json_encode($players);;
      
   } else {
   
       echo null;
   }
   
   $conn->close();
?>