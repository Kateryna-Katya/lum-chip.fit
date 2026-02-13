// Initialize Lenis Smooth Scroll
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Lucide Icons initialization
lucide.createIcons();

// GSAP animations for Header
gsap.from(".header", {
    y: -100,
    duration: 1,
    ease: "power4.out",
    delay: 0.2
});

// Logic for hover sounds or micro-interactions could be added here
const buttons = document.querySelectorAll('.btn');
buttons.forEach(btn => {
    btn.addEventListener('mouseenter', () => {
        gsap.to(btn, { scale: 1.05, duration: 0.2 });
    });
    btn.addEventListener('mouseleave', () => {
        gsap.to(btn, { scale: 1, duration: 0.2 });
    });
});
document.addEventListener("DOMContentLoaded", () => {
    // 1. Split Text Setup
    const titleText = new SplitType('.animate-text', { types: 'lines, words, chars' });

    // 2. Hero Animation Timeline
    const heroTl = gsap.timeline({ delay: 0.5 });

    heroTl
        .to('.animate-text .char', {
            y: 0,
            rotate: 0,
            opacity: 1,
            stagger: 0.03,
            duration: 0.8,
            ease: "back.out(1.7)" /* Aggressive, brutal ease */
        })
        .to('.animate-opacity', {
            y: 0,
            opacity: 1,
            stagger: 0.2,
            duration: 0.8,
            ease: "power3.out"
        }, "-=0.4"); // Overlap slightly with text animation

    // 3. Parallax Effect on scroll for background shapes
    gsap.to('.hero__pattern--1', {
        yPercent: 50,
        ease: 'none',
        scrollTrigger: {
            trigger: '.hero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        }
    });

    gsap.to('.hero__pattern--2', {
        yPercent: -70,
        ease: 'none',
        scrollTrigger: {
            trigger: '.hero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        }
    });
});
// 4. Services Section Animation
    gsap.to('.animate-reveal', {
        scrollTrigger: {
            trigger: '.services',
            start: 'top 80%',
        },
        y: 0,
        opacity: 1,
        duration: 0.8,
        ease: "power2.out"
    });

    gsap.to('.animate-card', {
        scrollTrigger: {
            trigger: '.services__grid',
            start: 'top 85%',
        },
        y: 0,
        opacity: 1,
        stagger: 0.15,
        duration: 0.8,
        ease: "back.out(1.2)"
    });

    // Re-init icons for new content
lucide.createIcons();
    // 5. Methodology Progress Animation
    gsap.to('.animate-method-title', {
        scrollTrigger: {
            trigger: '.method',
            start: 'top 80%',
        },
        x: 0,
        opacity: 1,
        duration: 0.8
    });

    // Анимация закрашивания линии
    gsap.to('.method__progress-bar', {
        height: '100%',
        ease: 'none',
        scrollTrigger: {
            trigger: '.method__wrapper',
            start: 'top 60%',
            end: 'bottom 60%',
            scrub: true
        }
    });

    // Активация каждого шага при скролле
    const steps = document.querySelectorAll('.method__step');
    steps.forEach((step, index) => {
        ScrollTrigger.create({
            trigger: step,
            start: 'top 60%',
            onEnter: () => step.classList.add('is-active'),
            onLeaveBack: () => step.classList.remove('is-active')
        });
    });
    // 6. Stacking Cards Animation
    const cards = document.querySelectorAll('.animate-card-stack');
    
    cards.forEach((card, index) => {
        // Эффект небольшого уменьшения предыдущей карточки, когда на неё наезжает новая
        gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 120px", 
                endTrigger: ".cases__stack",
                end: "bottom center",
                pin: true,
                pinSpacing: false,
                scrub: true
            },
            scale: 1 - (index * 0.05), // Каждая следующая чуть меньше для эффекта глубины
            opacity: 1
        });
    });
    // 7. Bento Grid Animation
    gsap.to('.animate-expertise-title', {
        scrollTrigger: {
            trigger: '.expertise',
            start: 'top 80%',
        },
        opacity: 1,
        y: 0,
        duration: 0.6
    });

    gsap.from('.animate-bento', {
        scrollTrigger: {
            trigger: '.bento-grid',
            start: 'top 80%',
        },
        scale: 0.8,
        opacity: 0,
        stagger: 0.1,
        duration: 0.8,
        ease: "back.out(1.7)"
    });