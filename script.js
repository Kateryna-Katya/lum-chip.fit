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