<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/">Домой</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/login">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/register">Регистрация</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $content ?>

        <script src="/js/index.js"></script>
    </body>
</html>