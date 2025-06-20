<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->name }} | BelajarDirumahAja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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
        .badge-scroll-container {
            scrollbar-width: thin;
            scrollbar-color: #4b5563 #1e1e1e;
        }
        .badge-scroll-container::-webkit-scrollbar {
            height: 6px;
        }
        .badge-scroll-container::-webkit-scrollbar-track {
            background: #1e1e1e;
        }
        .badge-scroll-container::-webkit-scrollbar-thumb {
            background-color: #4b5563;
            border-radius: 3px;
        }
        .lesson-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .lesson-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        .comment-replies {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        .show-replies .comment-replies {
            max-height: 2000px;
        }
        .smooth-expand {
            transition: height 0.5s ease;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <img 
                    src="{{ $course->image_link }}" 
                    alt="{{ $course->name }}" 
                    class="w-full h-96 object-cover rounded-xl"
                >
                
                <h1 class="text-3xl md:text-4xl font-bold mt-6">{{ $course->name }}</h1>
                
                <div class="flex flex-wrap items-center justify-between mt-4">
                    <div class="flex items-center">
                        <a href="{{ route('users.show', $course->user->slug) }}" class="flex items-center group">
                            <img 
                                src="{{ $course->user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                                alt="{{ $course->user->display_name }}" 
                                class="w-10 h-10 rounded-full"
                            >
                            <span class="ml-3 text-lg group-hover:text-indigo-400 transition">{{ $course->user->display_name }}</span>
                        </a>
                        <span class="ml-4 text-gray-500">{{ $course->created_at->diffForHumans() }}</span>
                    </div>
                    
                    <div class="flex space-x-3 mt-4 sm:mt-0">
                        @if(auth()->check() && (auth()->user()->id == $course->user_id || auth()->user()->isAdmin()))
                            <a 
                                href="{{ route('courses.edit', $course->slug) }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-indigo-600 text-indigo-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-edit mr-2"></i> Edit Course
                            </a>
                        @endif
                        
                        @if(auth()->check() && auth()->user()->id != $course->user_id)
                            @if($course->is_enrolled)
                                <button 
                                    class="px-4 py-2 bg-gray-600 text-gray-300 rounded-lg flex items-center cursor-not-allowed"
                                    disabled
                                >
                                    <i class="fas fa-check-circle mr-2"></i> Enrolled
                                </button>
                            @else
                                <form action="{{ route('courses.enroll', $course->slug) }}" method="POST">
                                    @csrf
                                    <button 
                                        type="submit"
                                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition flex items-center"
                                    >
                                        <i class="fas fa-user-plus mr-2"></i> Enroll
                                    </button>
                                </form>
                            @endif
                            
                            <a 
                                href="{{ route('reports.create') }}?reportable_type={{ urlencode(get_class($course)) }}&reportable_id={{ $course->id }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-red-600 text-red-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-flag mr-2"></i> Report
                            </a>
                        @endif
                    </div>
                </div>
                
                <div class="mt-6 bg-dark-800 rounded-xl p-6">
                    <h2 class="text-xl font-bold mb-4">Description</h2>
                    <p class="text-gray-300">{{ $course->description }}</p>
                </div>
                
                <div class="mt-8">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Badges</h2>
                        @if(auth()->check() && (auth()->user()->id == $course->user_id || auth()->user()->isAdmin()))
                            <a 
                                href="{{ route('badges.create', $course->slug) }}" 
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg flex items-center"
                            >
                                <i class="fas fa-plus mr-2"></i> Add Badge
                            </a>
                        @endif
                    </div>
                    
                    <div class="badge-scroll-container flex overflow-x-auto pb-4">
                        <div class="flex space-x-4 min-w-max">
                            @foreach($course->badges as $badge)
                            <div class="relative group">
                                <div class="w-20 h-20 flex items-center justify-center bg-dark-700 rounded-lg p-2">
                                    <img 
                                        src="{{ $badge->image_link }}" 
                                        alt="{{ $badge->name }}" 
                                        class="w-full h-full object-contain"
                                    >
                                </div>
                                <div class="absolute inset-0 bg-black bg-opacity-70 rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                                    @if(auth()->check() && auth()->user()->badges->contains($badge))
                                        <span class="text-xs text-green-400 font-bold">Claimed</span>
                                    @elseif(auth()->check() && (auth()->user()->id == $course->user_id || auth()->user()->isAdmin()))
                                        <a 
                                            href="{{ route('badges.edit', [$course->slug, $badge->id]) }}" 
                                            class="text-indigo-400 hover:text-indigo-300"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    @else
                                        <a 
                                            href="{{ route('badges.claim', [$course->slug, $badge->id]) }}" 
                                            class="text-yellow-400 hover:text-yellow-300"
                                            title="Claim Badge"
                                        >
                                            <i class="fas fa-medal"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 bg-dark-800 rounded-xl p-6">
                    <div class="flex flex-wrap items-center justify-between">
                        <!-- Rating -->
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-lg font-bold mb-2">Rate this course</h3>
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    <form action="{{ route('courses.rate', $course->slug) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="value" value="{{ $i }}">
                                        <button type="submit" class="{{ $course->user_rating >= $i ? 'text-yellow-400' : 'text-gray-500' }} mr-1">
                                            <i class="fas fa-star text-xl"></i>
                                        </button>
                                    </form>
                                @endfor
                                <span class="ml-2 text-gray-400">
                                    {{ number_format($course->students_avg_rating, 1) }} 
                                    ({{ $course->students_count }} ratings)
                                </span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-bold mb-2">What do you think?</h3>
                            <div class="flex space-x-4">
                                <form action="{{ route('courses.vote', $course->slug) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="value" value="1">
                                    <button type="submit" class="flex items-center {{ $course->user_vote == 1 ? 'text-green-500' : 'text-gray-500 hover:text-green-500' }}">
                                        <i class="fas fa-thumbs-up text-xl"></i>
                                        <span class="ml-2">{{ $course->likes_count }}</span>
                                    </button>
                                </form>
                                <form action="{{ route('courses.vote', $course->slug) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="value" value="-1">
                                    <button type="submit" class="flex items-center {{ $course->user_vote == -1 ? 'text-red-500' : 'text-gray-500 hover:text-red-500' }}">
                                        <i class="fas fa-thumbs-down text-xl"></i>
                                        <span class="ml-2">{{ $course->dislikes_count }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8" x-data="{ showAll: false, visibleLessons: 5 }">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Lessons</h2>
                        @if(auth()->check() && (auth()->user()->id == $course->user_id || auth()->user()->isAdmin()))
                            <a 
                                href="{{ route('lessons.create', $course->slug) }}" 
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg flex items-center"
                            >
                                <i class="fas fa-plus mr-2"></i> Add Lesson
                            </a>
                        @endif
                    </div>
                    
                    <div class="space-y-4">
                        @foreach($course->lessons as $index => $lesson)
                        <div 
                            class="lesson-card bg-dark-800 rounded-xl overflow-hidden shadow-lg"
                            x-show="showAll || {{ $index }} < visibleLessons"
                            x-transition
                        >
                            <a href="{{ route('lessons.show', [$course->slug, $lesson->slug]) }}" class="flex">
                                <div class="w-1/3">
                                    <img 
                                        src="{{ $lesson->image_link ?: $course->image_link }}" 
                                        alt="{{ $lesson->name }}" 
                                        class="w-full h-32 object-cover"
                                    >
                                </div>
                                <div class="w-2/3 p-4">
                                    <h3 class="text-lg font-bold mb-1">{{ $lesson->name }}</h3>
                                    <p class="text-gray-400 text-sm line-clamp-2">{{ $lesson->description }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    
                    @if($course->lessons->count() > 5)
                    <div class="mt-6 text-center">
                        <button 
                            x-on:click="showAll = !showAll"
                            class="px-6 py-3 bg-dark-700 hover:bg-dark-600 text-gray-300 rounded-lg transition"
                        >
                            <span x-text="showAll ? 'Show Less' : 'Show More'"></span>
                            <i 
                                class="ml-2 fas" 
                                :class="showAll ? 'fa-chevron-up' : 'fa-chevron-down'"
                            ></i>
                        </button>
                    </div>
                    @endif
                </div>
                
                <div class="mt-12">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Comments</h2>
                        <a 
                            href="{{ route('comments.create') }}?commentable_type={{ urlencode(get_class($course)) }}&commentable_id={{ $course->id }}" 
                            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg flex items-center"
                        >
                            <i class="fas fa-comment mr-2"></i> Add Comment
                        </a>
                    </div>
                    
                    <div class="space-y-6">
                        @foreach($course->comments as $comment)
                        <div class="bg-dark-800 rounded-xl p-4">
                            @include('comments.partial', ['comment' => $comment])
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/3">
                <h2 class="text-xl font-bold mb-4">Related Courses</h2>
                <div class="space-y-4">
                    @foreach($relatedCourses as $related)
                    <a href="{{ route('courses.show', $related->slug) }}" class="block">
                        <div class="bg-dark-800 rounded-xl overflow-hidden shadow-lg flex">
                            <div class="w-1/3">
                                <img 
                                    src="{{ $related->image_link }}" 
                                    alt="{{ $related->name }}" 
                                    class="w-full h-24 object-cover"
                                >
                            </div>
                            <div class="w-2/3 p-3">
                                <h3 class="font-bold line-clamp-2">{{ $related->name }}</h3>
                                <div class="flex items-center mt-2">
                                    <img 
                                        src="{{ $related->user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                                        alt="{{ $related->user->display_name }}" 
                                        class="w-6 h-6 rounded-full"
                                    >
                                    <span class="ml-2 text-xs text-gray-400">{{ $related->user->display_name }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</body>
</html>