// Custom cursor
const cursor = document.getElementById('cursor');
const ring   = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;

const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

if (!isTouchDevice) {
  cursor.style.opacity = '0';
  ring.style.opacity = '0';

  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    cursor.style.opacity = '1';
    ring.style.opacity = '0.6';
    cursor.style.transform = `translate(${mx - 4}px, ${my - 4}px)`;
  });

  function animRing() {
    rx += (mx - rx) * 0.12;
    ry += (my - ry) * 0.12;
    ring.style.transform = `translate(${rx - 18}px, ${ry - 18}px)`;
    requestAnimationFrame(animRing);
  }
  animRing();

  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => { ring.style.transform += ' scale(1.8)'; ring.style.opacity = '1'; });
    el.addEventListener('mouseleave', () => { ring.style.opacity = '0.6'; });
  });
} else {
  cursor.style.display = 'none';
  ring.style.display = 'none';
}

// Mobile nav toggle
const navToggle = document.getElementById('navToggle');
const navMenu   = document.getElementById('navLinks');
const navOverlay = document.getElementById('navOverlay');

function openNav() {
  navToggle.classList.add('active');
  navMenu.classList.add('open');
  navOverlay.classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeNav() {
  navToggle.classList.remove('active');
  navMenu.classList.remove('open');
  navOverlay.classList.remove('open');
  document.body.style.overflow = '';
}

navToggle.addEventListener('click', () => {
  navMenu.classList.contains('open') ? closeNav() : openNav();
});

navOverlay.addEventListener('click', closeNav);

navMenu.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', closeNav);
});

// Scroll reveal
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      observer.unobserve(e.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Smooth active nav highlight
const allSections = document.querySelectorAll('section[id]');
const allNavLinks = document.querySelectorAll('.nav-links a');
window.addEventListener('scroll', () => {
  let current = '';
  allSections.forEach(s => {
    if (window.scrollY >= s.offsetTop - 120) current = s.id;
  });
  allNavLinks.forEach(a => {
    a.style.color = a.getAttribute('href') === '#' + current
      ? 'var(--gold)' : '';
  });
});