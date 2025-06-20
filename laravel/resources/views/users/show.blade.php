{{-- resources/views/users/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->display_name }}'s Profile | BelajarDirumahAja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#121212',
                            800: '#1e1e1e',
                            700: '#2d2d2d',
                        }
                    }
                }
            }
        }
        
        function toggleBadges() {
            const hiddenBadges = document.getElementById('hidden-badges');
            const badgeButton = document.getElementById('badge-toggle');
            const badgeIcon = document.getElementById('badge-icon');
            
            if (hiddenBadges.classList.contains('hidden')) {
                hiddenBadges.classList.remove('hidden');
                hiddenBadges.classList.add('grid');
                badgeButton.textContent = 'Show Less Badges';
                badgeIcon.classList.remove('fa-chevron-down');
                badgeIcon.classList.add('fa-chevron-up');
            } else {
                hiddenBadges.classList.add('hidden');
                hiddenBadges.classList.remove('grid');
                badgeButton.textContent = 'Show More Badges';
                badgeIcon.classList.remove('fa-chevron-up');
                badgeIcon.classList.add('fa-chevron-down');
            }
        }
    </script>
    <style>
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .badge-card {
            transition: transform 0.3s ease;
        }
        .badge-card:hover {
            transform: scale(1.1);
        }
        .hidden-badges {
            opacity: 0.5;
            transition: opacity 0.5s ease;
        }
        .show-badges .hidden-badges {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-dark-800 rounded-2xl shadow-lg p-6 mb-12">
            <div class="flex flex-col md:flex-row items-start">
                <div class="flex-shrink-0 mb-4 md:mb-0">
                    <img 
                        src="{{ $user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                        alt="{{ $user->display_name }}" 
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-indigo-500"
                    >
                </div>
                
                <div class="flex-grow md:ml-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold">{{ $user->display_name }}</h1>
                            <p class="text-gray-500 text-lg mt-1">{{ "@$user->name" }}</p>
                        </div>
                        
                        <div class="mt-4 md:mt-0 flex space-x-3">
                            @if(auth()->check() && (auth()->user()->id == $user->id || auth()->user()->isAdmin()))
                            <a 
                                href="{{ route('users.edit', $user->slug) }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-indigo-600 text-indigo-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-cog mr-2"></i>
                                Edit
                            </a>
                            @elseif(auth()->check())
                            <a 
                                href="{{ route('reports.create') }}?reportable_type={{ urlencode(get_class($user)) }}&reportable_id={{ $user->id }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-red-600 text-red-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-flag mr-2"></i>
                                Report
                            </a>
                            @endif
                        </div>
                    </div>
                    
                    @if($user->description)
                    <div class="mt-6">
                        <p class="text-gray-400">{{ $user->description }}</p>
                    </div>
                    @endif
                    
                    <div class="mt-6 flex flex-wrap gap-6">
                        <div class="flex items-center">
                            <div class="p-3 bg-dark-700 rounded-lg mr-3">
                                <i class="fas fa-book text-indigo-500 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">{{ $courses->count() }}</p>
                                <p class="text-gray-500">Courses</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="p-3 bg-dark-700 rounded-lg mr-3">
                                <i class="fas fa-graduation-cap text-indigo-500 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">{{ $user->enrolledCourses->count() }}</p>
                                <p class="text-gray-500">Enrolled</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="p-3 bg-dark-700 rounded-lg mr-3">
                                <i class="fas fa-star text-indigo-500 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">{{ $user->badges->count() }}</p>
                                <p class="text-gray-500">Badges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($user->badges->count() > 0)
        <div class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold">Achievements</h2>
                <span class="text-gray-500">{{ $user->badges->count() }} badges earned</span>
            </div>
            
            <div class="grid grid-cols-5 sm:grid-cols-8 md:grid-cols-10 gap-3 mb-6">
                @foreach($user->badges->take(10) as $badge)
                <div class="badge-card bg-dark-700 rounded-lg p-2 text-center">
                    <img 
                        src="{{ $badge->image_link }}" 
                        alt="{{ $badge->name }}" 
                        class="w-full aspect-square object-contain"
                        title="{{ $badge->name }} ({{ $badge->pivot->obtained_date }})"
                    >
                </div>
                @endforeach
            </div>
            
            @if($user->badges->count() > 10)
            <div id="hidden-badges" class="hidden grid-cols-5 sm:grid-cols-8 md:grid-cols-10 gap-3 mb-6 hidden-badges">
                @foreach($user->badges->slice(10) as $badge)
                <div class="badge-card bg-dark-700 rounded-lg p-2 text-center">
                    <img 
                        src="{{ $badge->image_link }}" 
                        alt="{{ $badge->name }}" 
                        class="w-full aspect-square object-contain"
                        title="{{ $badge->name }} ({{ $badge->pivot->obtained_date->format('M d, Y') }})"
                    >
                </div>
                @endforeach
            </div>
            
            <div class="text-center">
                <button 
                    id="badge-toggle"
                    onclick="toggleBadges()"
                    class="px-4 py-2 bg-dark-800 hover:bg-dark-700 text-indigo-400 rounded-lg transition flex items-center mx-auto"
                >
                    <span>Show More Badges</span>
                    <i id="badge-icon" class="fas fa-chevron-down ml-2"></i>
                </button>
            </div>
            @endif
        </div>
        @endif

        <div>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold">Created Courses</h2>
                @if(auth()->check() && (auth()->user()->id == $user->id || auth()->user()->isAdmin()))
                <a 
                    href="{{ route('courses.create') }}" 
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition flex items-center"
                >
                    <i class="fas fa-plus mr-2"></i>
                    Create Course
                </a>
                @endif
            </div>
            
            @if($courses->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($courses as $course)
                <div class="course-card bg-dark-800 rounded-xl overflow-hidden shadow-lg">
                    <a href="{{ route('courses.show', $course->slug) }}">
                        <img src="{{ $course->image_link }}" alt="{{ $course->name }}" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $course->name }}</h3>
                        <p class="text-gray-400 mb-4">{{ \Illuminate\Support\Str::limit($course->description, 100) }}</p>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <span>{{ $course->created_at->diffForHumans(null, true) }}</span>
                                <span class="mx-1">•</span>
                                <span>{{ $course->lessons_count }} lessons</span>
                            </div>
                        </div>
                        
                        <hr class="border-dark-700 my-4">
                        
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="flex text-yellow-400">
                                    @php
                                        $avgRating = $course->students_avg_rating ?: 0;
                                    @endphp
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($avgRating))
                                            <i class="fas fa-star"></i>
                                        @elseif($i == ceil($avgRating) && $avgRating - floor($avgRating) > 0.3)
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    <span class="ml-2">{{ number_format($avgRating, 1) }}</span>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="flex items-center text-green-500">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span class="ml-1">{{ $course->likes_count }}</span>
                                </div>
                                <div class="flex items-center text-red-500">
                                    <i class="fas fa-thumbs-down"></i>
                                    <span class="ml-1">{{ $course->dislikes_count }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="bg-dark-800 rounded-xl p-16 text-center">
                <i class="fas fa-book-open text-5xl text-gray-600 mb-4"></i>
                <h3 class="text-2xl font-bold mb-2">No Courses Created</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    {{ $user->display_name }} hasn't created any courses yet.
                </p>
            </div>
            @endif
        </div>
    </main>
</body>
</html>