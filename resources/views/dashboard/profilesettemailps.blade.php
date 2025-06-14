<x-layout>
    <link rel="stylesheet" href="{{ asset('../css/dashboard/profilesettemailps.css') }}">
    <div class="bg-[#f8f8f8] text-[#1a1a1a] min-h-screen">
        <div class="max-w-[1100px] mx-auto px-4 py-6">
             <h1 class="font-bold text-[13px] mb-2 text-center">Profile &amp; Directory</h1>
                <nav class="flex justify-center space-x-6 text-[10px] text-[#9ca3af] mb-4">
                    <a href="/profile-settings" class="opacity-40 cursor-default select-none ">Public Profile</a>
                    <a href="/change-data" class="text-[#1a1a1a] border-b border-black pb-[2px]">Personal Info</a>
                </nav>
            <!-- Header and breadcrumb -->
            <div class="flex items-center gap-2 text-[11px] font-semibold text-[#1a1a1a] mb-6">
                <i class="fas fa-globe-americas text-[12px]"></i>
                <span>Profile & Directory</span>
            </div>

            <!-- Change password section -->
            <form class="flex flex-col sm:flex-row sm:items-center gap-4 mb-10">
                <div class="w-full sm:w-1/6 text-[13px] font-semibold">Change password</div>
                <div class="flex flex-col sm:flex-row sm:gap-6 w-full sm:w-4/6">
                    <div class="flex flex-col w-full">
                        <label class="text-[8px] text-[#999999] font-semibold mb-1 uppercase" for="new-password">New Password (*)</label>
                        <input
                            id="new-password"
                            type="password"
                            placeholder="New Password"
                            class="text-[10px] bg-white border border-[#eaeaea] rounded h-8 px-2 placeholder-[#eaeaea] focus:outline-none" />
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-[8px] text-[#999999] font-semibold mb-1 uppercase" for="confirm-password">Confirm Password (*)</label>
                        <input
                            id="confirm-password"
                            type="password"
                            placeholder="Confirm new password"
                            class="text-[10px] bg-white border border-[#eaeaea] rounded h-8 px-2 placeholder-[#eaeaea] focus:outline-none" />
                    </div>
                </div>
                <div class="w-full sm:w-1/6 flex justify-start sm:justify-center">
                    <button
                        type="submit"
                        class="bg-[#1a1a1a] text-[10px] text-white rounded h-10 w-[140px]">
                        Update password
                    </button>
                </div>
            </form>

            <hr class="border-t border-[#d1d1d1] mb-10" />

            <!-- Change email section -->
            <form class="flex flex-col sm:flex-row sm:items-start gap-4 mb-10">
                <div class="w-full sm:w-1/6 text-[13px] font-semibold">Change email</div>
                <div class="flex flex-col sm:flex-col sm:gap-6 w-full sm:w-4/6">
                    <div class="mb-6 w-full">
                        <label class="text-[8px] text-[#999999] font-semibold mb-1 uppercase block" for="current-email">Current E-mail</label>
                        <input
                            id="current-email"
                            type="email"
                            placeholder="Email"
                            class="text-[10px] bg-white border border-[#d1d1d1] rounded h-8 px-2 text-[#1a1a1a] focus:outline-none w-full" />
                    </div>
                    <div class="flex flex-col sm:flex-row sm:gap-6 w-full">
                        <div class="flex flex-col w-full">
                            <label class="text-[8px] text-[#999999] font-semibold mb-1 uppercase" for="new-email">New E-mail (*)</label>
                            <input
                                id="new-email"
                                type="email"
                                placeholder="New E-mail"
                                class="text-[10px] bg-white border border-[#eaeaea] rounded h-8 px-2 placeholder-[#eaeaea] focus:outline-none" />
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[8px] text-[#999999] font-semibold mb-1 uppercase" for="confirm-email">Confirm E-mail (*)</label>
                            <input
                                id="confirm-email"
                                type="email"
                                placeholder="Confirm New E-mail"
                                class="text-[10px] bg-white border border-[#eaeaea] rounded h-8 px-2 placeholder-[#eaeaea] focus:outline-none" />
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/6 flex justify-start sm:justify-center -mt-6 sm:mt-0">
                    <button
                        type="submit"
                        class="bg-[#1a1a1a] text-[10px] text-white rounded h-10 w-[140px]">
                        Update email
                    </button>
                </div>
            </form>

            <hr class="border-t border-[#d1d1d1] mb-10" />

            <!-- Delete account section -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between text-[10px]">
                <div class="mb-6 sm:mb-0 max-w-[60%]">
                    <span class="text-[#f15a24] font-semibold">Unhappy?</span>
                    <p class="text-[#666666]">
                        We'll be sad to see you leave, but if you want to permanently delete your account and all its data, here's the place.
                    </p>
                </div>
                <div class="flex items-center gap-2 justify-end max-w-[40%]">
                    <span class="text-[#666666]">Want to delete your account?</span>
                    <i class="fas fa-trash-alt text-[#666666]"></i>
                    <button class="font-semibold underline-anim text-[10px] text-[#1a1a1a]">
                        Delete Account
                    </button>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>