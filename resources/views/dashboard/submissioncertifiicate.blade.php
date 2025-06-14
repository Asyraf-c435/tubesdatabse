<x-layout>
    <div class="bg-[#f9f9f9] font-sans text-[13px] text-[#222222]">
        <div class="max-w-[1200px] mx-auto px-6 py-10 flex flex-col md:flex-row gap-10">
            <div class="flex flex-col gap-6 w-full md:w-[300px]">
                <div>
                    <h2 class="font-bold text-[14px] mb-3">Submissions</h2>
                    <div class="flex items-center gap-2 text-[11px] font-semibold text-[#222222]">
                        <i class="fas fa-code-branch text-[14px]"></i>
                        <span>My Certificate</span>
                    </div>
                </div>
                <p class="text-[11px] text-[#222222] leading-[1.3]">
                   See the awards your submissions have won, and click on the download button to get PDFs of your certificates.
                </p>
            </div>

            <!-- Right panel -->
            <div class="flex-1 overflow-x-auto">
                <nav class="flex gap-6 text-[11px] mb-6 whitespace-nowrap">
                    <a href="/submission" class="text-[#222222]/70">Submissions</a>
                    <a href="/submission-certificate" class="font-semibold border-b border-[#222222] pb-1  ">Certificates</a>
                    <a href="/submission-ribbons" class="text-[#222222]/70">Ribbons</a>
                </nav>
                <table class="w-full text-[11px] border-collapse border-dotted border-[#222222]/40">
                    <thead>
                        <tr class="font-semibold text-[#222222] border-b border-dotted border-[#222222]/40">
                            <th class="py-2 text-left pl-1">Sites Name</th>
                            <th class="py-2 text-left">Downloads</th>
                        </tr>
                    </thead>
                    <tbody class="text-[#222222]/70">
                        <tr class="border-b border-dotted border-[#222222]/40">
                            <td class="py-2 pl-1">Website Redesign</td>
                            <td><a href="/path/to/your/file.pdf" download class="text-blue-600 hover:underline">Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>