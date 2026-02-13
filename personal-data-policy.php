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
            <h1 data-aos="fade-down">Политика обработки персональных данных</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>1. Общие положения</h2>
                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями UK GDPR.
                </p>
                <p>
                    1.1. Важнейшей целью и условием осуществления своей деятельности
                    Оператор считает соблюдение прав и свобод человека и гражданина при
                    обработке его персональных данных, в том числе защиты прав на
                    неприкосновенность частной жизни, личную и семейную тайну.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2>2. Основные понятия</h2>
                <ul class="pages__list">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, доступных по сетевому адресу
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к определенному Пользователю.
                    </li>
                    <li>
                        <strong>Обработка данных</strong> — любое действие с использованием средств автоматизации или без них.
                    </li>
                    <li>
                        <strong>Безопасность</strong> — защищенность данных от неправомерного доступа, уничтожения или изменения.
                    </li>
                </ul>

                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор может обрабатывать следующие категории данных:</p>
                <ul class="pages__list">
                    <li>
                        <strong>Предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Фамилия, имя, отчество;</li>
                            <li>Адрес электронной почты (Email);</li>
                            <li>Номера телефонов (валидация по стандартам Великобритании).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Собираемые автоматически:</strong>
                        <ul>
                            <li>Сбор обезличенных данных (в т.ч. файлов «cookie») с помощью сервисов Google Аналитика. Эти данные включают IP-адрес, тип браузера и время доступа.</li>
                        </ul>
                    </li>
                </ul>

                <h2>4. Цели обработки</h2>
                <ul class="pages__list">
                    <li>Идентификация Пользователя для доступа к сервисам консалтинга.</li>
                    <li>Установление обратной связи для обработки заявок.</li>
                    <li>Заключение и исполнение договоров на экспертные услуги в Великобритании и ЕС.</li>
                    <li>Информирование посредством электронных писем (с возможностью отказа).</li>
                </ul>

                <h2>5. Правовые основания</h2>
                <p>Оператор обрабатывает данные только при наличии:</p>
                <ul class="pages__list">
                    <li>Добровольного согласия Пользователя через формы на сайте <strong><?= $domainTitle ?></strong>.</li>
                    <li>Разрешения на использование файлов «cookie» в настройках браузера.</li>
                </ul>

                <h2>6. Безопасность и хранение</h2>
                <ul class="pages__list">
                    <li>Оператор принимает технические меры защиты данных в соответствии с нормами <strong>UK GDPR</strong>.</li>
                    <li>Данные не передаются третьим лицам без законных на то оснований.</li>
                    <li>Срок обработки неограничен, но согласие может быть отозвано в любой момент.</li>
                </ul>

                <div class="pages__contact-box">
                    <h2>Контактная информация</h2>
                    <p>Для разъяснений или отзыва согласия на обработку данных:</p>
                    <ul class="pages__contact-list">
                        <li><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="inline-link">support@<?= $fullDomain ?></a></li>
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