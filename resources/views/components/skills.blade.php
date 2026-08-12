<section id="skills" class="py-24 border-b border-white/10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex items-center gap-2.5 text-xs font-mono text-[#00F0FF] tracking-widest uppercase mb-4 reveal-on-scroll">
            <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
            <span>03 / CAPABILITY MAP & TOOLING</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start reveal-on-scroll">
            
            <!-- Left Selectors (Col 1-7) -->
            <div class="lg:col-span-7 space-y-8">
                
                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-3">
                        Technical Capability Map
                    </h2>
                    <p class="text-slate-400 text-sm font-mono">
                        Select or hover over any technology node to inspect project implementation context.
                    </p>
                </div>

                <!-- Backend Category -->
                <div class="space-y-3">
                    <div class="text-xs font-mono text-slate-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00F0FF]"></span>
                        <span>BACKEND & FRAMEWORK</span>
                    </div>
                    <div class="flex flex-wrap gap-2.5">
                        <button type="button" data-skill="laravel" class="px-4 py-2.5 rounded-lg border border-[#00F0FF] bg-[#00F0FF]/10 text-white font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>Laravel 12</span>
                            <span class="text-[#00F0FF] text-[10px]">CORE</span>
                        </button>
                        <button type="button" data-skill="php" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>PHP 8.3+</span>
                        </button>
                        <button type="button" data-skill="rest" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>REST APIs</span>
                        </button>
                    </div>
                </div>

                <!-- Database Category -->
                <div class="space-y-3">
                    <div class="text-xs font-mono text-slate-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>DATABASE LAYER</span>
                    </div>
                    <div class="flex flex-wrap gap-2.5">
                        <button type="button" data-skill="mysql" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>MySQL 8.0</span>
                        </button>
                    </div>
                </div>

                <!-- Frontend Category -->
                <div class="space-y-3">
                    <div class="text-xs font-mono text-slate-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                        <span>FRONTEND & STYLING</span>
                    </div>
                    <div class="flex flex-wrap gap-2.5">
                        <button type="button" data-skill="blade" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>Blade Templating</span>
                        </button>
                        <button type="button" data-skill="tailwind" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>Tailwind CSS v4</span>
                        </button>
                        <button type="button" data-skill="js" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>JavaScript (ES6+)</span>
                        </button>
                    </div>
                </div>

                <!-- Tooling & Workflow Category -->
                <div class="space-y-3">
                    <div class="text-xs font-mono text-slate-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                        <span>DEVELOPER TOOLING</span>
                    </div>
                    <div class="flex flex-wrap gap-2.5">
                        <button type="button" data-skill="git" class="px-4 py-2.5 rounded-lg border border-white/10 bg-[#0C0E12] text-slate-300 font-mono text-xs hover:border-[#00F0FF] transition-all flex items-center gap-2">
                            <span>Git & GitHub</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Right Inspector Console (Col 8-12) -->
            <div class="lg:col-span-5 w-full">
                <div class="tech-card p-6 rounded-xl border border-white/15 bg-[#0C0E12] shadow-2xl relative sticky top-28">
                    
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-white/10">
                        <span class="text-[10px] font-mono text-slate-400 tracking-wider">CAPABILITY_INSPECTOR v1.2</span>
                        <span id="skill-inspector-cat" class="px-2 py-0.5 text-[10px] font-mono rounded bg-[#00F0FF]/10 text-[#00F0FF] border border-[#00F0FF]/20">
                            Backend Framework
                        </span>
                    </div>

                    <h3 id="skill-inspector-name" class="text-2xl font-extrabold text-white mb-3">
                        Laravel 12
                    </h3>

                    <div class="space-y-4 text-xs font-mono">
                        <div>
                            <span class="text-slate-500 block mb-1">SPECIFICATION //</span>
                            <p id="skill-inspector-desc" class="text-slate-300 leading-relaxed font-sans text-sm">
                                Primary backend engine for building scalable web applications, Eloquent data models, artisan CLI, service providers, and REST API architectures.
                            </p>
                        </div>

                        <div class="pt-4 border-t border-white/10">
                            <span class="text-slate-500 block mb-1">PROJECT USAGE //</span>
                            <p id="skill-inspector-usage" class="text-slate-300 leading-relaxed font-sans text-xs">
                                Core stack used in custom web systems. Deep experience with Blade, Service Layer, Middleware, Form Validation, and ORM query optimizations.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-slate-400">
                        <span>STATUS: ACTIVE SPECIALIZATION</span>
                        <span class="text-emerald-400">VERIFIED</span>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
