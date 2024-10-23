<html lang="en"></html>
<head>
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
        }
        header, footer{
            background-color: lightcyan;
            text-align: center;
        }
        main{
            padding: 2em;
        }

        nav ul{
            list-style: none;
            padding: 0;
            display: flex;
        }
        nav ul li{
            margin: 0 1em;
        }
    </style>
    <meta charset="utf-8">
    <title>İnternet Sitesi</title>

</head>

<body>
<header>
    <h1>Çanakkkale Teknik Bilimler MYO</h1>


</header>
<nav>
    <ul>
        <li><a href="/">Ana Sayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li><a href="/contact">İletişim</a></li>
    </ul>

</nav>
<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; 2024 | Çanakkale Teknik Bilimler MYO
</footer>


</body>
</html>
