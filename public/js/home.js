
document.addEventListener('DOMContentLoaded', () => {
  const MOBILE_BREAKPOINT = 900; // coincide con el CSS actual
  const navbar = document.querySelector('.navbar');
  const header = document.querySelector('header');
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');

  // A11y: asegurar relación aria-controls -> id real del menú
  if (hamburger && navLinks) {
    if (!navLinks.id) navLinks.id = 'menu';
    if (!hamburger.getAttribute('aria-controls')) {
      hamburger.setAttribute('aria-controls', navLinks.id);
    }
  }

  // Helpers
  const isMobile = () => window.innerWidth <= MOBILE_BREAKPOINT;
  const openMenu = () => {
    if (!hamburger || !navLinks) return;
    hamburger.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    if (isMobile()) {
      // Mostrar menú sin depender de clases CSS faltantes
      navLinks.style.display = 'flex';
      navLinks.style.flexDirection = 'column';
      navLinks.style.gap = '12px';
      document.body.classList.add('no-scroll');
      header && header.classList.add('open');
    }
  };
  const closeMenu = () => {
    if (!hamburger || !navLinks) return;
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    // Quitar estilos inline solo si está en móvil
    if (isMobile()) {
      navLinks.style.display = '';
      navLinks.style.flexDirection = '';
      navLinks.style.gap = '';
      document.body.classList.remove('no-scroll');
      header && header.classList.remove('open');
    }
  };
  const toggleMenu = () => {
    const willOpen = !(hamburger?.classList.contains('active'));
    willOpen ? openMenu() : closeMenu();
  };

  // Toggle menú móvil accesible
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', toggleMenu);

    // Cerrar menú al hacer clic en un enlace
    navLinks.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        if (isMobile()) closeMenu();
      });
    });

    // Cerrar con click fuera
    document.addEventListener('click', (e) => {
      if (!isMobile()) return;
      const clickInsideMenu = navLinks.contains(e.target) || hamburger.contains(e.target);
      if (!clickInsideMenu && hamburger.classList.contains('active')) closeMenu();
    });

    // Cerrar con ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && hamburger.classList.contains('active')) closeMenu();
    });

    // Reset al cambiar de tamaño
    window.addEventListener('resize', () => {
      if (!isMobile()) {
        // Restaurar estado desktop
        navLinks.style.display = '';
        navLinks.style.flexDirection = '';
        navLinks.style.gap = '';
        document.body.classList.remove('no-scroll');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        header && header.classList.remove('open');
      }
    });
  }

  // Navbar sombra al hacer scroll (si hay estilos para .scrolled)
  const onScroll = () => {
    if (!navbar) return;
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  // Smooth scroll para enlaces internos
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (targetId && targetId.length > 1) {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });

  // Animaciones on-scroll (reveal)
  const revealTargets = [
    ...document.querySelectorAll('.hero-content'),
    ...document.querySelectorAll('section h2'),
    ...document.querySelectorAll('.card'),
    ...document.querySelectorAll('.faq details')
  ];

  revealTargets.forEach(el => el.classList.add('reveal'));

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    revealTargets.forEach(el => io.observe(el));
  } else {
    // Fallback: mostrar todo sin animación
    revealTargets.forEach(el => el.classList.add('in'));
  }
});
