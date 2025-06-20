@if($reports->count() > 0)
    <div class="space-y-4">
        @foreach($reports as $report)
        <div class="bg-dark-700 rounded-lg p-4">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center">
                        <img 
                            src="{{ $report->user->image_link ?: 'https://storage.googleapis.com/a1aa/image/38cd3918-57a4-43bc-77cb-7263e694661e.jpg' }}" 
                            alt="{{ $report->user->display_name }}" 
                            class="w-8 h-8 rounded-full"
                        >
                        <div class="ml-3">
                            <a 
                                href="{{ route('users.show', $report->user->slug) }}" 
                                class="font-bold hover:text-indigo-400"
                            >
                                {{ $report->user->display_name }}
                            </a>
                            <div class="text-xs text-gray-500">
                                {{ $report->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <div class="flex items-center text-sm mb-1">
                            <span class="text-gray-400">Reported:</span>
                            @php
                                $type = class_basename($report->reportable_type);
                                $name = '';
                                if ($report->reportable) {
                                    if (method_exists($report->reportable, 'name')) {
                                        $name = $report->reportable->name;
                                    } elseif (method_exists($report->reportable, 'content')) {
                                        $name = Str::limit($report->reportable->content, 30);
                                    }
                                }
                            @endphp
                            <span class="ml-2 bg-dark-600 px-2 py-1 rounded">
                                {{ $type }}: {{ $name ?: '#' . $report->reportable_id }}
                            </span>
                        </div>
                        <p class="mt-2 text-gray-300">
                            {{ $report->content }}
                        </p>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <form action="{{ route('reports.update.state', $report->id) }}" method="POST" class="state-form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="state" value="">
                        <button 
                            type="button" 
                            class="state-button px-3 py-1 rounded text-sm bg-green-600 hover:bg-green-700"
                            data-state="1"
                            data-report-id="{{ $report->id }}"
                        >
                            <i class="fas fa-check mr-1"></i> Resolve
                        </button>
                        <button 
                            type="button" 
                            class="state-button px-3 py-1 rounded text-sm bg-gray-600 hover:bg-gray-700"
                            data-state="-1"
                            data-report-id="{{ $report->id }}"
                        >
                            <i class="fas fa-archive mr-1"></i> Archive
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="text-center py-8">
        <i class="fas fa-inbox text-4xl text-gray-500 mb-4"></i>
        <p class="text-gray-400">No reports found in this category</p>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.state-button').forEach(button => {
            button.addEventListener('click', function() {
                const reportId = this.getAttribute('data-report-id');
                const state = this.getAttribute('data-state');
                const form = this.closest('.state-form');
                
                // Update the hidden state input
                form.querySelector('input[name="state"]').value = state;
                
                // Submit the form
                form.submit();
            });
        });
    });
</script>