<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => 'true',
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' =>'true',
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => 'false',
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => 'false',
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => 'true',
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
if(isset($_GET['parking'])&& !empty($_GET['parking'])){
    $temp=[];
    foreach($hotels as $item){
        if($item['parking']==$_GET['parking']){
            $temp[]=$item;
        }
    }
    $hotels=$temp;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php" method="GET">
            <select name="parking" id="parking">
                <option value="">seleziona</option>
                <option value="true">parcheggi disponibili</option>
                <option value="false">parcheggio non disponibile</option>
            </select>
            <button type="submit">seleziona</button>
        </form>
    </div>
    <div>
        <?php 
        foreach($hotels as $item){ ?>
            <div>
              <?php echo $item['name'] ?>
              <?php echo $item['description'] ?>
              <?php echo $item['parking'] ?>
              <?php echo $item['vote'] ?>
              <?php echo $item['distance_to_center'] ?>
            </div>
      <?php  } ?>
       
    </div>
</body>
</html>