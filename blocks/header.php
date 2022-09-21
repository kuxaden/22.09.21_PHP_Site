<header class="header d-flex flex-wrap justify-content-center mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center ml-3 mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">Практика по PHP</span>
    </a>
    <ul class="nav nav-pills ">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Контакты</a></li>
    </ul>
    <?php
        if($_COOKIE['user'] == 'Да'):
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
    <?php endif; ?>
</header>
