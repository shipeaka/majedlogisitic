// ===== LANGUAGE TOGGLE =====
const langToggle = document.getElementById('langToggle');
const htmlEl = document.documentElement;
let currentLang = localStorage.getItem('majed-lang') || 'en';
setLanguage(currentLang);

langToggle?.addEventListener('click', () => {
currentLang = currentLang === 'en' ? 'ar' : 'en';
setLanguage(currentLang);
localStorage.setItem('majed-lang', currentLang);
});

function setLanguage(lang) {
// Update HTML direction
htmlEl.setAttribute('lang', lang);
htmlEl.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');

// Update toggle button text
if (langToggle) {
langToggle.textContent = lang === 'en' ? 'عربي' : 'English';
}

// Update all translatable elements
document.querySelectorAll('[data-en][data-ar]').forEach(el => {
el.textContent = el.getAttribute(`data-${lang}`);
});

// Update page title
const titleEn = "Majed Logistic | Transportation & Logistics";
const titleAr = "ماجـد لوجستيك | النقل والخدمات اللوجستية";
document.title = lang === 'ar' ? titleAr : titleEn;

// Force reflow for RTL layout
document.body.style.visibility = 'hidden';
setTimeout(() => {
document.body.style.visibility = 'visible';
}, 10);
}

// ===== MOBILE MENU =====
const mobileToggle = document.querySelector('.mobile-toggle');
const mainNav = document.querySelector('.main-nav');
const navList = document.querySelector('.nav-list');

// Debug check
console.log('Mobile toggle:', mobileToggle);
console.log('Main nav:', mainNav);

mobileToggle?.addEventListener('click', () => {
  console.log('Menu clicked!');
  mainNav.classList.toggle('active');
  
  const icon = mobileToggle.querySelector('i');
  if (icon) {
    if (mainNav.classList.contains('active')) {
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-times');
    } else {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    }
  }
});

// Close menu when clicking a link
document.querySelectorAll('.nav-list a').forEach(link => {
  link.addEventListener('click', () => {
    mainNav.classList.remove('active');
    const icon = mobileToggle?.querySelector('i');
    if (icon) {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    }
  });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
  if (mainNav && !mainNav.contains(e.target) && !mobileToggle.contains(e.target)) {
    mainNav.classList.remove('active');
    const icon = mobileToggle?.querySelector('i');
    if (icon) {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    }
  }
});
// ===== SMOOTH SCROLL =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function(e) {
const href = this.getAttribute('href');
if (href === '#' || href.startsWith('#!')) return;

e.preventDefault();
const target = document.querySelector(href);
if (target) {
const headerOffset = 80;
const elementPosition = target.getBoundingClientRect().top;
const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
}
});
});

// ===== DYNAMIC YEAR =====
const yearEl = document.getElementById('year');
if(yearEl) {
yearEl.textContent = new Date().getFullYear();
}

// ===== SCROLL ANIMATIONS (GSAP) =====
if(typeof gsap !== 'undefined') {
gsap.registerPlugin(ScrollTrigger);

const fadeElements = document.querySelectorAll('.fade-in');
fadeElements.forEach((el) => {
gsap.fromTo(el,
{ opacity: 0, y: 30 },
{
opacity: 1,
y: 0,
duration: 0.6,
ease: 'power2.out',
scrollTrigger: {
trigger: el,
start: 'top 90%',
toggleActions: 'play none none none'
}
}
);
});
}

// ===== ANIMATED COUNTERS =====
const animateCounter = (element, target, duration = 2000) => {
let start = 0;
const increment = target / (duration / 16);

const timer = setInterval(() => {
start += increment;
if (start >= target) {
element.textContent = target.toLocaleString();
clearInterval(timer);
} else {
element.textContent = Math.floor(start).toLocaleString();
}
}, 16);
};

const counterObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
const counter = entry.target;
const target = parseInt(counter.getAttribute('data-target'));
if (target) {
animateCounter(counter, target);
counterObserver.unobserve(counter);
}
}
});
}, { threshold: 0.5 });

document.querySelectorAll('.stat-number[data-target]').forEach(counter => {
counterObserver.observe(counter);
});

// ===== BACK TO TOP =====
const backToTop = document.querySelector('.back-to-top');
window.addEventListener('scroll', () => {
if (window.pageYOffset > 500) {
backToTop?.classList.add('visible');
} else {
backToTop?.classList.remove('visible');
}
});

backToTop?.addEventListener('click', () => {
if(typeof gsap !== 'undefined') {
gsap.to(window, { duration: 0.8, scrollTo: 0, ease: 'power2.inOut' });
} else {
window.scrollTo({ top: 0, behavior: 'smooth' });
}
});

// ===== SCROLL PROGRESS =====
const scrollProgress = document.querySelector('.scroll-progress');
window.addEventListener('scroll', () => {
const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
const scrollPercent = (scrollTop / scrollHeight) * 100;
if (scrollProgress) scrollProgress.style.width = scrollPercent + '%';
});

// ===== PAGE LOADER =====
window.addEventListener('load', () => {
const loader = document.querySelector('.page-loader');
if (loader) {
if(typeof gsap !== 'undefined') {
gsap.to(loader, {
opacity: 0,
duration: 0.5,
onComplete: () => {
loader.style.visibility = 'hidden';
}
});
} else {
loader.classList.add('hidden');
}
}
});

// ===== PROJECT FILTER =====
const filterBtns = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');

filterBtns.forEach(btn => {
btn.addEventListener('click', function() {
filterBtns.forEach(b => b.classList.remove('active'));
this.classList.add('active');

const filter = this.dataset.filter;

projectCards.forEach(card => {
if (filter === 'all' || card.dataset.category === filter) {
card.classList.remove('hidden');
setTimeout(() => {
card.style.opacity = '1';
card.style.transform = 'scale(1)';
}, 10);
} else {
card.style.opacity = '0';
card.style.transform = 'scale(0.8)';
setTimeout(() => {
card.classList.add('hidden');
}, 300);
}
});
});
});

// ===== SERVICE AREAS MAP (Leaflet) =====
if (document.getElementById('serviceMap') && typeof L !== 'undefined') {
const map = L.map('serviceMap').setView([24.0896, 38.0618], 7); // Center on Yanbu

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '© OpenStreetMap contributors',
maxZoom: 18
}).addTo(map);

// Add Yanbu HQ marker
L.marker([24.0896, 38.0618]).addTo(map)
.bindPopup('Yanbu HQ<br>Majed Logistic Headquarters')
.openPopup();

// Map filter buttons
document.querySelectorAll('.map-btn').forEach(btn => {
btn.addEventListener('click', function() {
document.querySelectorAll('.map-btn').forEach(b => b.classList.remove('active'));
this.classList.add('active');
});
});
}

// ===== CONTACT FORM AJAX SUBMISSION =====
const contactForm = document.querySelector('.contact-form');

contactForm?.addEventListener('submit', async (e) => {
e.preventDefault();

const submitBtn = contactForm.querySelector('button[type="submit"]');
const originalBtnText = submitBtn.innerHTML;

// Show loading state
submitBtn.disabled = true;
submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

const formData = new FormData(contactForm);

try {
const response = await fetch(contactForm.action, {
method: 'POST',
body: formData,
headers: {
'Accept': 'application/json'
}
});

if (response.ok) {
// Success!
alert(currentLang === 'ar' 
? 'تم إرسال رسالتك بنجاح! سنتواصل معك خلال 24 ساعة.' 
: 'Thank you! Your message has been sent. We will respond within 24 hours.');
contactForm.reset();
} else {
// Error
const errorData = await response.json();
alert('Error: ' + (errorData.errors?.[0]?.message || 'Something went wrong'));
}
} catch (error) {
console.error('Form submission error:', error);
alert(currentLang === 'ar'
? 'حدث خطأ أثناء الإرسال. يرجى المحاولة مرة أخرى.'
: 'Error sending message. Please try again.');
} finally {
// Restore button
submitBtn.disabled = false;
submitBtn.innerHTML = originalBtnText;
}
});
// ===== OPTIMIZE LOADING =====
window.addEventListener('load', () => {
  // Add loaded class to body
  document.body.classList.add('loaded');
  
  // Remove page loader
  const loader = document.querySelector('.page-loader');
  if (loader) {
    setTimeout(() => {
      loader.classList.add('hidden');
    }, 500);
  }
});