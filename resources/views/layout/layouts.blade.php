<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop | @yield('title','Home')</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    </head>
    <body>
        <div class="wrapper">
            <header class="wrapper-item">
                <div class="border-content">
                    <h1 class="header-title">Poirus</h1>
                    <nav>
                        <ul class="nav">
                            <li>
                                <a href="info">
                                    О нас
                                </a>
                            </li>
                            <li>
                                <a href="categories">
                                    Категории
                                </a>
                            </li>
                            <li>
                                <a href="products">
                                    Товары
                                </a>
                            </li>
                            <li>
                                <a href="info">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content">
                <div class="border-content">
                    @yield('content')
                </div>
            </div>
            <footer>
                <div class="border-content">
                    <nav>
                        <ul class="nav">
                            <li>
                                <a href="info">
                                    О нас
                                </a>
                            </li>
                            <li>
                                <a href="info">
                                    Категории
                                </a>
                            </li>
                            <li>
                                <a href="products">
                                    Товары
                                </a>
                            </li>
                            <li>
                                <a href="info">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </footer>
        </div>
    </body>
</html>
