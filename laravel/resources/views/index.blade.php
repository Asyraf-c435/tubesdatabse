<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarDirumahAja</title>
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
        .hero-title {
            text-shadow: 0 0 10px rgba(0,0,0,0.7);
        }
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        .slide.active {
            opacity: 1;
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

    <main>
        <section class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0">
                <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            </div>
            
            <div class="relative z-10 text-center px-4">
                <h1 class="hero-title text-5xl md:text-7xl lg:text-8xl font-bold mb-6 text-white">Learn Anything, Anytime</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-10">Expand your knowledge with our curated collection of courses from expert instructors</p>
                <a href="{{ route('courses.index') }}" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white text-lg font-bold rounded-lg transition">Start Learning</a>
            </div>
            
            <button id="prevSlide" class="absolute left-4 z-10 bg-black bg-opacity-50 text-white p-4 rounded-full hover:bg-opacity-70 transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="nextSlide" class="absolute right-4 z-10 bg-black bg-opacity-50 text-white p-4 rounded-full hover:bg-opacity-70 transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </section>

        <section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-2 text-center">Explore Courses</h2>
                <p class="text-gray-400 mb-12 text-center max-w-3xl mx-auto">Discover our most popular courses taught by industry experts</p>
                
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
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($course->avg_rating))
                                                <i class="fas fa-star text-yellow-400"></i>
                                            @elseif($i == ceil($course->avg_rating) && $course->avg_rating - floor($course->avg_rating) > 0.3)
                                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                                            @else
                                                <i class="far fa-star text-yellow-400"></i>
                                            @endif
                                        @endfor
                                        <span class="ml-2">{{ number_format($course->avg_rating, 1) }}</span>
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
                    @endforeach
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('courses.index') }}" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition">
                        Browse All Courses
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;
            const totalSlides = slides.length;
            
            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                slides[index].classList.add('active');
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }
            
            document.getElementById('nextSlide').addEventListener('click', nextSlide);
            document.getElementById('prevSlide').addEventListener('click', prevSlide);
            
            setInterval(nextSlide, 5000);
        });
    </script>
</body>
</html>