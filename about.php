<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Контактная форма</title>
</head>
<body>
    <div class="wrapper container-fluid">
        <?php require "blocks/header.php" ?>
        <main class="main">
            <div class="container">
            <h3>Контактная форма</h3>
            <form action="check.php" method="post">
                <input class="form-control m-3" type="email" name="email" placeholder="Введите ваш email"><br>
                <textarea name="message" class="form-control m-3" placeholder="Введите ваше сообщение"></textarea><br>
                <button class="btn btn-success" type="submit" name="send" >Отправить</button>
            </form>
            </div>

        </main>
        <?php require "blocks/footer.php" ?>

    </div>
</body>
</html>