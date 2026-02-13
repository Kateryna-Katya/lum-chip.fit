<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и стратегии роста
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect x='4' y='12' width='16' height='16' fill='black'/><rect x='8' y='8' width='16' height='16' fill='%23FFE600' stroke='black' stroke-width='2'/><rect x='16' y='4' width='8' height='8' fill='white' stroke='black' stroke-width='2'/></svg>">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#method" class="nav__link">Методология</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-down">Условия использования</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                    услуги, вы подтверждаете свое полное и безоговорочное согласие с
                    данными Условиями. Если вы не согласны, вы должны немедленно
                    прекратить использование сайта.
                </p>

                <h2>1. Предмет Соглашения</h2>
                <p>
                    Компания предоставляет Пользователю доступ к использованию сайта
                    <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                    инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                    развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                    взаимодействия Пользователя с платформой.
                </p>

                <h2>2. Обязанности и права Пользователя</h2>
                <p>
                    Вы обязуетесь использовать сайт исключительно в законных и личных
                    некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                    <strong>запрещается</strong>:
                </p>
                <ul class="pages__list">
                    <li>
                        Публиковать, передавать или распространять любую информацию,
                        которая является незаконной, вредоносной, клеветнической,
                        нарушает авторские права или разжигает ненависть.
                    </li>
                    <li>
                        Предпринимать любые действия, которые могут нарушить нормальную
                        работу сайта, его безопасность или привести к перегрузке
                        цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Использовать автоматизированные скрипты (ботов) для сбора
                        информации или иного взаимодействия с сайтом без нашего
                        предварительного письменного разрешения.
                    </li>
                    <li>
                        Выдавать себя за другое лицо или предоставлять недостоверную
                        информацию о себе при регистрации на консультацию.
                    </li>
                </ul>

                <h2>3. Интеллектуальная собственность</h2>
                <p>
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                    изображения, видео, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                    собственности Компании или ее партнеров. Вам предоставляется ограниченная
                    лицензия на доступ и использование Контента в личных целях для профессионального развития. 
                    Любое копирование, воспроизведение или распространение Контента без предварительного 
                    письменного разрешения правообладателя строго запрещено.
                </p>

                <h2>4. Ограничение ответственности</h2>
                <p>
                    Услуги и все материалы на сайте предоставляются по принципу «как
                    есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно, 
                    без ошибок или что его контент является абсолютно точным в контексте динамически 
                    меняющегося рынка в <strong>Великобритании</strong> и странах ЕС.
                </p>
                <p>
                    Компания не несет ответственности за любые прямые или косвенные
                    убытки, которые могут возникнуть у Пользователя в результате использования 
                    или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
                </p>

                <h2>5. Изменения в Условиях</h2>
                <p>
                    Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. 
                    Все изменения вступают в силу с момента их публикации на этой странице. 
                    Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                    изменений означает ваше автоматическое согласие с новой редакцией Условий.
                </p>

                <h2>6. Разрешение споров</h2>
                <p>
                    Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                    В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством по месту регистрации Компании в <strong>Великобритании</strong>.
                </p>

                <div class="pages__contact-box">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы, связанные с настоящими Условиями,
                        пожалуйста, свяжитесь с нами:
                    </p>
                    <ul class="pages__contact-list">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="inline-link">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+442056672491" class="inline-link">+44 20 5667 2491</a></li>
                        <li><strong>Адрес:</strong> 15 Bishopsgate, London EC2N 3AR, United Kingdom</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__desc">
                    Решения, которые меняют правила игры. Мы помогаем проектам оценивать перспективы и строить карьеру,
                    которая работает на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#method">Методология</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./terms.php">Terms of Use</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./return.php">Refund Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+442056672491">+44 20 5667 2491</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>15 Bishopsgate, London EC2N 3AR, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>©
                <?= date('Y') ?>
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <i data-lucide="cookie"></i>
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--cookie">Принять</button>
    </div>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>

</html>