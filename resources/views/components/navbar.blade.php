<header id="main-navbar" class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 py-5 border-b border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        
        <!-- Brand / Identity -->
        <a href="#hero" class="group flex items-center gap-3 text-sm font-mono tracking-tight text-white focus:outline-none">
            <span class="w-2.5 h-2.5 rounded-full bg-[#00F0FF] pulse-glow group-hover:scale-125 transition-transform duration-300"></span>
            <span class="font-bold tracking-wider text-white group-hover:text-[#00F0FF] transition-colors">SOURABH PANHALE</span>
            <span class="hidden sm:inline-block text-slate-400 text-xs">// PHP & LARAVEL</span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center space-x-8 text-xs font-mono tracking-wider" aria-label="Main Navigation">
            <a href="#hero" class="nav-link text-slate-400 hover:text-[#00F0FF] transition-colors flex items-center gap-1.5 py-1">
                <span class="nav-dot w-1.5 h-1.5 rounded-full bg-[#00F0FF] opacity-0 transition-opacity"></span>
                <span class="text-slate-400">01</span> HOME
            </a>
            <a href="#about" class="nav-link text-slate-400 hover:text-[#00F0FF] transition-colors flex items-center gap-1.5 py-1">
                <span class="nav-dot w-1.5 h-1.5 rounded-full bg-[#00F0FF] opacity-0 transition-opacity"></span>
                <span class="text-slate-400">02</span> ABOUT
            </a>
            <a href="#experience" class="nav-link text-slate-400 hover:text-[#00F0FF] transition-colors flex items-center gap-1.5 py-1">
                <span class="nav-dot w-1.5 h-1.5 rounded-full bg-[#00F0FF] opacity-0 transition-opacity"></span>
                <span class="text-slate-400">03</span> EXPERIENCE
            </a>
            <a href="#projects" class="nav-link text-slate-400 hover:text-[#00F0FF] transition-colors flex items-center gap-1.5 py-1">
                <span class="nav-dot w-1.5 h-1.5 rounded-full bg-[#00F0FF] opacity-0 transition-opacity"></span>
                <span class="text-slate-400">04</span> PROJECTS
            </a>
            <a href="#contact" class="nav-link text-slate-400 hover:text-[#00F0FF] transition-colors flex items-center gap-1.5 py-1">
                <span class="nav-dot w-1.5 h-1.5 rounded-full bg-[#00F0FF] opacity-0 transition-opacity"></span>
                <span class="text-slate-400">05</span> CONTACT
            </a>
        </nav>

        <!-- Availability Status Badge -->
        <div class="hidden sm:flex items-center gap-4">
            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0D0F12] border border-white/15 text-xs font-mono text-slate-300">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 font-semibold">Available for opportunities</span>
            </div>
        </div>

        <!-- Mobile Menu Trigger Button -->
        <button id="mobile-menu-btn" 
                type="button" 
                class="lg:hidden p-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/5 focus:outline-none border border-white/15"
                aria-label="Toggle navigation menu"
                aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-50 bg-[#060709]/98 backdrop-blur-xl flex flex-col justify-between p-6 border-b border-white/10">
        <div class="flex items-center justify-between pb-6 border-b border-white/10">
            <div class="flex items-center gap-2.5 text-sm font-mono text-white font-bold">
                <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
                <span>SOURABH PANHALE</span>
            </div>
            <button id="mobile-menu-close" 
                    class="p-2 text-slate-400 hover:text-white rounded-lg focus:outline-none"
                    aria-label="Close menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <nav class="flex flex-col space-y-6 my-auto text-lg font-mono">
            <a href="#hero" class="text-slate-300 hover:text-[#00F0FF] transition-colors flex items-center gap-4">
                <span class="text-xs text-[#00F0FF]">01</span> HOME
            </a>
            <a href="#about" class="text-slate-300 hover:text-[#00F0FF] transition-colors flex items-center gap-4">
                <span class="text-xs text-[#00F0FF]">02</span> ABOUT
            </a>
            <a href="#experience" class="text-slate-300 hover:text-[#00F0FF] transition-colors flex items-center gap-4">
                <span class="text-xs text-[#00F0FF]">03</span> EXPERIENCE
            </a>
            <a href="#projects" class="text-slate-300 hover:text-[#00F0FF] transition-colors flex items-center gap-4">
                <span class="text-xs text-[#00F0FF]">04</span> PROJECTS
            </a>
            <a href="#contact" class="text-slate-300 hover:text-[#00F0FF] transition-colors flex items-center gap-4">
                <span class="text-xs text-[#00F0FF]">05</span> CONTACT
            </a>
        </nav>

        <div class="pt-6 border-t border-white/10 flex flex-col gap-4">
            <div class="flex items-center gap-2 text-xs font-mono text-emerald-400">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Available for opportunities</span>
            </div>
            <a href="mailto:sourabh.panhale.dev@gmail.com" class="w-full text-center py-3 bg-[#00F0FF] text-black font-mono font-bold text-xs uppercase tracking-wider rounded">
                Get In Touch
            </a>
        </div>
    </div>
</header>
