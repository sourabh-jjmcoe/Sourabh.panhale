<section id="architecture" class="py-24 border-b border-white/10 relative bg-[#080A0D]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex items-center gap-2.5 text-xs font-mono text-[#00F0FF] tracking-widest uppercase mb-4 reveal-on-scroll">
            <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
            <span>06 / SYSTEM ARCHITECTURE</span>
        </div>

        <div class="mb-12 reveal-on-scroll">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                How I build <span class="text-[#00F0FF]">full-stack Laravel applications</span>.
            </h2>
            <p class="text-slate-400 text-sm max-w-2xl mt-3 font-mono">
                Click or hover over any architectural layer to inspect lifecycle execution details.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch reveal-on-scroll">
            
            <!-- Left Flowchart Grid (Col 1-7) -->
            <div class="lg:col-span-7 space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Node 1: Client -->
                    <div data-arch-node="client" class="tech-card p-5 rounded-xl border border-[#00F0FF] bg-[#00F0FF]/15 cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 01</span>
                            <span class="text-[#00F0FF]">ENTRYPOINT</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">Client Browser</h3>
                        <p class="text-slate-400 text-xs font-mono">HTML5 / Vite CSS / JS</p>
                    </div>

                    <!-- Node 2: Vite -->
                    <div data-arch-node="vite" class="tech-card p-5 rounded-xl border border-white/10 bg-[#0C0E12] cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 02</span>
                            <span class="text-purple-400">BUNDLER</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">Vite Asset Pipeline</h3>
                        <p class="text-slate-400 text-xs font-mono">Tailwind CSS v4 + JS</p>
                    </div>

                    <!-- Node 3: Router -->
                    <div data-arch-node="router" class="tech-card p-5 rounded-xl border border-white/10 bg-[#0C0E12] cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 03</span>
                            <span class="text-cyan-400">SECURITY</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">Laravel 12 Router</h3>
                        <p class="text-slate-400 text-xs font-mono">Middleware & CSRF</p>
                    </div>

                    <!-- Node 4: Controller -->
                    <div data-arch-node="controller" class="tech-card p-5 rounded-xl border border-white/10 bg-[#0C0E12] cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 04</span>
                            <span class="text-amber-400">LOGIC</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">Controller & Validation</h3>
                        <p class="text-slate-400 text-xs font-mono">Form Request & Actions</p>
                    </div>

                    <!-- Node 5: Eloquent -->
                    <div data-arch-node="eloquent" class="tech-card p-5 rounded-xl border border-white/10 bg-[#0C0E12] cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 05</span>
                            <span class="text-emerald-400">ORM</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">Eloquent ORM</h3>
                        <p class="text-slate-400 text-xs font-mono">Query Builder & Models</p>
                    </div>

                    <!-- Node 6: Database -->
                    <div data-arch-node="database" class="tech-card p-5 rounded-xl border border-white/10 bg-[#0C0E12] cursor-pointer transition-all">
                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 mb-2">
                            <span>LAYER 06</span>
                            <span class="text-red-400">PERSISTENCE</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-1">MySQL Database</h3>
                        <p class="text-slate-400 text-xs font-mono">InnoDB Relational Schema</p>
                    </div>

                </div>
            </div>

            <!-- Right Inspector Console (Col 8-12) -->
            <div class="lg:col-span-5 flex">
                <div class="tech-card p-6 sm:p-8 rounded-xl border border-white/15 bg-[#0C0E12] w-full flex flex-col justify-between relative">
                    <div>
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-white/10 text-xs font-mono text-slate-400">
                            <span>LIFECYCLE INSPECTOR</span>
                            <span id="arch-tech" class="text-[#00F0FF]">HTML5 / Tailwind / Vanilla JS</span>
                        </div>

                        <h3 id="arch-title" class="text-xl font-bold text-white mb-4">
                            01 // Client Browser
                        </h3>

                        <p id="arch-detail" class="text-slate-300 text-sm leading-relaxed font-sans mb-6">
                            Initial HTTP Request sent via TLS 1.3. Returns server-side rendered Blade HTML with optimized Vite assets, achieving instant DOM paint and 95+ Lighthouse score.
                        </p>
                    </div>

                    <div class="pt-4 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-slate-400">
                        <span>PIPELINE: ACTIVE</span>
                        <span class="text-emerald-400 font-semibold">0.024s RESP TIME</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
