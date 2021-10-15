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

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="cd-container">
                <?php foreach($dischi as $card){
                ?>
                    <img src="<?php echo $card["poster"] ?>">
                    <h3><?php echo $card["title"]?></h3>
                    <h3><?php echo $card["author"]?></h3>
                    <h3><?php echo $card["genre"]?></h3>
                    <h3><?php echo $card["year"]?></h3>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>