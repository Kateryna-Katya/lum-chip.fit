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
            <h1 data-aos="fade-down">Политика конфиденциальности</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                    услуг по консалтингу, так и для других взаимодействий в электронном
                    формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                    техническую поддержку и информационное сопровождение.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                    положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                    собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                    конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой.
                </p>

                <h2>Порядок сбора, хранения и уничтожения данных</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                    пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                    участия в стратегических сессиях, получения аналитических отчетов и внедрения инноваций. Для
                    предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования.
                </p>

                <p>
                    Максимальный срок хранения персональных данных составляет 75
                    лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                    завершения своей деятельности или до момента официального отзыва согласия пользователем.
                </p>

                <p>
                    Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                    их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
                </p>

                <h2>Техническая информация:</h2>
                <ul class="pages__list">
                    <li>время доступа и IP-адрес;</li>
                    <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                    <li>Интернет-страницы, посещаемые пользователем;</li>
                    <li>просмотры информационных и рекламных блоков;</li>
                    <li>иная техническая информация, предоставляемая браузером;</li>
                    <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                </ul>

                <p>
                    При регистрации или заполнении форм обратной связи мы собираем информацию, 
                    необходимую для аутентификации и персонализации услуг:
                </p>
                <ul class="pages__list">
                    <li>имя пользователя;</li>
                    <li>e-mail и номер телефона для оперативной связи;</li>
                </ul>

                <h2>Информация о действиях пользователя:</h2>
                <ul class="pages__list">
                    <li>информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>данные о запросах, отправленных через формы на сайте;</li>
                    <li>сведения о полученных консультациях и пройденных программах;</li>
                    <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством Великобритании и ЕС.</li>
                </ul>

                <h2>Цели обработки персональных данных:</h2>
                <ul class="pages__list">
                    <li>предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                    <li>учет пожеланий при разработке новых технологических решений;</li>
                    <li>информирование об акциях, скидках и новых материалах в блоге через e-mail;</li>
                    <li>обеспечение качественной экспертной поддержки.</li>
                </ul>

                <h2>Передача данных третьим лицам:</h2>
                <p><strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:</p>
                <ul class="pages__list">
                    <li>получения прямого согласия пользователя на такую передачу;</li>
                    <li>по требованию компетентных органов <strong>Великобритании</strong> в соответствии с законодательством;</li>
                    <li>случаев стратегического слияния или поглощения компании.</li>
                </ul>

                <h2>Использование файлов cookie</h2>
                <p>
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <strong>Великобритания</strong>), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любое время отключить Cookies в настройках своего браузера.
                </p>

                <div class="pages__contact-box">
                    <h2>Права пользователя</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>UK GDPR</strong>, 
                        пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
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