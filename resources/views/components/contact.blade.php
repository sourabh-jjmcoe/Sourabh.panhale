<section id="contact" class="py-24 border-b border-white/10 relative bg-[#080A0D]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start reveal-on-scroll">
            
            <!-- Left Editorial Text (Col 1-5) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center gap-2.5 text-xs font-mono text-[#00F0FF] tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
                    <span>08 / INITIATE CONTACT</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    Have a problem <span class="text-[#00F0FF]">worth building</span>?
                </h2>

                <p class="text-slate-300 text-base sm:text-lg font-normal leading-relaxed">
                    Let's turn a good idea into something useful. I am open for full-time opportunities, high-impact projects, and technical collaborations.
                </p>

                <div class="pt-6 space-y-4 font-mono text-sm">
                    <div class="flex items-center gap-3 text-slate-300">
                        <span class="w-2 h-2 rounded-full bg-[#00F0FF] pulse-glow"></span>
                        <span class="text-slate-400">EMAIL:</span>
                        <a href="mailto:sourabh.panhale.dev@gmail.com" class="text-white hover:text-[#00F0FF] transition-colors underline decoration-slate-600 hover:decoration-[#00F0FF] underline-offset-4">sourabh.panhale.dev@gmail.com</a>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span class="text-slate-400">LOCATION:</span>
                        <span>Pune, Maharashtra, India</span>
                    </div>
                </div>

                <div class="flex items-center space-x-6 pt-4 text-xs font-mono text-slate-400">
                    <a href="https://github.com/sourabh-panhale" target="_blank" rel="noopener noreferrer" class="hover:text-[#00F0FF] transition-colors flex items-center gap-1">
                        <span>GITHUB</span>
                        <span class="text-slate-500">↗</span>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-[#00F0FF] transition-colors flex items-center gap-1">
                        <span>LINKEDIN</span>
                        <span class="text-slate-500">↗</span>
                    </a>
                </div>
            </div>

            <!-- Right Interactive Contact Form (Col 6-12) -->
            <div class="lg:col-span-7">
                <div class="tech-card p-8 sm:p-10 rounded-2xl border border-white/15 bg-[#0C0E12] shadow-2xl relative">
                    
                    <div class="flex items-center justify-between pb-6 mb-6 border-b border-white/10 text-xs font-mono">
                        <span class="text-slate-400">TRANSMISSION_FORM // FRONTEND</span>
                        <span class="text-[#00F0FF]">DIRECT MESSAGE</span>
                    </div>

                    <form id="contact-form" class="space-y-6">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-mono text-slate-400 uppercase tracking-wider mb-2">YOUR NAME *</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required 
                                       placeholder="e.g. Alex Morgan"
                                       class="w-full px-4 py-3.5 bg-[#060709] border border-white/15 rounded-lg text-slate-200 font-sans text-sm focus:border-[#00F0FF] focus:outline-none transition-colors" />
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-mono text-slate-400 uppercase tracking-wider mb-2">EMAIL ADDRESS *</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required 
                                       placeholder="alex@company.com"
                                       class="w-full px-4 py-3.5 bg-[#060709] border border-white/15 rounded-lg text-slate-200 font-sans text-sm focus:border-[#00F0FF] focus:outline-none transition-colors" />
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-mono text-slate-400 uppercase tracking-wider mb-2">SUBJECT / INQUIRY TYPE</label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   placeholder="e.g. Laravel Developer Opportunity / Project Inquiry"
                                   class="w-full px-4 py-3.5 bg-[#060709] border border-white/15 rounded-lg text-slate-200 font-sans text-sm focus:border-[#00F0FF] focus:outline-none transition-colors" />
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-mono text-slate-400 uppercase tracking-wider mb-2">MESSAGE *</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required 
                                      placeholder="Tell me about your project requirements or team role..."
                                      class="w-full px-4 py-3.5 bg-[#060709] border border-white/15 rounded-lg text-slate-200 font-sans text-sm focus:border-[#00F0FF] focus:outline-none transition-colors resize-none"></textarea>
                        </div>

                        <div id="form-status-msg" class="hidden p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono"></div>

                        <button type="submit" 
                                data-magnetic
                                class="w-full py-4 bg-[#00F0FF] text-black font-mono font-bold text-xs uppercase tracking-widest rounded-lg border border-[#00F0FF] hover:bg-[#00F0FF]/90 transition-all duration-200 flex items-center justify-center gap-2">
                            <span>TRANSMIT MESSAGE</span>
                            <span>→</span>
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>
