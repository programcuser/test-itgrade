<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/font-awesome.css" rel="stylesheet">
        <!-- <link href="/css/admin.css" rel="stylesheet"> -->
    </head>
    <body> <!-- class="fixed-nav sticky-footer bg-dark" -->
        <?php if ($this->route['action'] != 'login'): ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand" href="/admin">Панель Администратора</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/add">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Добавить недвижимость</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Предложения недвижимости</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
        <?= $content; ?>

        <script src="/js/index.js"></script>
    </body>
</html>