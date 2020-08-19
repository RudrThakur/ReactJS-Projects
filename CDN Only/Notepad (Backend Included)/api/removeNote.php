<?php

   require_once('config.php');

   $data = json_decode(file_get_contents('php://input'), true);
   
   $id = $data['id'];
   
   $query = 'DELETE FROM notepad WHERE id=(?)';
   
   $statement = $conn->prepare($query);
   
   $statement->bind_param('s', $id);
   
   $statement->execute();
        
   echo 'Note Deleted Successfully';

   $conn->close();

?>