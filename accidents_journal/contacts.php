<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться — Журнал</title>
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    
    <div class="pg-header-container">
        <div class="header-obtaining">
            <div class="header-banner">
                <a class="banner-brand-link" href="index.html">
                    <figure class="banner-brand">
                        <img class="brand-logo" src="images/logo.png" alt="logo">
                        <div class="brand-textbox">
                            <p class="brand-textbox-top">ЖУРНАЛ</p>
                            <p class="brand-textbox-bottom">по защите в чрезвычайные ситуации</p>
                        </div>
                    </figure>
                </a>

                <a class="banner-feedback-link" href="contacts.php">
                    <figure class="banner-feedback">Обратная связь</figure>
                </a>

                <div class="header_burger">
                    <span></span>
                </div>

                <p id="second_title" class="brand-textbox-top second_brand-textbox-top" style="display: none;">ЖУРНАЛ</p>
            </div>
        </div>

        <div class="header-menu">
            <nav class="menu-nav-panel">
                <a href="index.html">Главная</a>
                <a href="archive.html">Архив</a>
                <a href="writers.html">Авторам</a>
            </nav>
        </div>
    </div>

    <div class="pg-modules-container-obtaining">
        <div class="pg-modules-container">
            <div class="module-contacts">
                <div class="contacts-textbox">
                    <p class="contacts-textbox-title">Связь с нами </p>
                    <p class="contacts-textbox-description">Для начала работы нам надо поговорить. Достаточно рассказать о своем 
                        проекте, указать контакты, и мы свяжемся, чтобы все обсудить.</p>
                </div>

                <div class="contacts-connection">
                    <div class="connection-num-email">
                        <img src="icons/phone_icon.png" alt="phone_icon">
                        <div>
                            <p>+7 (800) 555-35-35</p>
                        </div>
                    </div>

                    <div class="connection-num-email">
                        <img src="icons/envelope_icon.png" alt="letter_icon">
                        <div>
                            <p>n.v.kuznetsov@spbu.ru</p>
                        </div>
                    </div>

                    <div class="connection-messangers">
                        <a class="connection-link" href="https://www.whatsapp.com/">
                            <img src="icons/msg-wa.png">
                        </a>
                
                        <a class="connection-link" href="https://vk.com/feed">
                            <img src="icons/msg-vk.png">
                        </a>
                
                        <a class="connection-link" href="https://telegram.org/">
                            <img src="icons/msg-tg.png">
                        </a>
                    </div>
                </div>
            </div>

            <form id="form" class="module-form">
                <div class="form-lane">
                    <input name="name" class="form-field" placeholder="Имя" required>
                    <input name="org" class="form-field" placeholder="Организация (необяз.)">
                </div>

                <div class="form-lane">
                    <input name="email" class="form-field" placeholder="Эл. почта" required>
                    <input name="contact" class="form-field" placeholder="Тел. / Мессенджер" required>
                </div>

                <textarea name="text" class="form-wide-field" placeholder="Короткое сообщение" required></textarea>

                <button id="button" class="form-submit">Отправить</button>
            </form>
        </div>
    </div>

    <div class="pg-footer-container">
        <div class="footer-obtaining">
            <div class="footer-textbox">
                <a href="https://www.bbc.co.uk/usingthebbc/privacy/">Политика конфиденциальности</a>
                <a href="https://bbcnews.bbcstudios.com/">Размещение рекламы</a>
                <p>Copyright © 2023 Журнал</p>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script_submit.js"></script>

</body>
</html>