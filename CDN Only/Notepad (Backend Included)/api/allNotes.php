<?php
   
   require_once('config.php');
   
   $allNotes = [];
   
   $query = 'SELECT * FROM notepad';
   
   $result = $conn->query($query);
   
   if ($result->num_rows > 0) {
  
   while($row = $result->fetch_assoc()) {
   
       array_push($allNotes, $row);
       
      }
      
      echo json_encode($allNotes);;
      
   } else {
   
       echo null;
   }
   
   $conn->close();
?>