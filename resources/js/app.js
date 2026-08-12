document.addEventListener('DOMContentLoaded', () => {
  initNavbarScroll();
  initMobileMenu();
  initScrollSpy();
  initCaseStudyModal();
  initSkillsInspector();
  initArchitectureInspector();
  initMagneticButtons();
  initContactForm();
  initPortraitParallax();
  initCustomCursor();
  initScrollReveal();
  initPhilosophyHover();
});

/* 1. Navbar Scroll Compression & Glass Blur */
function initNavbarScroll() {
  const nav = document.getElementById('main-navbar');
  if (!nav) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      nav.classList.add('py-3.5', 'bg-[#060709]/90', 'backdrop-blur-md', 'border-b', 'border-white/10', 'shadow-2xl');
      nav.classList.remove('py-5', 'bg-transparent', 'border-transparent');
    } else {
      nav.classList.remove('py-3.5', 'bg-[#060709]/90', 'backdrop-blur-md', 'border-b', 'border-white/10', 'shadow-2xl');
      nav.classList.add('py-5', 'bg-transparent', 'border-transparent');
    }
  }, { passive: true });
}

/* 2. Mobile Drawer Navigation */
function initMobileMenu() {
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const closeBtn = document.getElementById('mobile-menu-close');

  if (!btn || !menu) return;

  const toggle = (show) => {
    if (show) {
      menu.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
      btn.setAttribute('aria-expanded', 'true');
    } else {
      menu.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
      btn.setAttribute('aria-expanded', 'false');
    }
  };

  btn.addEventListener('click', () => toggle(menu.classList.contains('hidden')));
  if (closeBtn) closeBtn.addEventListener('click', () => toggle(false));

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => toggle(false));
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
      toggle(false);
    }
  });
}

/* 3. ScrollSpy Navigation Highlighting */
function initScrollSpy() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  if (!sections.length || !navLinks.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach(link => {
          if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('text-[#00F0FF]', 'font-semibold');
            link.classList.remove('text-slate-400');
            const indicator = link.querySelector('.nav-dot');
            if (indicator) indicator.classList.remove('opacity-0');
          } else {
            link.classList.remove('text-[#00F0FF]', 'font-semibold');
            link.classList.add('text-slate-400');
            const indicator = link.querySelector('.nav-dot');
            if (indicator) indicator.classList.add('opacity-0');
          }
        });
      }
    });
  }, { threshold: 0.3 });

  sections.forEach(sec => observer.observe(sec));
}

/* 4. Portrait Card Restrained Mouse Parallax (2-4px Tilt) */
function initPortraitParallax() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const portraitCard = document.getElementById('hero-portrait-card');
  if (!portraitCard) return;

  const portraitImg = portraitCard.querySelector('img');

  portraitCard.addEventListener('mousemove', (e) => {
    const rect = portraitCard.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;

    const tiltX = (y / (rect.height / 2)) * -3;
    const tiltY = (x / (rect.width / 2)) * 3;

    portraitCard.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) translateY(-2px)`;

    if (portraitImg) {
      portraitImg.style.transform = `scale(1.03) translate(${x * 0.02}px, ${y * 0.02}px)`;
    }
  });

  portraitCard.addEventListener('mouseleave', () => {
    portraitCard.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    if (portraitImg) {
      portraitImg.style.transform = 'scale(1) translate(0px, 0px)';
    }
  });
}

/* 5. Custom Micro Cursor Dot */
function initCustomCursor() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const cursor = document.getElementById('custom-cursor');
  if (!cursor) return;

  let mouseX = -100, mouseY = -100;
  let cursorX = -100, cursorY = -100;

  document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  function render() {
    cursorX += (mouseX - cursorX) * 0.2;
    cursorY += (mouseY - cursorY) * 0.2;
    cursor.style.left = `${cursorX}px`;
    cursor.style.top = `${cursorY}px`;
    requestAnimationFrame(render);
  }
  requestAnimationFrame(render);

  const interactiveElements = document.querySelectorAll('a, button, input, textarea, [data-skill], [data-arch-node], [data-magnetic]');
  interactiveElements.forEach(el => {
    el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
    el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
  });
}

/* 6. Scroll Reveal Observer */
function initScrollReveal() {
  const elements = document.querySelectorAll('.reveal-on-scroll');
  if (!elements.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, { threshold: 0.15 });

  elements.forEach(el => observer.observe(el));
}

/* 7. Engineering Philosophy Sequence Hover */
function initPhilosophyHover() {
  const items = document.querySelectorAll('.philosophy-item');
  if (!items.length) return;

  items.forEach(item => {
    item.addEventListener('mouseenter', () => {
      items.forEach(other => {
        if (other !== item) {
          other.classList.add('opacity-40', 'scale-[0.99]');
          other.classList.remove('opacity-100');
        } else {
          other.classList.remove('opacity-40');
          other.classList.add('opacity-100');
        }
      });
    });

    item.addEventListener('mouseleave', () => {
      items.forEach(other => {
        other.classList.remove('opacity-40', 'scale-[0.99]');
        other.classList.add('opacity-100');
      });
    });
  });
}

/* 8. Case Study Modal System */
const caseStudyData = {
  college: {
    title: "College Admission Management System",
    subtitle: "Full-Stack Laravel Workflow & Registration Engine",
    stack: ["Laravel 12", "PHP 8.3", "MySQL", "Tailwind CSS", "JavaScript", "Blade"],
    image: "/images/college-admission-mockup.png",
    github: "https://github.com/sourabh-panhale",
    demo: "#",
    overview: "A comprehensive web application designed to streamline student registration, application verification, merit list generation, and seat allocation for educational institutions.",
    problem: "Manual admission processing is prone to data bottlenecks, human verification errors, delayed merit publishing, and uncoordinated communication between departments.",
    solution: "Built a centralized Laravel backend with role-based access control (Students, Verification Officers, Administrators), automated application state machine, input sanitization, and structured Eloquent relationships.",
    features: [
      "Multi-stage application form with auto-save draft capability",
      "Document upload & officer review workflow status (Pending, Verified, Rejected with remarks)",
      "Automated Merit List ranking calculation based on aggregate percentage criteria",
      "Admin dashboard with operational metrics, batch exports, and applicant audit trails"
    ],
    decisions: [
      "Used DB Transactions during final application submission to prevent partial records.",
      "Implemented Custom Middleware to lock form edits once an application enters verification phase.",
      "Utilized Laravel Blade Components to maintain consistent UI density across all admin views."
    ],
    learned: "Mastered multi-step form validation handling in Laravel, handling edge-case database concurrency during peak submission periods, and designing clean administrative workflows."
  },
  healthcare: {
    title: "Healthcare / PHC Management System",
    subtitle: "Operational Clinical Records & Queue Management System",
    stack: ["Laravel 12", "PHP 8.3", "MySQL", "Blade", "Tailwind CSS"],
    image: "/images/healthcare-system-mockup.png",
    github: "https://github.com/sourabh-panhale",
    demo: "#",
    overview: "A specialized healthcare management application tailored for Primary Health Centres (PHCs) to manage patient registration, OPD queues, doctor consultations, and pharmacy inventory.",
    problem: "Rural and semi-urban health centers often struggle with paper-based patient records, long waiting lines, inventory leakage, and fragmented daily reporting.",
    solution: "Engineered a fast, lightweight web interface that digitizes patient visits, standardizes prescription entry, tracks medical stock levels, and generates real-time daily operational reports.",
    features: [
      "Token-based OPD Queue management system for real-time doctor assignment",
      "Patient health history lookup with instant search indexing",
      "Doctor prescription entry interface with pre-loaded drug master data",
      "Pharmacy stock deduction workflow linked to issued prescriptions"
    ],
    decisions: [
      "Focused on keyboard-first navigation for fast patient intake at registration counters.",
      "Normalized DB schema for patient vitals and prescription details to ensure long-term data integrity.",
      "Avoided heavy JavaScript dependencies to keep bundle payload minimal for low-bandwidth clinic connections."
    ],
    learned: "Gained deep understanding of domain modeling for medical workflows, privacy-conscious data structure design, and optimizing database queries for high-volume daily patient records."
  }
};

function initCaseStudyModal() {
  const modal = document.getElementById('case-study-modal');
  if (!modal) return;

  const closeBtn = document.getElementById('modal-close-btn');
  const triggerBtns = document.querySelectorAll('[data-open-case-study]');

  triggerBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const projectKey = btn.getAttribute('data-open-case-study');
      const data = caseStudyData[projectKey];
      if (!data) return;

      populateModal(data);
      modal.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    });
  });

  const closeModal = () => {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  };

  if (closeBtn) closeBtn.addEventListener('click', closeModal);

  modal.addEventListener('click', (e) => {
    if (e.target === modal || e.target.id === 'modal-backdrop') {
      closeModal();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
      closeModal();
    }
  });
}

function populateModal(data) {
  document.getElementById('modal-title').textContent = data.title;
  document.getElementById('modal-subtitle').textContent = data.subtitle;
  document.getElementById('modal-image').src = data.image;
  document.getElementById('modal-overview').textContent = data.overview;
  document.getElementById('modal-problem').textContent = data.problem;
  document.getElementById('modal-solution').textContent = data.solution;
  document.getElementById('modal-learned').textContent = data.learned;

  const stackContainer = document.getElementById('modal-stack');
  stackContainer.innerHTML = data.stack.map(s => 
    `<span class="px-2.5 py-1 text-xs font-mono rounded border border-white/10 bg-white/5 text-cyan-400">${s}</span>`
  ).join('');

  const featuresList = document.getElementById('modal-features');
  featuresList.innerHTML = data.features.map(f => 
    `<li class="flex items-start gap-2.5 text-sm text-slate-300">
      <span class="text-[#00F0FF] font-mono">▸</span>
      <span>${f}</span>
    </li>`
  ).join('');

  const decisionsList = document.getElementById('modal-decisions');
  decisionsList.innerHTML = data.decisions.map(d => 
    `<li class="flex items-start gap-2.5 text-sm text-slate-300">
      <span class="text-emerald-400 font-mono">✔</span>
      <span>${d}</span>
    </li>`
  ).join('');

  const ghBtn = document.getElementById('modal-github-btn');
  if (ghBtn) ghBtn.href = data.github;
}

/* 9. Interactive Capability Map (Skills Inspector) */
const skillDetails = {
  laravel: {
    name: "Laravel 12",
    cat: "Backend Framework",
    desc: "Primary backend engine for building scalable web applications, Eloquent data models, artisan CLI, service providers, and REST API architectures.",
    usage: "Core stack used in 100% of custom web systems. Deep experience with Blade, Service Layer, Middleware, Validation, and ORM optimizations."
  },
  php: {
    name: "PHP 8.3+",
    cat: "Backend Language",
    desc: "Modern strictly typed PHP development with object-oriented patterns, attributes, match expressions, and performance-tuned execution.",
    usage: "Writing maintainable domain logic, custom helpers, trait composition, and decoupled service classes."
  },
  mysql: {
    name: "MySQL Data Layer",
    cat: "Database Engine",
    desc: "Relational database modeling, query optimization, foreign key constraints, indexing strategies, and multi-table transactions.",
    usage: "Designing normalized database schemas for admission portals, patient health logs, and administrative systems."
  },
  blade: {
    name: "Blade Templating",
    cat: "Frontend Architecture",
    desc: "Laravel's native templating engine used for component-driven UI architecture, slot composition, layouts, and fast SSR execution.",
    usage: "Building reusable UI component libraries with zero JavaScript overhead."
  },
  tailwind: {
    name: "Tailwind CSS v4",
    cat: "Styling Framework",
    desc: "Utility-first design system engine for pixel-perfect dark technical interfaces, responsive fluid grids, and custom token integration.",
    usage: "Creating dark editorial design systems, micro-interactions, responsive typography, and fine-line borders."
  },
  js: {
    name: "JavaScript (ES6+)",
    cat: "Frontend Logic",
    desc: "Modern asynchronous JavaScript for client-side interactions, DOM manipulation, Fetch API calls, state toggles, and modal interfaces.",
    usage: "Enhancing server-rendered Laravel pages with light, reactive client interactions without bulk JS frameworks."
  },
  git: {
    name: "Git & GitHub",
    cat: "Version Control & Workflow",
    desc: "Feature branching, pull request workflows, commit discipline, repository organization, and release tagging.",
    usage: "Maintaining clear commit history, collaborative code reviews, and structured project repos."
  },
  rest: {
    name: "RESTful API Architecture",
    cat: "Integration & Services",
    desc: "Designing structured JSON API endpoints, status codes, request validation rules, resource transformers, and authentication headers.",
    usage: "Building decoupled backends and third-party API integrations."
  }
};

function initSkillsInspector() {
  const buttons = document.querySelectorAll('[data-skill]');
  const inspectorName = document.getElementById('skill-inspector-name');
  const inspectorCat = document.getElementById('skill-inspector-cat');
  const inspectorDesc = document.getElementById('skill-inspector-desc');
  const inspectorUsage = document.getElementById('skill-inspector-usage');

  if (!buttons.length || !inspectorName) return;

  const updateInspector = (key) => {
    const detail = skillDetails[key];
    if (!detail) return;

    inspectorName.textContent = detail.name;
    inspectorCat.textContent = detail.cat;
    inspectorDesc.textContent = detail.desc;
    inspectorUsage.textContent = detail.usage;

    buttons.forEach(b => {
      if (b.getAttribute('data-skill') === key) {
        b.classList.add('border-[#00F0FF]', 'bg-[#00F0FF]/10', 'text-white');
        b.classList.remove('border-white/10', 'text-slate-300');
      } else {
        b.classList.remove('border-[#00F0FF]', 'bg-[#00F0FF]/10', 'text-white');
        b.classList.add('border-white/10', 'text-slate-300');
      }
    });
  };

  buttons.forEach(btn => {
    btn.addEventListener('mouseenter', () => updateInspector(btn.getAttribute('data-skill')));
    btn.addEventListener('click', () => updateInspector(btn.getAttribute('data-skill')));
  });
}

/* 10. System Architecture Inspector */
const archNodes = {
  client: {
    title: "01 // Client Browser",
    tech: "HTML5 / Tailwind / Vanilla JS",
    detail: "Initial HTTP Request sent via TLS 1.3. Returns server-side rendered Blade HTML with optimized Vite assets, achieving instant DOM paint and 95+ Lighthouse score."
  },
  vite: {
    title: "02 // Vite Asset Pipeline",
    tech: "Vite 6 + Tailwind CSS v4",
    detail: "Bundles minimal CSS & JS modules in development and compiles production assets into ultra-light minified files served with long-term cache headers."
  },
  router: {
    title: "03 // Laravel 12 Router & Middleware",
    tech: "Web & API Middleware Stack",
    detail: "Intercepts request, enforces CSRF token verification, session initialization, rate limiting, and route parameter resolution."
  },
  controller: {
    title: "04 // Controller & Validation",
    tech: "Form Request & Actions",
    detail: "Validates incoming payload against strict rules, sanitizes input data, and delegates business rules to dedicated service classes."
  },
  eloquent: {
    title: "05 // Eloquent ORM & Query Layer",
    tech: "PHP 8.3 PDO / Query Builder",
    detail: "Executes indexed SQL queries, maps relational tables (1:M, M:N), manages DB transactions, and returns typed model collections."
  },
  database: {
    title: "06 // MySQL Data Layer",
    tech: "MySQL 8.0 InnoDB",
    detail: "ACID-compliant storage engine with foreign keys, index optimization, and transaction safety for critical application records."
  }
};

function initArchitectureInspector() {
  const nodes = document.querySelectorAll('[data-arch-node]');
  const title = document.getElementById('arch-title');
  const tech = document.getElementById('arch-tech');
  const detail = document.getElementById('arch-detail');

  if (!nodes.length || !title) return;

  const selectNode = (key) => {
    const data = archNodes[key];
    if (!data) return;

    title.textContent = data.title;
    tech.textContent = data.tech;
    detail.textContent = data.detail;

    nodes.forEach(n => {
      if (n.getAttribute('data-arch-node') === key) {
        n.classList.add('border-[#00F0FF]', 'bg-[#00F0FF]/15', 'shadow-lg', 'shadow-[#00F0FF]/20');
        n.classList.remove('border-white/10', 'bg-[#0C0E12]');
      } else {
        n.classList.remove('border-[#00F0FF]', 'bg-[#00F0FF]/15', 'shadow-lg', 'shadow-[#00F0FF]/20');
        n.classList.add('border-white/10', 'bg-[#0C0E12]');
      }
    });
  };

  nodes.forEach(node => {
    node.addEventListener('click', () => selectNode(node.getAttribute('data-arch-node')));
    node.addEventListener('mouseenter', () => selectNode(node.getAttribute('data-arch-node')));
  });
}

/* 11. Magnetic Button Effect */
function initMagneticButtons() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const magneticElements = document.querySelectorAll('[data-magnetic]');

  magneticElements.forEach(el => {
    el.addEventListener('mousemove', (e) => {
      const rect = el.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      el.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px)`;
    });

    el.addEventListener('mouseleave', () => {
      el.style.transform = 'translate(0px, 0px)';
    });
  });
}

/* 12. Contact Form Feedback */
function initContactForm() {
  const form = document.getElementById('contact-form');
  const statusMsg = document.getElementById('form-status-msg');

  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;

    btn.disabled = true;
    btn.innerHTML = `<span class="inline-block animate-spin mr-2">⚙</span> TRANSMITTING...`;

    setTimeout(() => {
      btn.disabled = false;
      btn.innerHTML = `✔ MESSAGE SENT SUCCESSFULLY`;
      btn.classList.remove('bg-[#00F0FF]', 'text-black');
      btn.classList.add('bg-emerald-500', 'text-black');

      if (statusMsg) {
        statusMsg.classList.remove('hidden');
        statusMsg.textContent = "Thank you! Your message has been prepared for transmission. I will get back to you shortly.";
      }

      form.reset();

      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.classList.remove('bg-emerald-500');
        btn.classList.add('bg-[#00F0FF]', 'text-black');
        if (statusMsg) statusMsg.classList.add('hidden');
      }, 5000);
    }, 1200);
  });
}
