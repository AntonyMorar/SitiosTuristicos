<?php
   include("config/dbs.php");
   $result = mysqli_query($db, "SELECT * FROM pf_usuarios") or die("La consulta test fallo");

   if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["idUsuario"]. " - Name: " . $row["nombre"]."<br>";
        }
    } else {
        echo "0 results";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hola lokis</h1>
</body>

</html>