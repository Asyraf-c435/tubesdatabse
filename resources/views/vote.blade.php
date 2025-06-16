<x-layout>
    <div class="bg-gray-50 min-h-screen p-6 flex items-center justify-center">
        <div class="max-w-4xl w-full">
            <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Rate This Design</h1>
            
            <!-- Combined Design Display and Rating Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Design Display Section - Image fitted to card width -->
                <div class="w-full h-auto bg-gray-100">
                    <img class="w-full h-auto object-cover" src="{{ asset($website->image_link) }}" alt="Design Preview">
                </div>
                
                <!-- Rating Form Section -->
                <div class="p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Design Title -->
                        <div class="md:w-1/3">
                            <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $website->name }}</h2>
                            <p class="text-sm text-gray-600">{{ $website->description }}</p>
                        </div>
                        
                        <!-- Rating Form -->
                        <div class="md:w-2/3">
                            <form class="space-y-4" id="ratingForm" action="{{ route('vote', $website->id) }}" method="POST">
                                <!-- Design Rating -->
                                @csrf
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <label class="text-sm font-medium text-gray-700">Design</label>
                                        <span class="text-xs text-gray-500">1-10</span>
                                    </div>
                                    <input name="design" type="number" name="design" min="1" max="10" required 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black"/>
                                </div>
                                
                                <!-- Usability Rating -->
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <label class="text-sm font-medium text-gray-700">Usability</label>
                                        <span class="text-xs text-gray-500">1-10</span>
                                    </div>
                                    <input name="usability" type="number" name="usability" min="1" max="10" required 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black"/>
                                </div>
                                
                                <!-- Creativity Rating -->
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <label class="text-sm font-medium text-gray-700">Creativity</label>
                                        <span class="text-xs text-gray-500">1-10</span>
                                    </div>
                                    <input name="creativity" type="number" name="creativity" min="1" max="10" required 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black"/>
                                </div>
                                
                                <!-- Content Rating -->
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <label class="text-sm font-medium text-gray-700">Content</label>
                                        <span class="text-xs text-gray-500">1-10</span>
                                    </div>
                                    <input name="content" type="number" name="content" min="1" max="10" required 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black"/>
                                </div>
                                
                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-black text-white py-3 px-6 rounded-md hover:bg-gray-800 transition-colors font-medium">
                                        Submit Rating
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        document.getElementById('ratingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const formData = new FormData(this);
            const ratings = {
                design: parseInt(formData.get('design')),
                usability: parseInt(formData.get('usability')),
                creativity: parseInt(formData.get('creativity')),
                content: parseInt(formData.get('content'))
            };
            
            // Validate ratings
            for (const [key, value] of Object.entries(ratings)) {
                if (isNaN(value) || value < 1 || value > 10) {
                    alert(`Please enter a valid rating (1-10) for ${key}`);
                    return;
                }
            }
            
            // Calculate average
            const average = Object.values(ratings).reduce((a, b) => a + b, 0) / 4;
            
            // Show result
            alert(`Thank you for your rating!\n\nAverage Rating: ${average.toFixed(1)}`);
            
        });
    </script> -->
</x-layout>