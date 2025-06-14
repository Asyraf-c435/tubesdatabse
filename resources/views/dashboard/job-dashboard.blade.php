<x-layout>
    <div class="bg-[#f9f9f9] font-sans text-[13px] text-[#222222]">
        <div class="max-w-[1200px] mx-auto px-6 py-10 flex flex-col md:flex-row gap-10">
            <div class="flex flex-col gap-6 w-full md:w-[300px]">
                <div>
                    <h2 class="font-bold text-[14px] mb-3">Jobs</h2>
                    <div class="flex items-center gap-2 text-[11px] font-semibold text-[#222222]">
                        <i class="fas fa-code-branch text-[14px]"></i>
                        <span>My Jobs</span>
                    </div>
                </div>
                <p class="text-[11px] text-[#222222] leading-[1.3]">
                    Post new jobs as well as edit or see the status of your existing jobs on our Jobs Board.
                </p>
                <button
                    class="mt-8 border border-[#222222] rounded-md py-3 text-[13px] font-normal hover:bg-black hover:text-white transition-colors duration-[300ms]"
                    type="button">
                    Post Job
                </button>
            </div>

            <!-- Right panel -->
            <div class="flex-1 overflow-x-auto">
                <nav class="flex gap-6 text-[11px] mb-6 whitespace-nowrap">
                    <a href="/job-dashboard" class="font-semibold border-b border-[#222222] pb-1">Jobs</a>
                </nav>
                <table class="w-full text-[11px] border-collapse border-dotted border-[#222222]/40">
                    <thead>
                        <tr class="font-semibold text-[#222222] border-b border-dotted border-[#222222]/40">
                            <th class="py-2 text-left pl-1">Name</th>
                            <th class="py-2 text-left">Date</th>
                            <th class="py-2 text-left">Ref. No.</th>
                            <th class="py-2 text-left">Status</th>
                            <th class="py-2 text-left pr-1">Update info</th>
                        </tr>
                    </thead>
                    <tbody class="text-[#222222]/70">
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">Website Redesign</td>
                            <td class="py-2">2024-05-01</td>
                            <td class="py-2">REF12345</td>
                            <td class="py-2">Under Review</td>
                            <td class="py-2 pr-1">No updates</td>
                        </tr>
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">E-commerce Platform</td>
                            <td class="py-2">2024-04-20</td>
                            <td class="py-2">REF12346</td>
                            <td class="py-2">Published</td>
                            <td class="py-2 pr-1">Certificate available</td>
                        </tr>
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">Portfolio Site</td>
                            <td class="py-2">2024-04-15</td>
                            <td class="py-2">REF12347</td>
                            <td class="py-2">Draft</td>
                            <td class="py-2 pr-1">Edit images</td>
                        </tr>
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">Blog Platform</td>
                            <td class="py-2">2024-04-10</td>
                            <td class="py-2">REF12348</td>
                            <td class="py-2">Rejected</td>
                            <td class="py-2 pr-1">Resubmit</td>
                        </tr>
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">Marketing Site</td>
                            <td class="py-2">2024-03-30</td>
                            <td class="py-2">REF12349</td>
                            <td class="py-2">Published</td>
                            <td class="py-2 pr-1">Certificate available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>