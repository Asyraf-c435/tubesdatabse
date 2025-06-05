<x-layout>
    <div class="bg-gray-50 min-h-screen flex flex-col items-center justify-center p-6">
        <h1 class="font-sans font-extrabold text-black text-3xl mb-6">
            Upload your best work
        </h1>
        <div class="w-full max-w-6xl bg-gray-50">
            <div class="relative">
                <div class="tabs-wrapper">
                    <button
                        class="tab-label active"
                        type="button"
                        aria-current="page">
                        Main Fill
                    </button>
                    <button class="tab-label inactive" type="button">
                        Upload Elements
                    </button>
                </div>
                <div class="tabs-dotted-line"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-12">
                <form class="flex flex-col gap-8 w-full md:w-1/3">
                    <div class="flex flex-col gap-1">
                        <label
                            for="website-name"
                            class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest uppercase">Name of website</label>
                        <input
                            id="website-name"
                            type="text"
                            class="bg-white border border-gray-200 rounded-sm h-8 px-2 text-xs focus:outline-none focus:ring-0 focus:border-gray-300" />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label
                            for="description"
                            class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest uppercase">Description(*)</label>
                        <textarea
                            id="description"
                            rows="4"
                            class="bg-white border border-gray-200 rounded-sm px-2 pt-1 text-xs resize-none focus:outline-none focus:ring-0 focus:border-gray-300"></textarea>
                    </div>

                    <div class="flex flex-col gap-1 max-w-[160px]">
                        <label
                            for="avatar-upload"
                            class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest uppercase">Avatar</label>
                        <label
                            for="avatar-upload"
                            tabindex="0"
                            class="cursor-pointer bg-white border border-gray-200 rounded-sm flex flex-col items-center justify-center text-center text-[9px] text-gray-600 px-2 py-3 focus:outline-none focus:ring-0 focus:border-gray-300">
                            <i class="fas fa-cloud-upload-alt text-lg mb-1"></i>
                            <span>
                                Drag and drop your<br />
                                image or <b>browse</b> to<br />
                                choose your file.
                            </span>
                            <span class="mt-1 font-bold text-[9px] leading-3">
                                Recommended size:<br />
                                400×400px, 400KB max.
                            </span>
                            <input
                                id="avatar-upload"
                                type="file"
                                accept="image/*"
                                class="hidden" />
                        </label>
                    </div>
                </form>
                <div
                    class="bg-white w-full md:w-2/3 aspect-[4/3] flex flex-col justify-center items-center border border-gray-200">
                    <i class="far fa-eye text-gray-400 text-3xl mb-2"></i>
                    <span class="text-xs font-sans text-gray-400 tracking-widest uppercase">
                        Preview
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>