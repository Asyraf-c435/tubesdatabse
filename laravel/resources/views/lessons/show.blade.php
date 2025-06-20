<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lesson->name }} | BelajarDirumahAja</title>
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
        .lesson-content {
            line-height: 1.6;
        }
        .lesson-content h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .lesson-content p {
            margin-bottom: 1rem;
        }
        .lesson-content ul, 
        .lesson-content ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        .lesson-content li {
            margin-bottom: 0.5rem;
        }
        .lesson-content pre {
            background-color: #1e1e1e;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin-bottom: 1rem;
        }
        .lesson-content code {
            font-family: monospace;
            background-color: #2d2d2d;
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <img 
                    src="{{ $lesson->image_link ?: $course->image_link }}" 
                    alt="{{ $lesson->name }}" 
                    class="w-full h-96 object-cover rounded-xl"
                >
                
                <h1 class="text-3xl md:text-4xl font-bold mt-6">{{ $lesson->name }}</h1>
                
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
                        <span class="ml-4 text-gray-500">{{ $lesson->created_at->diffForHumans() }}</span>
                    </div>
                    
                    <div class="flex space-x-3 mt-4 sm:mt-0">
                        @if(auth()->check() && (auth()->user()->id == $course->user_id || auth()->user()->isAdmin()))
                            <a 
                                href="{{ route('lessons.edit', [$course->slug, $lesson->slug]) }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-indigo-600 text-indigo-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-edit mr-2"></i> Edit Lesson
                            </a>
                        @endif
                        
                        @if(auth()->check() && auth()->user()->id != $course->user_id)
                            @if($lesson->is_finished)
                                <button 
                                    class="px-4 py-2 bg-gray-600 text-gray-300 rounded-lg flex items-center cursor-not-allowed"
                                    disabled
                                >
                                    <i class="fas fa-check-circle mr-2"></i> Completed
                                </button>
                            @else
                                <form action="{{ route('lessons.finish', [$course->slug, $lesson->slug]) }}" method="POST">
                                    @csrf
                                    <button 
                                        type="submit"
                                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition flex items-center"
                                    >
                                        <i class="fas fa-check-circle mr-2"></i> Mark as Finished
                                    </button>
                                </form>
                            @endif
                            
                            <a 
                                href="{{ route('reports.create') }}?reportable_type={{ urlencode(get_class($lesson)) }}&reportable_id={{ $lesson->id }}" 
                                class="px-4 py-2 bg-dark-700 hover:bg-red-600 text-red-400 hover:text-white rounded-lg transition flex items-center"
                            >
                                <i class="fas fa-flag mr-2"></i> Report
                            </a>
                        @endif
                    </div>
                </div>
                
                <div class="mt-6 bg-dark-800 rounded-xl p-6">
                    <h2 class="text-xl font-bold mb-4">Description</h2>
                    <p class="text-gray-300">{{ $lesson->description }}</p>
                </div>
                
                <div class="mt-6 bg-dark-800 rounded-xl p-6">
                    <h2 class="text-xl font-bold mb-4">Content</h2>
                    <div class="lesson-content text-gray-300">
                        {!! $lesson->content !!}
                    </div>
                </div>
                
                <div class="mt-8 bg-dark-800 rounded-xl p-6">
                    <div class="flex flex-wrap items-center justify-between">
                        <!-- Rating -->
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-lg font-bold mb-2">Rate this lesson</h3>
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    <form action="{{ route('lessons.rate', [$course->slug, $lesson->slug]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="value" value="{{ $i }}">
                                        <button type="submit" class="{{ $lesson->user_rating >= $i ? 'text-yellow-400' : 'text-gray-500' }} mr-1">
                                            <i class="fas fa-star text-xl"></i>
                                        </button>
                                    </form>
                                @endfor
                                <span class="ml-2 text-gray-400">
                                    {{ number_format($lesson->students_avg_rating, 1) }} 
                                    ({{ $lesson->students_count ?: 0 }} ratings)
                                </span>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-bold mb-2">What do you think?</h3>
                            <div class="flex space-x-4">
                                <form action="{{ route('lessons.vote', [$course->slug, $lesson->slug]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="value" value="1">
                                    <button type="submit" class="flex items-center {{ $lesson->user_vote == 1 ? 'text-green-500' : 'text-gray-500 hover:text-green-500' }}">
                                        <i class="fas fa-thumbs-up text-xl"></i>
                                        <span class="ml-2">{{ $lesson->likes_count ?: 0 }}</span>
                                    </button>
                                </form>
                                <form action="{{ route('lessons.vote', [$course->slug, $lesson->slug]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="value" value="-1">
                                    <button type="submit" class="flex items-center {{ $lesson->user_vote == -1 ? 'text-red-500' : 'text-gray-500 hover:text-red-500' }}">
                                        <i class="fas fa-thumbs-down text-xl"></i>
                                        <span class="ml-2">{{ $lesson->dislikes_count ?: 0}}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Comments</h2>
                        <a 
                            href="{{ route('comments.create') }}?commentable_type={{ urlencode(get_class($lesson)) }}&commentable_id={{ $lesson->id }}" 
                            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg flex items-center"
                        >
                            <i class="fas fa-comment mr-2"></i> Add Comment
                        </a>
                    </div>
                    
                    <div class="space-y-6">
                        @foreach($lesson->comments as $comment)
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