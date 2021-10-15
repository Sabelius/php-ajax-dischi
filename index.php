<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title>Php Dischi</title>
</head>
<body>

<?php 

include_once __DIR__ . "/database.php";

?>

<div class=" container-fluid">
    <div class="row">
        <div class="col-12 pt-2 header-container">
          <img class= "logo" src="https://www.michelafranceschina.it/Burattini_Erranti/files/stacks-image-c5a4a2c.jpg">
        </div>
    </div>
</div>

<div class="container">
    <div class="row pt-5">
        <?php foreach($dischi as $card){
        ?>
            <div class="col-3 cd-container">
                <img class="image-disc" src="<?php echo $card["poster"] ?>">
                <h6 class="pt-2 text-uppercase"><?php echo $card["title"]?></h6>
                <h6><?php echo $card["author"]?></h6>
                <p><?php echo $card["genre"]?></p>
                <p><?php echo $card["year"]?></p>
            </div>
        <?php } ?>
    </div>
</div>

    
</body>
</html>