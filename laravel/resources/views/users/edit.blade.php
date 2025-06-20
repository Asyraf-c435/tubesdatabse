<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | BelajarDirumahAja</title>
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
                const preview = document.getElementById('profile-preview');
                preview.src = reader.result;
                document.getElementById('image-remove').classList.remove('hidden');
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        
        function removeImage() {
            document.getElementById('profile-preview').src = 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg';
            document.getElementById('image').value = '';
            document.getElementById('image-remove').classList.add('hidden');
            document.getElementById('remove_image_flag').value = '1';
        }
    </script>
</head>
<body class="bg-dark-900 text-gray-200">
    @include('components.layout')

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-dark-800 rounded-2xl shadow-lg p-8">
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold">Edit Your Profile</h1>
                <p class="text-gray-500 mt-2">Update your personal information and preferences</p>
            </div>
            
            <form method="POST" action="{{ route('users.update', $user->slug) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-10 text-center">
                    <div class="relative inline-block">
                        <img 
                            id="profile-preview"
                            src="{{ $user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                            alt="Profile Preview" 
                            class="w-32 h-32 rounded-full object-cover border-4 border-indigo-500 mx-auto"
                        >
                        <input 
                            type="hidden" 
                            name="remove_image_flag" 
                            id="remove_image_flag" 
                            value="0"
                        >
                        <div class="absolute bottom-0 right-0 bg-indigo-600 rounded-full p-2 cursor-pointer hover:bg-indigo-700 transition">
                            <label for="image" class="cursor-pointer">
                                <i class="fas fa-camera"></i>
                            </label>
                            <input 
                                type="file" 
                                id="image" 
                                name="image" 
                                class="hidden" 
                                accept="image/*"
                                onchange="previewImage(event)"
                            >
                        </div>
                    </div>
                    
                    <button 
                        type="button" 
                        id="image-remove"
                        onclick="removeImage()"
                        class="mt-4 px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition {{ $user->image_link ? '' : 'hidden' }}"
                    >
                        <i class="fas fa-trash mr-2"></i>Remove Image
                    </button>
                </div>
                
                <!-- Name Fields -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Username *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name', $user->name) }}"
                            required
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="Your username"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="display_name" class="block text-sm font-medium mb-2">Display Name</label>
                        <input 
                            type="text" 
                            id="display_name" 
                            name="display_name" 
                            value="{{ old('display_name', $user->display_name) }}"
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="Your public name"
                        >
                        @error('display_name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium mb-2">Email Address *</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email', $user->email) }}"
                        required
                        class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                        placeholder="you@example.com"
                    >
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium mb-2">About You</label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4"
                        class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                        placeholder="Tell us about yourself..."
                    >{{ old('description', $user->description) }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="border-t border-dark-700 pt-8 mb-8">
                    <h2 class="text-xl font-bold mb-6">Change Password</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="current_password" class="block text-sm font-medium mb-2">Current Password</label>
                            <input 
                                type="password" 
                                id="current_password" 
                                name="current_password" 
                                class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                                placeholder="••••••••"
                            >
                            @error('current_password')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="password" class="block text-sm font-medium mb-2">New Password</label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                                placeholder="••••••••"
                            >
                            @error('password')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium mb-2">Confirm Password</label>
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                                placeholder="••••••••"
                            >
                        </div>
                    </div>
                </div>

                <div class="flex flex-col-reverse sm:flex-row sm:justify-between gap-4 mt-10">
                    <button 
                        type="button" 
                        onclick="window.location.href='{{ route('users.show', $user->slug) }}'"
                        class="px-6 py-3 bg-dark-700 hover:bg-dark-600 text-gray-300 rounded-lg transition"
                    >
                        Cancel
                    </button>
                    
                    <div class="flex gap-4">
                        <button 
                            type="button" 
                            onclick="if(confirm('Are you sure you want to delete your account? This cannot be undone.')) { document.getElementById('delete-form').submit(); }"
                            class="px-6 py-3 bg-red-700 hover:bg-red-600 text-white rounded-lg transition"
                        >
                            Delete Account
                        </button>
                        
                        <button 
                            type="submit" 
                            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition"
                        >
                            Save Changes
                        </button>
                    </div>
                </div>
            </form>
            
            <form id="delete-form" action="{{ route('users.destroy', $user->slug) }}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </main>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const preview = document.getElementById('profile-preview');
            const removeBtn = document.getElementById('image-remove');
            
            if (preview.src !== 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg') {
                removeBtn.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>