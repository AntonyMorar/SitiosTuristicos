<?php
      include("config/dbs.php");
      session_start();

      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT idUsuario, tipo_usuario, nombre, username, edad, genero, foto, correo, fecha_registro FROM pf_usuarios WHERE idUsuario='$id'";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        { 
          $name=$row['nombre'];
          $username=$row['username'];
          $age=$row['edad'];
          $gender=$row['genero'];
          $email=$row['correo'];
          $register_date=$row['fecha_registro'];
          $rel_register_date=findTimeAgo($register_date);
        }
      }

      function findTimeAgo($past, $now = "now") {
        $secondsPerMinute = 60;
        $secondsPerHour = 3600;
        $secondsPerDay = 86400;
        $secondsPerMonth = 2592000;
        $secondsPerYear = 31104000;
        // finds the past in datetime
        $past = strtotime($past);
        // finds the current datetime
        $now = strtotime($now);
        
        // creates the "time ago" string. This always starts with an "about..."
        $timeAgo = "";
        
        // finds the time difference
        $timeDifference = $now - $past;
        
        // less than 29secs
        if($timeDifference <= 29) {
          $timeAgo = "Menos de un minuto";
        }
        // more than 29secs and less than 1min29secss
        else if($timeDifference > 29 && $timeDifference <= 89) {
          $timeAgo = "1 minuto";
        }
        // between 1min30secs and 44mins29secs
        else if($timeDifference > 89 &&
          $timeDifference <= (($secondsPerMinute * 44) + 29)
        ) {
          $minutes = floor($timeDifference / $secondsPerMinute);
          $timeAgo = $minutes." minutos";
        }
        // between 44mins30secs and 1hour29mins29secs
        else if(
          $timeDifference > (($secondsPerMinute * 44) + 29)
          &&
          $timeDifference < (($secondsPerMinute * 89) + 29)
        ) {
          $timeAgo = "Hace una hora";
        }
        // between 1hour29mins30secs and 23hours59mins29secs
        else if(
          $timeDifference > (
            ($secondsPerMinute * 89) +
            29
          )
          &&
          $timeDifference <= (
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
        ) {
          $hours = floor($timeDifference / $secondsPerHour);
          $timeAgo = $hours." horas";
        }
        // between 23hours59mins30secs and 47hours59mins29secs
        else if(
          $timeDifference > (
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
          &&
          $timeDifference <= (
            ($secondsPerHour * 47) +
            ($secondsPerMinute * 59) +
            29
          )
        ) {
          $timeAgo = "1 día";
        }
        // between 47hours59mins30secs and 29days23hours59mins29secs
        else if(
          $timeDifference > (
            ($secondsPerHour * 47) +
            ($secondsPerMinute * 59) +
            29
          )
          &&
          $timeDifference <= (
            ($secondsPerDay * 29) +
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
        ) {
          $days = floor($timeDifference / $secondsPerDay);
          $timeAgo = $days." días";
        }
        // between 29days23hours59mins30secs and 59days23hours59mins29secs
        else if(
          $timeDifference > (
            ($secondsPerDay * 29) +
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
          &&
          $timeDifference <= (
            ($secondsPerDay * 59) +
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
        ) {
          $timeAgo = "Hace 1 mes";
        }
        // between 59days23hours59mins30secs and 1year (minus 1sec)
        else if(
          $timeDifference > (
            ($secondsPerDay * 59) + 
            ($secondsPerHour * 23) +
            ($secondsPerMinute * 59) +
            29
          )
          &&
          $timeDifference < $secondsPerYear
        ) {
          $months = round($timeDifference / $secondsPerMonth);
          // if months is 1, then set it to 2, because we are "past" 1 month
          if($months == 1) {
            $months = 2;
          }
          
          $timeAgo = $months." meses";
        }
        // between 1year and 2years (minus 1sec)
        else if(
          $timeDifference >= $secondsPerYear
          &&
          $timeDifference < ($secondsPerYear * 2)
        ) {
          $timeAgo = "Hace 1 año";
        }
        // 2years or more
        else {
          $years = floor($timeDifference / $secondsPerYear);
          $timeAgo = "Hace ".$years." años";
        }
        
        return $timeAgo;
      }
    ?>