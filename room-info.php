<?php
    require_once __DIR__ . '/database.php';


    $room_id = $_GET['id'];


    $sql = "SELECT * FROM `stanze` WHERE `id` = " . $room_id . "; ";
    $result = $conn->query($sql);

    $rooms = [];
    
    if ($result && $result->num_rows > 0) {

        $room =  $result->fetch_assoc() ;         
        
    }


    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli stanza</title>
</head>
<body>
    
    

    <button><a href="/php-hotel-crud/index.php">Torna alla lista delle stanze</a></button>

    <h1>Dettagli stanza numero <?php echo $room['room_number']; ?></h1>

    <ul>
        <li>
            Numero letti: <?php echo $room['beds']; ?>
        </li>

        <li>
            Piano: <?php echo $room['floor']; ?>
        </li>
    </ul>

</body>
</html>