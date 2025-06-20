<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | BelajarDirumahAja</title>
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
    </script>
    <style>
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .star-rating .star {
            color: #4b5563;
        }
        .star-rating .star.active {
            color: #f59e0b;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-4">Explore Courses</h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Discover our comprehensive collection of courses taught by industry experts</p>
            
            <form action="{{ route('courses.index') }}" method="GET" class="mt-10 max-w-2xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search courses..." 
                        value="{{ request('search') }}"
                        class="w-full pl-4 pr-12 py-3 rounded-lg bg-dark-700 border border-dark-600 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                    >
                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <i class="fas fa-search text-gray-400"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
            <div class="course-card bg-dark-800 rounded-xl overflow-hidden shadow-lg">
                <a href="{{ route('courses.show', $course->slug) }}">
                    <img src="{{ $course->image_link }}" alt="{{ $course->name }}" class="w-full h-48 object-cover">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $course->name }}</h3>
                    <p class="text-gray-400 mb-4">{{ \Illuminate\Support\Str::limit($course->description, 100) }}</p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <img src="{{ $course->user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                                 alt="Instructor" class="w-8 h-8 rounded-full">
                            <a href="{{ route('users.show', $course->user->slug) }}" class="ml-2 text-indigo-400 hover:text-indigo-300">
                                {{ $course->user->display_name }}
                            </a>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>{{ $course->created_at->diffForHumans(null, true) }}</span>
                            <span class="mx-1">•</span>
                            <span>{{ $course->lessons_count }} lessons</span>
                        </div>
                    </div>
                    
                    <hr class="border-dark-700 my-4">
                    
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="star-rating flex">
                                @php
                                    $avgRating = $course->students_avg_rating ?: 0;
                                @endphp
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($avgRating))
                                        <i class="fas fa-star text-yellow-400"></i>
                                    @elseif($i == ceil($avgRating) && $avgRating - floor($avgRating) > 0.3)
                                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                                    @else
                                        <i class="far fa-star text-yellow-400"></i>
                                    @endif
                                @endfor
                                <span class="ml-2">{{ number_format($avgRating, 1) }}</span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <form action="{{ route('courses.vote', $course->slug) }}" method="POST">
                                @csrf
                                <input type="hidden" name="value" value="1">
                                <button type="submit" class="flex items-center {{ $course->user_vote == 1 ? 'text-green-500' : 'text-gray-500 hover:text-green-500' }}">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span class="ml-1">{{ $course->likes_count }}</span>
                                </button>
                            </form>
                            <form action="{{ route('courses.vote', $course->slug) }}" method="POST">
                                @csrf
                                <input type="hidden" name="value" value="-1">
                                <button type="submit" class="flex items-center {{ $course->user_vote == -1 ? 'text-red-500' : 'text-gray-500 hover:text-red-500' }}">
                                    <i class="fas fa-thumbs-down"></i>
                                    <span class="ml-1">{{ $course->dislikes_count }}</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    @auth
                    <div class="mt-4">
                        <div class="star-rating flex justify-center">
                            @for($i = 1; $i <= 5; $i++)
                                <form action="{{ route('courses.rate', $course->slug) }}" method="POST" class="mr-1">
                                    @csrf
                                    <input type="hidden" name="value" value="{{ $i }}">
                                    <button type="submit" class="{{ $course->user_rating >= $i ? 'text-yellow-400' : 'text-gray-500' }}">
                                        <i class="fas fa-star"></i>
                                    </button>
                                </form>
                            @endfor
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16">
                <i class="fas fa-book-open text-5xl text-gray-500 mb-4"></i>
                <h3 class="text-2xl font-bold">No courses found</h3>
                <p class="text-gray-500 mt-2">We couldn't find any courses matching your search</p>
            </div>
            @endforelse
        </div>
        
        @if($courses->hasPages())
        <div class="mt-16 flex justify-center">
            {{ $courses->links('pagination::tailwind') }}
        </div>
        @endif
    </main>
</body>
</html>