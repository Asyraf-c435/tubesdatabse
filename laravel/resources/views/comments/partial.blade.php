<div class="comment" data-id="{{ $comment->id }}">
    <div class="flex">
        <a href="{{ route('users.show', $comment->user->slug) }}" class="flex-shrink-0">
            <img 
                src="{{ $comment->user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                alt="{{ $comment->user->display_name }}" 
                class="w-10 h-10 rounded-full"
            >
        </a>
        
        <div class="ml-3 flex-grow">
            <div class="flex items-center">
                <a 
                    href="{{ route('users.show', $comment->user->slug) }}" 
                    class="font-bold hover:text-indigo-400 transition"
                >
                    {{ $comment->user->display_name }}
                </a>
                <span class="text-gray-500 text-sm ml-3">
                    {{ $comment->created_at->diffForHumans() }}
                </span>
            </div>
            
            <div class="mt-1 text-gray-300">
                {{ $comment->content }}
            </div>
            
            <div class="flex items-center mt-2 space-x-4">
                <form action="{{ route('comments.vote', $comment->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="vote" value="1">
                    <button 
                        type="submit" 
                        class="flex items-center {{ $comment->voters->where('id', auth()->id())->first()?->pivot?->vote === 1 ? 'text-green-500' : 'text-gray-500 hover:text-green-500' }}"
                    >
                        <i class="fas fa-thumbs-up"></i>
                        <span class="ml-1 text-sm">
                            {{ $comment->voters->where('pivot.vote', 1)->count() }}
                        </span>
                    </button>
                </form>
                
                <form action="{{ route('comments.vote', $comment->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="vote" value="-1">
                    <button 
                        type="submit" 
                        class="flex items-center {{ $comment->voters->where('id', auth()->id())->first()?->pivot?->vote === -1 ? 'text-red-500' : 'text-gray-500 hover:text-red-500' }}"
                    >
                        <i class="fas fa-thumbs-down"></i>
                    </button>
                </form>
                
                <button 
                    class="text-gray-500 hover:text-indigo-400 transition reply-button"
                    data-comment-id="{{ $comment->id }}"
                >
                    Reply
                </button>
                
                @if(auth()->check() && (auth()->user()->id === $comment->user_id || auth()->user()->isAdmin()))
                <div class="flex space-x-2">
                    <a 
                        href="{{ route('comments.edit', $comment->id) }}" 
                        class="text-gray-500 hover:text-yellow-400 transition"
                    >
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit" 
                            class="text-gray-500 hover:text-red-500 transition"
                            onclick="return confirm('Are you sure you want to delete this comment?')"
                        >
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
                @endif
                
                <a 
                    href="{{ route('reports.create') }}?reportable_type={{ urlencode(get_class($comment)) }}&reportable_id={{ $comment->id }}" 
                    class="text-gray-500 hover:text-red-500 transition ml-2"
                >
                    <i class="fas fa-flag"></i>
                </a>
            </div>
            
            <div class="mt-3 hidden" id="reply-form-{{ $comment->id }}">
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="commentable_type" value="{{ get_class($comment) }}">
                    <input type="hidden" name="commentable_id" value="{{ $comment->id }}">
                    
                    <textarea 
                        name="content" 
                        rows="2"
                        class="w-full px-3 py-2 bg-dark-700 border border-dark-600 rounded-lg text-white"
                        placeholder="Write a reply..."
                        required
                    ></textarea>
                    
                    <div class="mt-2 flex justify-end space-x-2">
                        <button 
                            type="button" 
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded cancel-reply"
                            data-comment-id="{{ $comment->id }}"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit" 
                            class="px-3 py-1 bg-indigo-600 text-white rounded"
                        >
                            Reply
                        </button>
                    </div>
                </form>
            </div>
            
            @if($comment->comments->count() > 0)
            <div class="mt-4 ml-6 pl-4 border-l-2 border-dark-700 space-y-4">
                @foreach($comment->comments as $reply)
                    @include('comments.partial', ['comment' => $reply])
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.reply-button').forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');
                const form = document.getElementById(`reply-form-${commentId}`);
                form.classList.toggle('hidden');
            });
        });
        
        document.querySelectorAll('.cancel-reply').forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');
                const form = document.getElementById(`reply-form-${commentId}`);
                form.classList.add('hidden');
            });
        });
    });
</script>