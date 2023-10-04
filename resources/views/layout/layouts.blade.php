<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop | @yield('title','Home')</title>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Название проекта</h1>
                <nav>
                    <ul>
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
            </header>
            <div class="content">
                @yield('content')
            </div>
            <footer>
                <p></p>
                <nav>
                    <ul>
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
            </footer>
        </div>
    </body>
</html>
