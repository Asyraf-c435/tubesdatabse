
<x-layout>
   <div class="p-20 -mb-48">
      <div class="flex items-baseline justify-between">
        <div class="flex items-center space-x-4">
            <img alt="Profile photo" class="w-12 h-12 rounded-full object-cover" 
                src="{{ asset($user->image_link) }}" />
            <span class="text-[18px] font-normal text-black leading-none">
                {{ $user->display_name }}
            </span>
        </div>

         <div>
            <table class="border border-black border-collapse text-center text-[10px] w-[240px] table-fixed">
               <thead>
                    <tr>
                        <th class="border border-black py-1 px-2 font-normal w-1/4">
                            WORKS
                        </th>
                        @if($user->awards()->where('type', 4)->count() > 0)
                            <th class="border border-black py-1 px-2 font-normal w-1/4">
                                SOTY
                            </th>
                        @endif
                        <th class="border border-black py-1 px-2 font-normal w-1/4">
                            SOTM
                        </th>
                        <th class="border border-black py-1 px-2 font-normal w-1/4">
                            SOTD
                        </th>
                        <th class="border border-black py-1 px-2 font-normal w-1/4">
                            HM
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black py-3 px-2 font-bold w-1/4">
                            {{ $user->websites()->count() }}
                        </td>
                        @if($user->awards()->where('type', 4)->count() > 0)
                            <td class="border border-black py-3 px-2 font-bold w-1/4">
                                {{ $user->awards()->where('type', 4)->count() }}
                            </td>
                        @endif
                        <td class="border border-black py-3 px-2 font-bold w-1/4">
                            {{ $user->awards()->where('type', 3)->count() }}
                        </td>
                        <td class="border border-black py-3 px-2 font-bold w-1/4">
                            {{ $user->awards()->where('type', 2)->count() }}
                        </td>
                        <td class="border border-black py-3 px-2 font-bold w-1/4">
                            {{ $user->awards()->where('type', 1)->count() }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
   </div>
</x-layout>