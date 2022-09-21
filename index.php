<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>PHP-document</title>
</head>
<body>
    <div class="wrapper container-fluid">
        <?php require "blocks/header.php" ?>

        <main class="main">
            <div class="d-flex flex-wrap">
                <?php
                    for($i=1; $i<=6; $i++):
                ?>
                <div class="card mb-5 rounded-3 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Просто текст</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="img/<?php echo $i ?>.jpg" alt="">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                    </div>
                </div>
                <?php 
                    endfor; 
                ?>
            </div>
        </main>
        <?php require "blocks/footer.php" ?>


    </div>
</body>
</html>