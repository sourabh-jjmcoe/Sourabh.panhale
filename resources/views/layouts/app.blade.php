<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sourabh Panhale — PHP & Laravel Developer specializing in clean software architecture, relational database design, and maintainable web applications.">
    <meta name="keywords" content="Sourabh Panhale, Laravel Developer, PHP Developer, Full-Stack PHP, MySQL, Tailwind CSS, Pune Developer">
    <meta name="author" content="Sourabh Panhale">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sourabh-panhale.vercel.app">
    <meta property="og:title" content="Sourabh Panhale — PHP / Laravel Developer">
    <meta property="og:description" content="Building thoughtful, reliable web systems with Laravel and modern PHP.">
    <meta property="og:image" content="/images/sourabh-portrait.png">

    <title>Sourabh Panhale — PHP / Laravel Developer</title>

    <!-- Preconnect Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        'tech-bg': '#060709',
                        'tech-surface': '#0C0E12',
                        'tech-hover': '#14171E',
                        'tech-cyan': '#00F0FF',
                        'tech-emerald': '#00E599',
                    }
                }
            }
        }
    </script>

    <!-- Custom Dark Technical Design System Styles -->
    <style>
        html {
            scroll-behavior: smooth;
            background-color: #060709;
            color: #F8FAFC;
            color-scheme: dark;
        }

        body {
            background-color: #060709;
            color: #F8FAFC;
            overflow-x: hidden;
        }

        ::selection {
            background: #00F0FF;
            color: #000000;
        }

        /* Subtle Custom Micro Cursor */
        #custom-cursor {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 8px;
            height: 8px;
            background-color: #00F0FF;
            border-radius: 50%;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.2s ease, height 0.2s ease, background-color 0.2s ease, opacity 0.2s ease;
            opacity: 0;
        }

        body:hover #custom-cursor {
            opacity: 0.85;
        }

        .cursor-hover #custom-cursor {
            width: 28px;
            height: 28px;
            background-color: rgba(0, 240, 255, 0.15);
            border: 1px solid #00F0FF;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #060709;
        }
        ::-webkit-scrollbar-thumb {
            background: #1E232D;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00F0FF;
        }

        /* Spatial Background Technical Grid with Radial Mask */
        .bg-tech-grid {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
            background-size: 48px 48px;
            mask-image: radial-gradient(ellipse at 50% 30%, black 50%, transparent 95%);
            -webkit-mask-image: radial-gradient(ellipse at 50% 30%, black 50%, transparent 95%);
        }

        .bg-radial-glow {
            background: radial-gradient(circle at 50% 15%, rgba(0, 240, 255, 0.06) 0%, transparent 55%);
        }

        /* Fine Glass Card */
        .tech-card {
            background-color: #0C0E12;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .tech-card:hover {
            border-color: rgba(0, 240, 255, 0.35);
            box-shadow: 0 16px 36px -10px rgba(0, 0, 0, 0.6), 0 0 24px -6px rgba(0, 240, 255, 0.12);
        }

        /* Pulse glow */
        .pulse-glow {
            box-shadow: 0 0 12px #00F0FF;
        }

        /* Scroll Reveal Utility */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Background Noise Overlay */
        .bg-noise {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.025'/%3E%3C/svg%3E");
        }

        *:focus-visible {
            outline: 2px solid #00F0FF;
            outline-offset: 3px;
        }

        @media (prefers-reduced-motion: reduce) {
            *, ::before, ::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
            #custom-cursor {
                display: none !important;
            }
            .reveal-on-scroll {
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
</head>
<body class="bg-[#060709] text-[#F8FAFC] font-sans selection:bg-[#00F0FF] selection:text-black antialiased relative min-h-screen">
    
    <!-- Micro Cursor Dot -->
    <div id="custom-cursor"></div>

    <!-- Accessibility Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 z-50 px-4 py-2 bg-[#00F0FF] text-black font-mono font-bold rounded shadow-lg">
        Skip to main content
    </a>

    <!-- Subtle Technical Background Grid & Ambient Glow -->
    <div class="fixed inset-0 bg-tech-grid opacity-75 pointer-events-none z-0"></div>
    <div class="fixed inset-0 bg-radial-glow pointer-events-none z-0"></div>
    <div class="fixed inset-0 bg-noise pointer-events-none z-0"></div>

    <div class="relative z-10 flex flex-col min-h-screen">
        @include('components.navbar')

        <main id="main-content" class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    @include('components.case-study-modal')

    <!-- Interactive Script -->
    <script src="/js/app.js"></script>
</body>
</html>
