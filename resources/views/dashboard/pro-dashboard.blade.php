<x-layout>
    <div class="max-w-[800px] bg-gray-50 mx-auto">
        <div class="min-h-screen flex flex-col justify-center items-center pt-6">
            <div class="text-[8px] text-black mb-1">
                Business
            </div>
            <h1 class="text-black font-extrabold text-[56px] leading-[56px] text-center max-w-[320px] sm:max-w-none">
                BE PART OF
                <br />
                T.PRO
            </h1>
            <div class="mt-10 max-w-[320px] sm:max-w-none">
                <img alt="Three 3D cubes with T. branding, two black cubes and one white and gray cube, arranged in a triangular formation on a light gray background" class="mx-auto" height="320" src="https://storage.googleapis.com/a1aa/image/976f88ea-4181-473f-5a18-ec105e100f9d.jpg" width="320" />
            </div>
            <div class="mx-auto px-6 py-16 w-full">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-10 md:gap-0 mb-20">
                    <div class="md:w-1/2">
                        <p class="text-[9px] text-[#4a4a4a] font-normal mb-1">Professional Plans</p>
                        <h2 class="font-semibold text-[20px] leading-[26px] max-w-[320px]">
                            A necessary investment <br />
                            for your studio or your <br />
                            personal brand.
                        </h2>
                    </div>
                    <div class="md:w-1/3 text-[11px] leading-[14px] text-[#1a1a1a]">
                        <p>
                            Awwwards is the ideal showcase for your business or personal brand, a trusted directory where millions of users visit every year, looking for professionals to make their digital vision become a reality.
                        </p>
                        <p class="text-[#7a7a7a] mt-3">
                            Your presence in our Directory will get you unparalleled visibility, recognition and leads for your business.
                        </p>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-6 text-[9px] text-[#4a4a4a]">
                    <p>Find the best plan for you or your agency</p>
                    <div class="flex items-center space-x-2">
                        <span class="font-semibold">Billed monthly</span>
                        <label for="toggle" class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" id="toggle" class="sr-only peer" />
                            <div class="w-9 h-5 bg-gray-300 rounded-full peer peer-focus:ring-2 peer-focus:ring-[#ff4c00] peer-checked:bg-[#ff4c00] transition-colors"></div>
                            <div class="absolute left-[2px] top-[2px] bg-white w-4 h-4 rounded-full shadow-md peer-checked:translate-x-[18px] transition-transform"></div>
                        </label>
                        <span class="font-semibold">Billed annually</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center w-full">
                    <!-- Basic Plan -->
                    <div class="bg-[#1a1a1a] text-white rounded-md p-6 w-full max-w-[250px] flex flex-col justify-between mx-auto sm:mx-0">
                        <div>
                            <h3 class="font-semibold text-[11px] mb-1">BASIC Plan</h3>
                            <p class="text-[8px] text-[#b3b3b3] mb-6 leading-[10px]">
                                Ideal for freelancers, independent professionals and entrepreneurs.
                            </p>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[18px] font-extrabold">$15</span>
                            <span class="text-[9px] font-normal">/month</span>
                        </div>
                        <button class="w-full border border-white rounded text-[9px] py-1 hover:bg-white hover:text-[#1a1a1a] transition">
                            Select Basic
                        </button>
                    </div>

                    <!-- Professional Plan -->
                    <div class="bg-[#1a1a1a] text-white rounded-md p-6 w-full max-w-[320px] flex flex-col justify-between mx-auto sm:mx-0">
                        <div>
                            <span class="text-[7px] font-semibold text-[#ff4c00] border border-[#ff4c00] px-1 rounded mb-2 inline-block">RECOMMENDED</span>
                            <h3 class="font-semibold text-[11px] mb-1">PROFESSIONAL Plan</h3>
                            <p class="text-[8px] text-[#b3b3b3] mb-6 leading-[10px]">
                                The gold standard investment for all agencies and studios.
                            </p>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[18px] font-extrabold">$26</span>
                            <span class="text-[9px] font-normal">/month</span>
                        </div>
                        <button class="w-full border border-white rounded text-[9px] py-1 hover:bg-white hover:text-[#1a1a1a] transition">
                            Select Professional
                        </button>
                    </div>

                    <!-- International Plan -->
                    <div class="bg-white text-black rounded-md p-6 w-full max-w-[250px] flex flex-col justify-between mx-auto sm:mx-0">
                        <div>
                            <h3 class="font-semibold text-[11px] mb-1">INTERNATIONAL Plan</h3>
                            <p class="text-[7px] text-[#7a7a7a] mb-6 leading-[9px]">
                                The crème de la crème - high impact visibility for bold industry leaders.
                            </p>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[18px] font-extrabold">$555</span>
                            <span class="text-[9px] font-normal">/month</span>
                        </div>
                        <button class="w-full border border-black rounded text-[9px] py-1 hover:bg-black hover:text-white transition">
                            Select International
                        </button>
                    </div>
                </div>

                <div class="mt-10 text-center text-[8px] text-[#4a4a4a]">
                    Want more info about our plans?
                    <a href="#" class="inline-flex items-center text-black font-semibold underline ml-1">Compare Plans <i class="fas fa-arrow-right ml-1 text-[8px]"></i></a>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>