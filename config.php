<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;
  
   
   $factory = (new Factory)
      ->withServiceAccount('project1-dbcf2-firebase-adminsdk-m2z8f-1162589a8d.json')
      ->withDatabaseUri('https://project1-dbcf2-default-rtdb.firebaseio.com/');
      
      
   $database = $factory->createDatabase();
?>