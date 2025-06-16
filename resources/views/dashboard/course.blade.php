<x-layout>
    <div class="bg-[#f9f9f9] font-sans text-[13px] text-[#222222]">
        <div class="max-w-[1200px] mx-auto px-6 py-10 flex flex-col md:flex-row gap-10">
            <div class="flex flex-col gap-6 w-full md:w-[300px]">
                <div>
                    <h2 class="font-bold text-[14px] mb-3">Course</h2>
                    <div class="flex items-center gap-2 text-[11px] font-semibold text-[#222222]">
                        <i class="fas fa-code-branch text-[14px]"></i>
                        <span>My Course</span>
                    </div>
                </div>
                <p class="text-[11px] text-[#222222] leading-[1.3]">
                    View all the courses, masterclasses and workshops you have bought from awwwards academy, and track your learning progress.
                </p>
            </div>

            <!-- Right panel -->
            <div class="flex-1 overflow-x-auto">
                <nav class="flex gap-6 text-[11px] mb-6 whitespace-nowrap">
                    <a href="/submission" class="font-semibold border-b border-[#222222] pb-1">Course</a>
                </nav>

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>