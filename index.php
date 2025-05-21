<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="icon" href="assets/favicon/favicon.ico">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/gh/oathanrex/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="left">
                <div class="header-logo">
                    <img src="assets/images/logo/big_logo.png" alt="HC Logo">
                </div>
                <div class="header-menu">
                    <a href="#" class="active">Главная</a>
                    <a href="#">О проекте</a>
                    <a href="#">Правила</a>
                    <a href="#">Вики</a>
                    <a href="#">Новости</a>
                    <a href="#">Магазин</a>
                    <a href="#">Прочее</a>
                </div>
            </div>
            <div class="header-button">
                <button class="mode-btn"><i class="fa-solid fa-moon"></i></button>
                <a href="https://discord.com/invite/AHKee2wd2b"><i class="fa-brands fa-discord"></i></a>
                <button class="auth-btn">Авторизация</button>
            </div>
        </div>
    </header>
    <section class="promo-section">
        <video class="promo-bg-video" src="assets/video/promo.mp4" autoplay muted loop playsinline></video>
        <div class="promo-content">
            <img src="assets/images/logo/big_logo.png" alt="HC Logo" class="promo-logo">
            <h1>Проект «HorizonOfCubes»</h1>
            <p>Станьте героем незабываемого приключения и наслаждайтесь атмосферой</p>
            <a href="#" class="promo-btn">НАЧАТЬ ИГРАТЬ</a>
        </div>

        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
    <section class="news-section">
        <div class="container">
            <div class="section-header">
                <h2>Последние <span>новости</span></h2>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="assets/images/plug.png" alt="Новость 1">
                    </div>
                    <div class="news-content">
                        <h3>Открытие энда</h3>
                        <p>Главный общественный портал, который мы контролируем и который точно откроется, находится по координатам 154 128 -92 по незеру мира построек...</p>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="assets/images/plug.png" alt="Новость 2">
                    </div>
                    <div class="news-content">
                        <h3>Открытие энда</h3>
                        <p>Главный общественный портал, который мы контролируем и который точно откроется, находится по координатам 154 128 -92 по незеру мира построек...</p>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="assets/images/plug.png" alt="Новость 3">
                    </div>
                    <div class="news-content">
                        <h3>Открытие энда</h3>
                        <p>Главный общественный портал, который мы контролируем и который точно откроется, находится по координатам 154 128 -92 по незеру мира построек...</p>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="news-btn">Все новости</a>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>О сервере</h2>
            </div>
            <div class="about-grid">
                <div class="about-col about-col-left">
                    <div class="about-card">
                        <h3>Голосовой чат</h3>
                        <p>Благодаря модификации PlasmoVoice вы можете разговаривать с игроками находясь на сервере без сторонних программ.</p>
                    </div>
                    <div class="about-card about-card-image">
                        <h3>Собственный ресурспак</h3>
                        <p>У нас присутствует собственный уникальный текстур пак, который вы не встретите ни на каком сервере. Наша команда постоянно работает над его улучшением и добавлением новых важных текстур. Подробнее о текстур паке вы можете узнать в вики.</p>
                        <img src="assets/images/plug_2.png" alt="Собственный ресурспак">
                    </div>
                    <div class="about-card about-card-image">
                        <h3>Датапаки</h3>
                        <p>На сервере присутствуют множество датапаков, которые позволяют разбавить геймплей при этом, оставляя атмосферу ванильного выживания. Примеры таких датапаков, как кастомные ачивки, уникальные анимации и блоки света, невидимые рамки и др. Полный список установленных датапаков и гайд по их использованию можно изучить на странице нашей википедии.</p>
                        <img src="assets/images/plug_2.png" alt="Датапаки">
                    </div>
                </div>
                <div class="about-col about-col-right">
                    <div class="about-card about-card-main">
                        <h3>О сервере</h3>
                        <p>Мы — проект прошедший длинный путь становления, начавший своё существование как сервер небольшого клана, впоследствии выросший в проект Horizon Of Cubes.<br>
                        Наш проект существует уже более двух лет. Каждый день мы радуем десятки игроков своей неповторимой дружественной атмосферой, уникальными ивентами и проектами от игроков, которые не дадут вам заскучать.</p>
                        <img src="assets/images/plug_2.png" alt="О сервере">
                    </div>
                    <div class="about-card">
                        <h3>Эмоции</h3>
                        <p>С помощью модификации EmoteCraft вы можете ярко выражать свои эмоции на сервере.</p>
                    </div>
                    <div class="about-card about-card-image">
                        <h3>Система миров</h3>
                        <p>На сервере используется система миров, которая позволяет комплексно распределить нагрузку на сервер.</p>
                        <img src="assets/images/plug_2.png" alt="Система миров">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Часто задаваемые <span>вопросы</span></h2>
            </div>
            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-icon"><i class="fa-duotone fa-server"></i></div>
                    <div class="faq-content">
                        <h3>Когда был вайп?</h3>
                        <p>Сезон начался 4 мая 2024 года</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-icon"><i class="fa-duotone fa-clock"></i></div>
                    <div class="faq-content">
                        <h3>Сколько длится сезон?</h3>
                        <p>Четвёртый сезон продлится минимум 6 месяцев</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-icon"><i class="fa-duotone fa-key"></i></div>
                    <div class="faq-content">
                        <h3>Нужна ли лицензия?</h3>
                        <p>Нет, лицензия игры необязательна</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join-section">
        <div class="container join-container">
            <div class="join-col join-col-left">
                <div class="join-price">
                    <div class="join-price-value">299 <span>₽</span></div>
                    <div class="join-price-desc">на весь сезон</div>
                    <a href="#" class="join-btn main">Приобрести проходку</a>
                    <a href="#" class="join-btn secondary">Подать бесплатную заявку</a>
                </div>
            </div>
            <div class="join-col join-col-right">
                <div class="join-features">
                    <div class="join-feature">
                        <div class="join-feature-icon">
                            <i class="fa-duotone fa-calendar"></i>
                        </div>
                        <div class="join-feature-text">
                            <b>Доступ на один сезон</b>
                            <div class="desc">Сезон завершится минимум через полгода, то есть минимум в марте 2024. Мы можем продлить срок сезона, как это было на предыдущих сезонах.</div>
                        </div>
                    </div>
                    <div class="join-feature">
                        <div class="join-feature-icon">
                            <i class="fa-duotone fa-clock"></i>
                        </div>
                        <div class="join-feature-text">
                            <b>Минимальный срок сезона — полгода</b>
                            <div class="desc">После приобретения, вы получаете доступ на весь 4 сезон сервера HorizonOfCubes</div>
                        </div>
                    </div>
                    <div class="join-feature">
                        <div class="join-feature-icon">
                            <i class="fa-duotone fa-key"></i>
                        </div>
                        <div class="join-feature-text">
                            <b>Только Minecraft: Java Edition</b>
                            <div class="desc">Для игры на сервере необязательно иметь лицензионную версию Minecraft: Java Edition. Но поиграть на сервере возможно будет только с этой версии. Bedrock edition и PE не поддерживается.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-copyright">Copyright © 2023. Все права защищены</div>
                <div class="footer-policy">Политика конфиденциальности</div>
            </div>
            <div class="footer-right">
                <a href="#" class="footer-icon"><i class="fa-duotone fa-heart"></i></a>
                <a href="#" class="footer-icon"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://discord.com/invite/AHKee2wd2b" class="footer-icon"><i class="fa-brands fa-discord"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>