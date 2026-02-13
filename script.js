// 1. Подключаем AOS в самом конце <body>:
// <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

document.addEventListener("DOMContentLoaded", () => {
    
    // ИНИЦИАЛИЗАЦИЯ AOS
    AOS.init({
        duration: 800, // Скорость анимации
        easing: 'ease-in-out-back', // Плавность необрутализма
        once: true, // Анимация проигрывается только один раз при скролле
        offset: 120 // Когда начинать анимацию (px)
    });

    // ИКОНКИ LUCIDE
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // МОБИЛЬНОЕ МЕНЮ (БЕЗ ОВЕРЛЕЯ)
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    if (burger) {
        burger.addEventListener('click', () => {
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
            document.body.style.overflow = nav.classList.contains('is-active') ? 'hidden' : '';
        });

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('is-active');
                nav.classList.remove('is-active');
                document.body.style.overflow = '';
            });
        });
    }

    // ФОРМА И КАПЧА
    const form = document.getElementById('ajax-form');
    if (form) {
        const qElem = document.getElementById('captcha-question');
        const n1 = Math.floor(Math.random() * 5) + 1;
        const n2 = Math.floor(Math.random() * 5) + 2;
        const correct = n1 + n2;
        if(qElem) qElem.innerText = `${n1} + ${n2}`;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const ans = parseInt(document.getElementById('captcha-answer').value);
            if (ans !== correct) {
                alert('Неверный ответ капчи');
                return;
            }
            form.innerHTML = "<h3 style='padding:20px; background:var(--primary); border:3px solid #000'>Заявка отправлена!</h3>";
        });
    }
});