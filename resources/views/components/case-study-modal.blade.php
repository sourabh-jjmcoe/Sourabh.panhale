<!-- Case Study Interactive Modal -->
<div id="case-study-modal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black/80 backdrop-blur-md flex items-center justify-center p-4 sm:p-6 lg:p-8" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    
    <div id="modal-backdrop" class="fixed inset-0"></div>

    <div class="relative bg-[#0C0E12] border border-white/10 rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl z-10 p-6 sm:p-10 text-left">
        
        <!-- Top Close Bar -->
        <div class="flex items-center justify-between pb-6 mb-6 border-b border-white/10">
            <div class="flex items-center gap-2 text-xs font-mono text-[#00F0FF]">
                <span class="w-2 h-2 rounded-full bg-[#00F0FF]"></span>
                <span>DEEP DIVE CASE STUDY</span>
            </div>
            <button id="modal-close-btn" 
                    type="button" 
                    class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/10 transition-colors font-mono text-xs flex items-center gap-1.5 focus:outline-none"
                    aria-label="Close modal">
                <span>[ESC] CLOSE</span>
                <span class="text-lg leading-none">&times;</span>
            </button>
        </div>

        <!-- Header Titles -->
        <div class="mb-8">
            <h2 id="modal-title" class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-2">
                Project Title Placeholder
            </h2>
            <p id="modal-subtitle" class="text-slate-400 text-sm font-mono">
                Project Subtitle Placeholder
            </p>

            <!-- Tech Stack Badges -->
            <div id="modal-stack" class="flex flex-wrap gap-2 mt-4"></div>
        </div>

        <!-- Project Hero Screenshot -->
        <div class="rounded-xl overflow-hidden border border-white/10 mb-8 bg-[#060709]">
            <img id="modal-image" src="" alt="Project Case Study Screenshot" class="w-full h-auto object-cover max-h-[400px]" />
        </div>

        <!-- Overview & Problem / Solution Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div class="p-6 rounded-xl border border-white/10 bg-[#07080A]">
                <div class="text-xs font-mono text-[#00F0FF] mb-2">01 // THE PROBLEM</div>
                <p id="modal-problem" class="text-slate-300 text-sm leading-relaxed"></p>
            </div>

            <div class="p-6 rounded-xl border border-white/10 bg-[#07080A]">
                <div class="text-xs font-mono text-emerald-400 mb-2">02 // THE SOLUTION</div>
                <p id="modal-solution" class="text-slate-300 text-sm leading-relaxed"></p>
            </div>
        </div>

        <!-- System Overview -->
        <div class="mb-8">
            <h3 class="text-lg font-bold text-white mb-3">System Overview</h3>
            <p id="modal-overview" class="text-slate-300 text-sm leading-relaxed font-sans"></p>
        </div>

        <!-- Key Features List -->
        <div class="mb-8">
            <h3 class="text-lg font-bold text-white mb-3">Key Features & Modules</h3>
            <ul id="modal-features" class="space-y-2.5"></ul>
        </div>

        <!-- Architectural Decisions -->
        <div class="mb-8">
            <h3 class="text-lg font-bold text-white mb-3">Technical & Architectural Decisions</h3>
            <ul id="modal-decisions" class="space-y-2.5"></ul>
        </div>

        <!-- Key Engineering Takeaway -->
        <div class="p-6 rounded-xl border border-white/10 bg-[#07080A] mb-8">
            <div class="text-xs font-mono text-amber-400 mb-2">LESSONS & KEY TAKEAWAYS //</div>
            <p id="modal-learned" class="text-slate-300 text-sm leading-relaxed font-sans"></p>
        </div>

        <!-- Footer Actions -->
        <div class="flex items-center justify-between pt-6 border-t border-white/10 text-xs font-mono">
            <a id="modal-github-btn" href="#" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#00F0FF] text-black font-bold rounded hover:bg-[#00F0FF]/90 transition-all flex items-center gap-2">
                <span>VIEW ON GITHUB</span>
                <span>↗</span>
            </a>
            <span class="text-slate-500">BUILT WITH LARAVEL 12</span>
        </div>

    </div>
</div>
