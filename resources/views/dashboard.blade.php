<x-layout>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <p class="text-xs text-gray-500 mb-1">Welcome</p>
            <h1 class="text-lg font-semibold mb-8">My Account</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <section class="space-y-2 max-w-xs">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user-circle text-sm text-gray-600"></i>
                        <h2 class="font-semibold text-sm">User Dashboard</h2>
                    </div>
                    <p class="text-xs text-gray-600 max-w-[280px]">
                        View and edit information related to your profile, submissions, job adverts, courses, subscriptions, orders, billing, and access exclusive content.
                    </p>
                </section>

                <a href="/profile-settings" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-user text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Profile &amp; Directory</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Edit your profile and directory information, and upload images to your Showcase Gallery.
                    </p>
                </a>

                <a href="/submission" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clipboard-check text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Submissions</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Check the status of your submissions, edit or add images before approval, or download certificates of your awarded sites.
                    </p>
                </a>

                <a href="job-dashboard" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-briefcase text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Jobs</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Post new jobs, or view and edit your existing job adverts posted on the Jobs Board.
                    </p>
                </a>

                <a href="/course" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-graduation-cap text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Academy</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Access and watch all the courses, masterclasses and workshops you have bought from awwwards academy.
                    </p>
                </a>

                <a href="/pro" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-chart-line text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Pro Subscription</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Become a Pro member and gain visibility by appearing in the Directory, get discounts on submissions and jobs, access exclusive Pro content and many more benefits.
                    </p>
                </a>

                <a href="/market-tubes" class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-th-large text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Awwward Market</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Sell your physical and digital products in our ecommerce marketplace for digital creatives, visited by our 5 million-strong community.
                    </p>
                </a>

                <section class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clipboard-list text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Payments &amp; Billing</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        View your purchase history, edit your billing information, manage your saved payment methods, and download your invoices.
                    </p>
                </section>

                <section class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-lock text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Exclusive Content</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Pro members can view exclusive content such as conference talks, ebooks, and other resources and materials.
                    </p>
                </section>

                <a class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-file-alt text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">FAQs</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        Find the answers to frequently asked questions about the submission process, directory, pro plans, courses, jobs or any other awwwards products and services.
                    </p>
                </a>

                <section class="bg-white rounded-md p-5 max-w-xs hover-animate">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-envelope text-sm text-gray-700"></i>
                        <h3 class="font-semibold text-xs">Contact Us</h3>
                    </div>
                    <p class="text-[9px] text-gray-600 leading-tight">
                        If you have any questions that aren't answered in the FAQs section, please contact us on our customer support form.
                    </p>
                </section>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>