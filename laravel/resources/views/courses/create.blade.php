<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course | BelajarDirumahAja</title>
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
        
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('course-preview');
                preview.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <style>
        .image-upload-label {
            transition: all 0.3s ease;
        }
        .image-upload-label:hover {
            background-color: #2d2d2d;
            border-color: #818cf8;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-dark-800 rounded-2xl shadow-lg p-8">
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold">Create New Course</h1>
                <p class="text-gray-500 mt-2">Share your knowledge with our learning community</p>
            </div>
            
            <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-8">
                    <label class="block text-sm font-medium mb-2">Course Image *</label>
                    <label for="image" class="image-upload-label flex flex-col items-center justify-center border-2 border-dashed border-dark-600 rounded-xl p-8 cursor-pointer hover:border-indigo-500">
                        <img 
                            id="course-preview" 
                            src="https://foundr.com/wp-content/uploads/2021/09/Best-online-course-platforms.png" 
                            alt="Course Preview" 
                            class="w-full h-48 object-cover rounded-lg mb-4"
                        >
                        <div class="text-center">
                            <p class="text-indigo-400 font-medium">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>Upload Course Image
                            </p>
                            <p class="text-gray-500 text-sm mt-1">JPG, PNG or GIF (Max 8MB)</p>
                        </div>
                        <input 
                            type="file" 
                            id="image" 
                            name="image" 
                            class="hidden" 
                            required
                            accept="image/*"
                            onchange="previewImage(event)"
                        >
                    </label>
                    @error('image')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium mb-2">Course Name *</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        required
                        class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                        placeholder="Enter course name"
                    >
                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium mb-2">Course Description *</label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4"
                        required
                        class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                        placeholder="Describe your course..."
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end space-x-4 mt-10">
                    <button 
                        type="button" 
                        onclick="window.location.href='{{ route('courses.index') }}'"
                        class="px-6 py-3 bg-dark-700 hover:bg-dark-600 text-gray-300 rounded-lg transition"
                    >
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition"
                    >
                        Create Course
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>