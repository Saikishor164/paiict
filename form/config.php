<?php
   
   // Database configuration    
   define('DBSERVER', 'localhost');
   define('DBUSERNAME', 'root');
   define('DBPASSWORD', '');
   define('DBNAME', 'paiict');
  
   // Create database connection 
   $con = new mysqli(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
    
   // Check connection 
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }
   
?>