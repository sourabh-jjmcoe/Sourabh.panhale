<section id="philosophy" class="py-24 border-b border-white/10 relative bg-[#080A0D]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-12 reveal-on-scroll">
            <div class="flex items-center gap-2.5 text-xs font-mono text-[#00F0FF] tracking-widest uppercase">
                <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
                <span>02 / ENGINEERING PHILOSOPHY</span>
            </div>
            <span class="text-xs font-mono text-slate-500 hidden sm:inline-block">CORE CODE DISCIPLINE</span>
        </div>

        <div class="mb-14 reveal-on-scroll">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                How I think about <span class="text-[#00F0FF]">software architecture</span>.
            </h2>
            <p class="text-slate-400 text-sm max-w-2xl mt-3 font-mono">
                Practical engineering guidelines that shape how I structure database queries, backend logic, and frontend components.
            </p>
        </div>

        <!-- Sequence of Principles -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal-on-scroll">
            
            <!-- Principle 01 -->
            <div class="philosophy-item tech-card p-8 rounded-xl border border-white/10 bg-[#0C0E12] relative group transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-3xl font-extrabold font-mono text-[#00F0FF]">01</span>
                    <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-[#00F0FF]/10 text-[#00F0FF] border border-[#00F0FF]/20 uppercase">READABILITY</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#00F0FF] transition-colors">
                    Clarity over cleverness
                </h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Code is read far more often than it is written. Explicit method signatures, descriptive variable names, and clear domain boundaries prevent subtle bugs and reduce cognitive overhead for future maintainers.
                </p>
            </div>

            <!-- Principle 02 -->
            <div class="philosophy-item tech-card p-8 rounded-xl border border-white/10 bg-[#0C0E12] relative group transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-3xl font-extrabold font-mono text-emerald-400">02</span>
                    <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 uppercase">DOMAIN FIRST</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors">
                    Build for the real problem
                </h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Avoid premature abstraction and micro-optimization. Analyze operational bottlenecks first, understand the domain constraints, and engineer software that directly solves business objectives.
                </p>
            </div>

            <!-- Principle 03 -->
            <div class="philosophy-item tech-card p-8 rounded-xl border border-white/10 bg-[#0C0E12] relative group transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-3xl font-extrabold font-mono text-purple-400">03</span>
                    <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-purple-500/10 text-purple-400 border border-purple-500/20 uppercase">TRANSPARENCY</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">
                    Make complexity visible
                </h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Complex operations should not hide behind opaque magic. Database migrations, validation rules, state transitions, and third-party integrations should be explicitly declared and easily traceable.
                </p>
            </div>

            <!-- Principle 04 -->
            <div class="philosophy-item tech-card p-8 rounded-xl border border-white/10 bg-[#0C0E12] relative group transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-3xl font-extrabold font-mono text-amber-400">04</span>
                    <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-amber-500/10 text-amber-400 border border-amber-500/20 uppercase">CRAFT</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-amber-400 transition-colors">
                    Keep improving
                </h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Software engineering requires continuous learning. Regularly refactoring legacy controllers, upgrading PHP/Laravel dependencies, and adopting modern toolings ensure long-term application health.
                </p>
            </div>

        </div>

    </div>
</section>
