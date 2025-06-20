@extends('components.layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-dark-800 rounded-xl shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Comment</h1>
        
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="content" class="block text-gray-300 mb-2">Edit Your Comment</label>
                <textarea 
                    name="content" 
                    id="content" 
                    rows="6"
                    class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-white"
                    placeholder="Edit your comment..."
                    required
                >{{ old('content', $comment->content) }}</textarea>
                @error('content')
                    <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end space-x-4">
                <a 
                    href="{{ url()->previous() }}" 
                    class="px-6 py-3 bg-dark-700 hover:bg-dark-600 text-gray-300 rounded-lg transition"
                >
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition"
                >
                    Update Comment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection