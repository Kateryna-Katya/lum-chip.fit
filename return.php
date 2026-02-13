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
            <h1 data-aos="fade-down">Политика возврата средств</h1>
            
            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>Условия для оформления возврата</h2>
                <p>
                    Вы можете претендовать на полный или частичный возврат средств в
                    следующих ситуациях:
                </p>
                <ul class="pages__list">
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание
                        предоставленной консультации или экспертного материала существенно отличается от программы,
                        заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                    </li>
                    <li>
                        <strong>Технические неисправности с нашей стороны:</strong> При
                        возникновении критических технических проблем на платформе
                        <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                        устранены нашей командой в разумные сроки.
                    </li>
                    <li>
                        <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                        решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                        дней с момента оплаты, при условии, что вы еще не получили доступ
                        к значительному объему материалов (см. раздел «Исключения»).
                    </li>
                </ul>

                <h2>Процедура запроса на возврат</h2>
                <p>
                    Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                    следующие шаги:
                </p>
                <ol class="pages__list pages__list--ordered">
                    <li>
                        Составьте письмо и отправьте его на наш официальный email:
                        <a href="mailto:support@<?= $fullDomain ?>" class="inline-link">support@<?= $fullDomain ?></a>.
                    </li>
                    <li>
                        В теме письма обязательно укажите: «Запрос на возврат средств».
                    </li>
                    <li>
                        В теле письма предоставьте полную информацию: ваше имя и фамилию,
                        email, который использовался при регистрации, и точное название выбранной программы.
                    </li>
                    <li>
                        Четко и подробно опишите причину, по которой вы запрашиваете
                        возврат, со ссылкой на один из пунктов наших условий.
                    </li>
                    <li>
                        После получения письма наша служба поддержки рассмотрит ваш запрос
                        и свяжется с вами для предоставления дальнейших инструкций в течение 3-х рабочих дней.
                    </li>
                </ol>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение 7–14 рабочих дней. Средства будут возвращены
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    может зависеть от регламента работы вашего банка или платежной системы в 
                    <strong>Великобритании</strong> или стране вашего пребывания.
                </p>

                <h2>Исключения и ограничения</h2>
                <p>Возврат средств не может быть осуществлен, если:</p>
                <ul class="pages__list">
                    <li>
                        Запрос подан по истечении 14 календарных дней с момента оплаты.
                    </li>
                    <li>
                        Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо
                        от времени, прошедшего с момента покупки.
                    </li>
                    <li>
                        Причиной невозможности пройти обучение являются технические
                        проблемы на стороне пользователя (например, проблемы с интернет-соединением или ПО).
                    </li>
                    <li>
                        Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей
                        стороны.
                    </li>
                </ul>

                <h2>Изменения в политике</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                    Политику возврата. Актуальная версия всегда доступна на этой
                    странице <strong><?= $fullDomain ?></strong>.
                </p>

                <div class="pages__contact-box">
                    <h2>Свяжитесь с нами</h2>
                    <p>
                        По всем вопросам, связанным с возвратом средств или условиями
                        консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
                    </p>
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