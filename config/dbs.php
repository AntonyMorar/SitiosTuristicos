<?php
   define('DB_SERVER', '127.0.0.1');
   //define('DB_USERNAME', 'ib15nrh');
   //define('DB_PASSWORD', '194533');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'bcdef12345');
   define('DB_DATABASE', 'ib15nrh');
   define('DB_CHARSET', 'utf8');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if (!$db) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
?>