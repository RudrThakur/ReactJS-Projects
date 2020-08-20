<?php

      global $conn;

      // Database connection
      define("DB_HOST", "fdb19.awardspace.net");
      define("DB_USER", "2594661_rudrthakur");
      define("DB_PASS", "rudrcmkt777");
      define("DB_NAME", "2594661_rudrthakur");

      $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
?>