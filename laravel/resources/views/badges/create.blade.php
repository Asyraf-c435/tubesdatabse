@extends('components.layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-dark-800 rounded-xl shadow-lg p-6">
        <div class="flex items-center mb-6">
            <a href="{{ route('courses.show', $course->slug) }}" class="text-indigo-400 hover:text-indigo-300 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Course
            </a>
            <h1 class="text-3xl font-bold ml-4">Create New Badge</h1>
        </div>
        
        <form action="{{ route('badges.store', $course->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block text-gray-300 mb-2">Badge Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name"
                    class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white"
                    placeholder="Enter badge name"
                    required
                >
                @error('name')
                    <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-gray-300 mb-2">Badge Image</label>
                <div class="flex flex-col items-start">
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="hidden"
                        accept="image/*"
                        required
                    >
                    <button 
                        type="button"
                        onclick="document.getElementById('image').click()"
                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition"
                    >
                        Choose Image
                    </button>
                    <span id="image-name" class="mt-2 text-gray-400">No image selected</span>
                </div>
                <div class="mt-4 hidden" id="image-preview-container">
                    <img id="image-preview" class="max-w-xs max-h-48 rounded-lg">
                </div>
                @error('image')
                    <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end space-x-4">
                <a 
                    href="{{ route('courses.show', $course->slug) }}" 
                    class="px-6 py-3 bg-dark-700 hover:bg-dark-600 text-gray-300 rounded-lg transition"
                >
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition"
                >
                    Create Badge
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('image-preview');
        const previewContainer = document.getElementById('image-preview-container');
        const fileName = document.getElementById('image-name');
        
        if (file) {
            fileName.textContent = file.name;
            previewContainer.classList.remove('hidden');
            
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        } else {
            fileName.textContent = 'No image selected';
            previewContainer.classList.add('hidden');
        }
    });
</script>
@endsection