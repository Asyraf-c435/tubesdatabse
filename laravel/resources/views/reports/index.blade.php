@extends('components.layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-dark-800 rounded-xl shadow-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-dark-700">
            <h1 class="text-2xl font-bold">Reports Management</h1>
        </div>
        
        <div class="border-b border-dark-700">
            <div class="flex" id="report-tabs">
                <button 
                    class="px-4 py-3 font-medium text-sm tab-button active"
                    data-tab="unresolved"
                >
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    Unresolved
                    <span class="ml-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                        {{ $reports->where('state', 0)->count() }}
                    </span>
                </button>
                <button 
                    class="px-4 py-3 font-medium text-sm tab-button"
                    data-tab="resolved"
                >
                    <i class="fas fa-check-circle mr-2"></i>
                    Resolved
                    <span class="ml-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                        {{ $reports->where('state', 1)->count() }}
                    </span>
                </button>
                <button 
                    class="px-4 py-3 font-medium text-sm tab-button"
                    data-tab="archived"
                >
                    <i class="fas fa-archive mr-2"></i>
                    Archived
                    <span class="ml-2 bg-gray-500 text-white text-xs px-2 py-1 rounded-full">
                        {{ $reports->where('state', -1)->count() }}
                    </span>
                </button>
            </div>
        </div>
        
        <div class="p-6">
            <div id="unresolved-tab" class="tab-content">
                @include('reports.partial', [
                    'reports' => $reports->where('state', 0),
                    'state' => 0
                ])
            </div>
            
            <div id="resolved-tab" class="tab-content hidden">
                @include('reports.partial', [
                    'reports' => $reports->where('state', 1),
                    'state' => 1
                ])
            </div>
            
            <div id="archived-tab" class="tab-content hidden">
                @include('reports.partial', [
                    'reports' => $reports->where('state', -1),
                    'state' => -1
                ])
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active', 'border-indigo-400'));
                
                this.classList.add('active', 'border-indigo-400');
                
                tabContents.forEach(content => content.classList.add('hidden'));
                
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-tab`).classList.remove('hidden');
            });
        });
        
        document.querySelector('.tab-button.active').classList.add('border-indigo-400');
    });
</script>
@endsection