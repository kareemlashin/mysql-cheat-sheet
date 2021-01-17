<?php 

          $dsn         = "mysql:host=localhost;dbname=learn";
          $user        = "root";
          $pass        = "";
          $option      = array(
          PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
          );
          try{

          $connect_db  = new PDO($dsn,$user,$pass,$option);
          
          $connect_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          for ($i=0; $i <50 ; $i++) { 
          $q="INSERT INTO `itmes` (`id`, `name`) VALUES (NULL,'all $i')";
          $connect_db->exec($q);
          }

          echo "we are connect";

          }
          catch(PDOException $e){

          echo "filed" . $e->getMessage();
          echo "filed" . $e->getMessage();

          }
