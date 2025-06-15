<x-layout>
    <link rel="stylesheet" href="{{ asset('../css/dashboard/profile-settings.css') }}">
    <body class="bg-[#f7f7f7] font-sans text-[11px] text-[#1a1a1a]">
        <div class="max-w-[1100px] mx-auto px-4 py-6">
            <form method="POST" action="{{ url('/profile-settings') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <header class="mb-8">
                    @if(session('success'))
                        <div style="color: green;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h1 class="font-bold text-[13px] mb-2 text-center">Profile &amp; Directory</h1>
                    <nav class="flex justify-center space-x-6 text-[10px] text-[#9ca3af] mb-4">
                        <a href="/profile-settings" class="text-[#1a1a1a] border-b border-black pb-[2px]">Public Profile</a>
                        <a href="/change-data" class="opacity-40 cursor-default select-none">Personal Info</a>
                    </nav>
                    <div class="flex items-center space-x-1 font-semibold text-[11px]">
                        <i class="fas fa-globe-americas text-[12px]"></i>
                        <span>Profile</span>
                    </div>
                </header>

                <div class="flex flex-wrap gap-x-8">
                    <section class="w-full sm:w-[18%]">
                        <h2 class="font-bold text-[11px] mb-1">Your profile</h2>
                        <p class="text-[9px] text-[#6b7280]">Add more information about you here.</p>
                    </section>

                    <section class="w-full sm:w-[55%] space-y-4">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-[8px] text-[#6b7280]">
                            <label for="username" class="uppercase">
                                Username (*)
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </label>
                            <label for="displayname" class="uppercase">
                                Display Name (*)
                            </label>

                            <input
                                id="username"
                                type="text"
                                placeholder="https://awwwards.com/"
                                name="name"
                                value="{{ auth()->user()->name }}"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />
                            <input
                                id="displayname"
                                type="text"
                                name="display_name"
                                value="{{ auth()->user()->display_name }}"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />

                            <!-- <label for="url" class="uppercase mt-2">URL</label>
                            <label for="whoareyou" class="uppercase mt-2">Who are you? (*)</label>

                            <input
                                id="url"
                                type="text"
                                placeholder="URL of your business"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />
                            <select
                                id="whoareyou"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out">
                                <option>Individual / Freelance</option>
                            </select> -->

                            <label for="country" class="uppercase mt-2 col-span-2">Country</label>
                            <select
                                id="country"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] col-span-2 transition-colors duration-300 ease-in-out">
                                <option>Choose a country</option>
                            </select>

                            <label for="description" class="uppercase mt-2 col-span-2">Description</label>
                            <textarea
                                id="description"
                                rows="4"
                                name="description"
                                class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] col-span-2 resize-none transition-colors duration-300 ease-in-out">{{ auth()->user()->description }}</textarea>
                        </div>

                        <div class="mt-2">
                            <label for="avatar-upload" class="uppercase text-[8px] text-[#6b7280] mb-1 block cursor-pointer">Avatar</label>
                            <input type="file" id="avatar-upload" class="hidden" accept="image/*" name="image" />
                            <label
                                for="avatar-upload"
                                class="w-[100px] h-[100px] bg-white border border-[#f3f4f6] rounded flex flex-col items-center justify-center text-[8px] text-center text-[#6b7280] cursor-pointer select-none overflow-hidden bg-center bg-cover"
                                tabindex="0"
                                id="avatar-preview"
                                role="button"
                                aria-label="Upload avatar image">
                                <i class="fas fa-cloud-upload-alt mb-1"></i>
                                <span>Drag and drop your image or <span class="underline">browse</span> to choose your file.</span>
                                <strong class="mt-1 block">Recommended size: 400x400px. 400KB max.</strong>
                            </label>
                        </div>

                        <p class="text-[7px] text-[#6b7280] mt-4">
                            Awwwards may keep me informed with personalized emails about products and services. See our
                            <strong>Privacy Policy</strong> for more details.
                        </p>
                    </section>

                    <section class="w-full sm:w-[20%]">
                        <button
                            class="save-btn w-full bg-[#1a1a1a] text-white text-[11px] font-normal rounded py-3 mb-2 transition duration-300 ease-in-out transform hover:bg-[#111111] hover:scale-105"
                            type="submit">
                            Save Changes
                        </button>
                        <p class="text-[8px] text-[#6b7280]">
                            If you have made any edits, remember to save before you leave this page.
                        </p>
                    </section>
                </div>

                <section class="flex flex-wrap gap-x-8 mt-16">
                    <aside class="w-full sm:w-[18%]">
                        <h3 class="font-bold text-[11px] mb-1">Social Media Links</h3>
                        <p class="text-[9px] text-[#6b7280]">Improve visibility and help people contact you by adding your social media links here.</p>
                    </aside>

                    <div class="w-full sm:w-[55%] grid grid-cols-2 gap-x-4 gap-y-4 text-[8px] text-[#6b7280]">
                        <label for="twitter" class="uppercase">Twitter</label>
                        <label for="facebook" class="uppercase">Facebook</label>
                        <input
                            id="twitter"
                            name="twitter"
                            type="text"
                            value="{{ auth()->user()->twitter }}"
                            placeholder="https://twitter.com/"
                            class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />
                        <input
                            id="facebook"
                            name="facebook"
                            type="text"
                            value="{{ auth()->user()->facebook }}"
                            placeholder="https://www.facebook.com/"
                            class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />

                        <label for="linkedin" class="uppercase">LinkedIn</label>
                        <label for="instagram" class="uppercase">Instagram</label>
                        <input
                            id="linkedin"
                            name="linkedin"
                            type="text"
                            value="{{ auth()->user()->linkedin }}"
                            placeholder="https://linkedin.com/"
                            class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />
                        <input
                            id="instagram"
                            name="instagram"
                            type="text"
                            value="{{ auth()->user()->instagram }}"
                            placeholder="https://instagram.com/"
                            class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />

                        <label for="tiktok" class="uppercase col-span-2">TikTok</label>
                        <input
                            id="tiktok"
                            name="tiktok"
                            type="text"
                            value="{{ auth()->user()->tiktok }}"
                            placeholder="https://tiktok.com/@"
                            class="bg-white border border-[#f3f4f6] rounded px-2 py-1 text-[9px] text-[#1a1a1a] transition-colors duration-300 ease-in-out" />
                    </div>
                </section>
            </form>
        </div>
    </body>
    <x-footer></x-footer>
</x-layout>

<script>
    document.getElementById('avatar-upload').addEventListener('change', function(event) {
        const input = event.target;
        const label = document.getElementById('avatar-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                label.style.backgroundImage = `url(${e.target.result})`;
                label.innerHTML = '';
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>