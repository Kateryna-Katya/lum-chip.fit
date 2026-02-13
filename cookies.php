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
            <h1 data-aos="fade-down">Политика использования файлов cookie</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии. Настоящая политика подробно объясняет, какие
                    именно технологии мы применяем, для каких целей, и как вы можете ими
                    управлять.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                    или смартфоне), когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, логин, язык, настройки региона Англия и другие параметры) 
                    в течение определенного времени, чтобы вам не приходилось вводить их 
                    повторно при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="pages__list">
                    <li>
                        <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                        критически важны для функционирования сайта. Они позволяют вам
                        перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                    </li>
                    <li>
                        <strong>Аналитические и производительные файлы cookie:</strong>
                        Эти файлы собирают анонимную информацию о том, как посетители
                        используют наш сайт, помогая нам улучшать контент нашего блога.
                    </li>
                    <li>
                        <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                        сайту запоминать ваш выбор для предоставления более
                        персонализированного опыта в рамках консалтинговых услуг.
                    </li>
                    <li>
                        <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                        используются для доставки объявлений, соответствующих вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
                <ul class="pages__list">
                    <li>Обеспечение стабильной и безопасной работы сайта.</li>
                    <li>Анализ пользовательского поведения для оптимизации структуры сайта.</li>
                    <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                    <li>Предоставление релевантных маркетинговых и рекламных материалов.</li>
                </ul>

                <h2>Ваш выбор и как управлять файлами cookie</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций нашего сайта.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                    сторонних компаний, например, Google Analytics для аналитики. 
                    Мы рекомендуем вам ознакомиться с их политиками конфиденциальности.
                </p>

                <h2>Обновления настоящей политики</h2>
                <p>
                    Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях или
                    законодательстве. Продолжение использования нашего сайта будет означать ваше согласие с ними.
                </p>

                <div class="pages__contact-box">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли какие-либо вопросы касательно нашей политики
                        использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
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