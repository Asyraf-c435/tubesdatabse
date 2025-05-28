 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class="overflow-hidden bg-neutral-100">
    <div class="scrolling-wrapper items-center text-[#1a1a1a] text-sm font-[Inter] font-medium select-none">
        @for ($i = 0; $i < 12; $i++)
            <div class="flex items-center space-x-2 px-4 py-3">
                <span class="font-semibold">The Creative Pass</span>
                <i class="far fa-smile"></i>
                <span>Watch all courses for just $12/month</span>
            </div>
        @endfor
    </div>
    </div>
    {{ $slot }}
 </body>
 </html>
    