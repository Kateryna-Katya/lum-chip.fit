document.addEventListener("DOMContentLoaded", () => {
    
    // 1. ПЛАВНЫЙ СКРОЛЛ (LENIS)
    const lenis = new Lenis();
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 2. ИКОНКИ (LUCIDE)
    lucide.createIcons();

    // 3. МОБИЛЬНОЕ МЕНЮ
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    const overlay = document.querySelector('.menu-overlay');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
        overlay.classList.toggle('is-active');
        document.body.style.overflow = nav.classList.contains('is-active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
    navLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. COOKIE POPUP
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('is-active'), 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('is-active');
    });

    // 5. ГЕРОЙ-СЕКЦИЯ (АНИМАЦИЯ ТЕКСТА)
    const titleText = new SplitType('.animate-text', { types: 'chars' });
    const heroTl = gsap.timeline({ delay: 0.5 });

    heroTl
        .to('.animate-text .char', {
            y: 0, rotate: 0, opacity: 1,
            stagger: 0.03, duration: 0.8, ease: "back.out(1.7)"
        })
        .to('.animate-opacity', {
            y: 0, opacity: 1, stagger: 0.2, duration: 0.8, ease: "power3.out"
        }, "-=0.4");

    // Параллакс фигур в герое
    gsap.to('.hero__pattern--1', {
        yPercent: 50, ease: 'none',
        scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: true }
    });

    // 6. УСЛУГИ (КАРТОЧКИ)
    gsap.to('.animate-reveal', {
        scrollTrigger: { trigger: '.services', start: 'top 80%' },
        y: 0, opacity: 1, duration: 0.8
    });
    gsap.to('.animate-card', {
        scrollTrigger: { trigger: '.services__grid', start: 'top 85%' },
        y: 0, opacity: 1, stagger: 0.15, duration: 0.8, ease: "back.out(1.2)"
    });

    // 7. МЕТОДОЛОГИЯ (ПРОГРЕСС-БАР)
    gsap.to('.method__progress-bar', {
        height: '100%', ease: 'none',
        scrollTrigger: { trigger: '.method__wrapper', start: 'top 60%', end: 'bottom 60%', scrub: true }
    });
    
    document.querySelectorAll('.method__step').forEach(step => {
        ScrollTrigger.create({
            trigger: step, start: 'top 60%',
            onEnter: () => step.classList.add('is-active'),
            onLeaveBack: () => step.classList.remove('is-active')
        });
    });

    // 8. КЕЙСЫ (STACKING CARDS)
    const cards = document.querySelectorAll('.animate-card-stack');
    cards.forEach((card, index) => {
        ScrollTrigger.create({
            trigger: card,
            start: "top 120px",
            pin: true,
            pinSpacing: false,
            endTrigger: ".cases__stack",
            end: "bottom bottom"
        });
    });

    // 9. ЭКСПЕРТИЗА (BENTO GRID)
    gsap.from('.animate-bento', {
        scrollTrigger: { trigger: '.bento-grid', start: 'top 80%' },
        scale: 0.8, opacity: 0, stagger: 0.1, duration: 0.8, ease: "back.out(1.7)"
    });

    // 10. КОНТАКТНАЯ ФОРМА
    const form = document.getElementById('ajax-form');
    if(form) {
        const captchaQuestion = document.getElementById('captcha-question');
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const correctAnswer = num1 + num2;
        captchaQuestion.innerText = `${num1} + ${num2}`;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const ans = document.getElementById('captcha-answer');
            if (parseInt(ans.value) !== correctAnswer) {
                ans.classList.add('error');
                setTimeout(() => ans.classList.remove('error'), 300);
                return;
            }

            const btn = form.querySelector('.btn');
            btn.innerText = "Отправка...";
            btn.disabled = true;

            await new Promise(r => setTimeout(r, 1500));
            form.reset();
            btn.innerText = "Отправлено!";
            document.getElementById('form-response').classList.add('form__message--success');
        });
    }
});