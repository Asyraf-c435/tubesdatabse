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
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200 min-h-screen">
    <nav class="bg-dark-800 border-b border-dark-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('index') }}" class="text-xl font-bold text-indigo-400 hover:text-indigo-300 transition">BelajarDirumahAja</a>
                    <a href="{{ route('courses.index') }}" class="ml-6 px-3 py-2 rounded-md text-sm font-medium hover:bg-dark-700 transition">Courses</a>
                </div>

                <div class="flex-1 flex items-center justify-center px-2 lg:ml-6">
                    <form action="{{ route('courses.index') }}" method="GET" class="w-full max-w-lg">
                        <div class="relative">
                            <input type="text" name="search" placeholder="Search courses..." class="w-full pl-3 pr-10 py-2 rounded-lg bg-dark-700 border border-dark-600 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                            <button type="submit" class="absolute right-0 top-0 mt-2 mr-3">
                                <i class="fas fa-search text-gray-400"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="flex items-center">
                    @auth
                        <div class="relative dropdown ml-3">
                            <div class="flex items-center cursor-pointer py-2 px-3 rounded-lg hover:bg-dark-700 transition">
                                <img src="{{ auth()->user()->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" alt="Profile" class="w-8 h-8 rounded-full">
                                <span class="ml-2 hidden sm:inline">{{ auth()->user()->display_name }}</span>
                                <i class="fas fa-chevron-down ml-1 text-sm"></i>
                            </div>
                            <div class="dropdown-menu absolute right-0 mt-1 w-48 bg-dark-800 border border-dark-700 rounded-lg shadow-lg py-1 z-50 hidden">
                                <a href="{{ route('users.show', auth()->user()->slug) }}" class="block px-4 py-2 hover:bg-dark-700">Profile</a>
                                <a href="{{ route('users.edit', auth()->user()->slug) }}" class="block px-4 py-2 hover:bg-dark-700">Settings</a>
                                @if (auth()->user()->isAdmin())
                                <a href="{{ route('reports.index') }}" class="block px-4 py-2 hover:bg-dark-700">Moderation</a>
                                @endif
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-dark-700">Log Out</button>
                                </form>
                            </div>
                        </div>
                        <a href="{{ route('courses.create') }}" class="ml-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition">Create Course</a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-dark-700 transition">Log In</a>
                        <a href="{{ route('register') }}" class="ml-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition">Sign Up</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function(e) {
                    const menu = this.querySelector('.dropdown-menu');
                    menu.classList.toggle('hidden');
                });
            });
        });
    </script>
</body>
</html>