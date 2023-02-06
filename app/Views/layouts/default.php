<!DOCTYPE html>
<html lang="rus-RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/resources/images/home.ico" type="image/x-icon">
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/fontello.css">
    <link rel="stylesheet" href="/resources/css/style.css">

    <title><?= $title ?></title>
</head>

<body>
<div id="back">
    <div class="container">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Guesthouse</h1>
                        <hr class="style1">
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 nav">
                        <h4>feel the warmth of home</h4>
                    </div>
                    <hr class="style2"/>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-x1-8 col-md-8 col-sm-12 content">
                        <p> <?= $content ?></p>
                    </div>
                    <div id="photo" class="col-x1-4 col-md-4 col-sm-8 aside">
                        <img src="/resources/images/fireplace.jpg" alt="Fireplace">
                        <p class="text-white">Guesthouse - это не просто гостевой дом.
                            Это уют и атмосфера домашнего очага. Здесь царит покой и умиротворение.
                            Здесь вы по-настоящему отдохнёте!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div>by Vanito Kurason ©, 2022
                <a href="https://vk.com/id6121876"><i class="icon-vkontakte"></i></a>
                <a href="https://github.com/vanito-kurason"><i class="icon-github"></i></a>
            </div>
        </footer>

    </div>

    <script src="/resources/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>