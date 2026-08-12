<section id="projects" class="py-24 border-b border-white/10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-12 reveal-on-scroll">
            <div class="flex items-center gap-2.5 text-xs font-mono text-[#00F0FF] tracking-widest uppercase">
                <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
                <span>05 / SELECTED WORK & CASE STUDIES</span>
            </div>
            <span class="text-xs font-mono text-slate-500 hidden sm:inline-block">FEATURED IMPLEMENTATIONS</span>
        </div>

        <div class="mb-16 reveal-on-scroll">
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                Things I've <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-[#00F0FF]">engineered & launched</span>.
            </h2>
            <p class="text-slate-400 text-base max-w-2xl mt-4 font-mono">
                Detailed breakdowns of real web applications, technical architectural decisions, and database structures.
            </p>
        </div>

        <!-- Project 01: College Admission System (Text Left, Visual Right) -->
        <div class="tech-card rounded-2xl border border-white/15 bg-[#0C0E12] overflow-hidden mb-16 relative group reveal-on-scroll">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Left Editorial Case Study Content (Col 1-5) -->
                <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono text-slate-400 mb-3">
                            <span>PROJECT // 001</span>
                            <span class="text-[#00F0FF]">FULL-STACK WORKFLOW</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-[#00F0FF] transition-colors">
                            College Admission Management System
                        </h3>

                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            A multi-stage admission workflow application built on Laravel. Features student registration, document upload status tracking, merit list calculations, and role-based administrative verification.
                        </p>

                        <ul class="space-y-2.5 text-xs font-mono text-slate-400 mb-8">
                            <li class="flex items-center gap-2">
                                <span class="text-[#00F0FF]">✔</span>
                                <span>Multi-stage applicant registration & validation</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#00F0FF]">✔</span>
                                <span>Officer document verification approval state machine</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#00F0FF]">✔</span>
                                <span>Automated merit rank calculation engine</span>
                            </li>
                        </ul>

                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-cyan-400">Laravel 12</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">PHP 8.3</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">MySQL</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">Tailwind CSS</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-6 border-t border-white/10">
                        <button type="button" 
                                data-open-case-study="college" 
                                class="px-5 py-2.5 bg-[#00F0FF] text-black font-mono font-bold text-xs uppercase tracking-wider rounded hover:bg-[#00F0FF]/90 transition-all flex items-center gap-2">
                            <span>VIEW CASE STUDY</span>
                            <span>→</span>
                        </button>
                        <a href="https://github.com/sourabh-panhale" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-slate-400 hover:text-white transition-colors flex items-center gap-1">
                            <span>GITHUB</span>
                            <span class="text-slate-500">↗</span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Preview Browser Frame (Col 6-12) -->
                <div class="lg:col-span-7 p-6 sm:p-8 bg-[#07080A] border-t lg:border-t-0 lg:border-l border-white/10 relative">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-white/10 text-xs font-mono text-slate-400">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            <span class="ml-2 text-slate-400 text-[11px]">https://admission.system.internal/dashboard</span>
                        </div>
                        <span class="text-[#00F0FF] text-[10px]">VERIFIED_BUILD</span>
                    </div>

                    <div class="relative rounded-lg overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/college-admission-mockup.png') }}" 
                             alt="College Admission Management System Interface" 
                             class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-500" 
                             loading="lazy" />

                        <div class="absolute bottom-4 right-4 bg-[#060709]/90 backdrop-blur-md px-3 py-1.5 rounded border border-white/10 text-[10px] font-mono text-[#00F0FF]">
                            LARAVEL 12 + ELOQUENT ORM
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Project 02: Healthcare Management System (Visual Left, Text Right) -->
        <div class="tech-card rounded-2xl border border-white/15 bg-[#0C0E12] overflow-hidden mb-16 relative group reveal-on-scroll">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Left Visual Preview Browser Frame (Col 1-7) -->
                <div class="lg:col-span-7 p-6 sm:p-8 bg-[#07080A] border-b lg:border-b-0 lg:border-r border-white/10 relative">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-white/10 text-xs font-mono text-slate-400">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            <span class="ml-2 text-slate-400 text-[11px]">https://phc.health.gov.in/opd-queue</span>
                        </div>
                        <span class="text-emerald-400 text-[10px]">PRODUCTION_READY</span>
                    </div>

                    <div class="relative rounded-lg overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/healthcare-system-mockup.png') }}" 
                             alt="Healthcare PHC Management System Interface" 
                             class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-500" 
                             loading="lazy" />

                        <div class="absolute bottom-4 right-4 bg-[#060709]/90 backdrop-blur-md px-3 py-1.5 rounded border border-white/10 text-[10px] font-mono text-emerald-400">
                            CLINICAL DATA MODEL + MYSQL
                        </div>
                    </div>
                </div>

                <!-- Right Editorial Case Study Content (Col 8-12) -->
                <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center justify-between text-xs font-mono text-slate-400 mb-3">
                            <span>PROJECT // 002</span>
                            <span class="text-emerald-400">CLINICAL RECORDS</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-emerald-400 transition-colors">
                            Healthcare / PHC Management System
                        </h3>

                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            Operational healthcare management system engineered for Primary Health Centres. Handles patient check-in queues, OPD record digitizations, doctor prescription entries, and pharmacy stock deductions.
                        </p>

                        <ul class="space-y-2.5 text-xs font-mono text-slate-400 mb-8">
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-400">✔</span>
                                <span>Token-based OPD patient queue & doctor assignment</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-400">✔</span>
                                <span>Normalized patient health history & prescription records</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-400">✔</span>
                                <span>Pharmacy stock inventory movements & daily reporting</span>
                            </li>
                        </ul>

                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-emerald-400">Laravel 12</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">PHP 8.3</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">MySQL</span>
                            <span class="px-2.5 py-1 text-[10px] font-mono rounded bg-white/5 border border-white/10 text-slate-300">Blade</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-6 border-t border-white/10">
                        <button type="button" 
                                data-open-case-study="healthcare" 
                                class="px-5 py-2.5 bg-emerald-400 text-black font-mono font-bold text-xs uppercase tracking-wider rounded hover:bg-emerald-300 transition-all flex items-center gap-2">
                            <span>VIEW CASE STUDY</span>
                            <span>→</span>
                        </button>
                        <a href="https://github.com/sourabh-panhale" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-slate-400 hover:text-white transition-colors flex items-center gap-1">
                            <span>GITHUB</span>
                            <span class="text-slate-500">↗</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Project 03: Future Advanced Project Placeholder (Full Width Composition) -->
        <div class="tech-card rounded-2xl border border-dashed border-white/20 bg-[#08090C] p-8 sm:p-12 text-center relative overflow-hidden reveal-on-scroll">
            <div class="max-w-xl mx-auto">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-purple-500/10 border border-purple-500/20 text-purple-400 text-xs font-mono mb-4">
                    <span class="w-2 h-2 rounded-full bg-purple-400 animate-ping"></span>
                    <span>IN ACTIVE DEVELOPMENT</span>
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                    Something technically interesting is next.
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6 font-mono">
                    Currently architecting a modern Laravel project focusing on API integrations, real-time background queues, and automated data pipelines.
                </p>
                <div class="inline-block px-4 py-2 rounded bg-white/5 border border-white/10 text-slate-400 font-mono text-xs">
                    PROJECT_003 // COMING SOON
                </div>
            </div>
        </div>

    </div>
</section>
