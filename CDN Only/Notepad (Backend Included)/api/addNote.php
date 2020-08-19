<?php

   require_once('config.php');

   $data = json_decode(file_get_contents('php://input'), true);
   
   $content = $data['content'];
   
   $query = 'INSERT INTO notepad (content) VALUES (?)';
   
   $statement = $conn->prepare($query);
   
   $statement->bind_param('s', $content);
   
   $statement->execute();
        
   echo 'Note Saved Successfully';

   $conn->close();

?>