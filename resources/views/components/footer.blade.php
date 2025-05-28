<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- FOOTER SECTION -->
     <footer class="bg-gray-50  text-black mt-[12rem]">
        <div class="max-w-[1420px] mx-auto px-6 py-8">
            <h2 class="font-bold text-base mb-8">Tubes .</h2>
            <div class="flex flex-wrap justify-between items-start">
                <div class="w-1/2 sm:w-auto mb-6 sm:mb-0">
                    <ul class="space-y-2 text-[10px] font-semibold leading-4 ">
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Websites</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Collections</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Elements</a></li>
                    </ul>
                </div>
                <div class="w-1/6 sm:w-auto mb-6 sm:mb-0">
                    <ul class="space-y-2 text-[10px] font-semibold leading-4">
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Academy</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Jobs</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Market</a></li>
                    </ul>
                </div>
                <div class="w-1/6 sm:w-auto mb-6 sm:mb-0">
                    <ul class="space-y-2 text-[10px] font-semibold leading-4">
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Directory</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Conferences</a></li>
                    </ul>
                </div>
                <div class="w-1/6 sm:w-auto mb-6 sm:mb-0">
                    <ul class="space-y-2 text-[10px] font-semibold leading-4">
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">FAQs</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">About Us</a></li>
                        <li class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-auto bg-[#e6e6e6] rounded-md px-4 py-3 text-[10px] font-normal flex items-center gap-2">
                    <span>Next Conferences</span>
                    <i class="far fa-calendar-alt text-[12px]"></i>
                    <span class="font-semibold">Berlin, Mumbai &amp; Tokyo</span>
                </div>
            </div>
            <hr class="border-t border-dotted border-gray-400 my-6" />
            <div class="flex flex-wrap justify-between text-[8px] font-normal">
                <div class="flex space-x-4">
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Cookies Policy</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Legal Terms</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Privacy Policy</a></span>
                </div>
                <div class="flex space-x-3 items-center">
                    <span class="font-semibold">Connect:</span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Instagram</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">LinkedIn</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Twitter</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Facebook</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">YouTube</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">TikTok</a></span>
                    <span class="text-gray-600 hover:text-black transition-colors duration-300 ease-in-out"><a href="">Pinterest</a></span>
                </div>
            </div>
        </div>
        {{ $slot }}
    </footer>
</body>
</html>