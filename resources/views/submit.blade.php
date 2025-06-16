@php
    use App\Models\Tag;
    $tags = Tag::all();
@endphp

<x-layout>
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-dark mb-3">Website Submission Portal</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Submit your website for review. Include details, tags, and showcase elements to increase your chances of approval.</p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
            <div class="md:flex">
                <!-- Form Section -->
                <div class="md:w-full p-6 md:p-8">
                    <form id="submissionForm" action="{{ route('submit.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Website Details -->
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-dark mb-6 pb-2 border-b border-gray-200">Website Details</h2>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Website Name *</label>
                                    <input name="name" type="text" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary" placeholder="My Awesome Website" required>
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Website URL *</label>
                                    <input name="link" type="url" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary" placeholder="https://example.com" required>
                                </div>
                                
                                <div class="md:col-span-2">
                                    <label class="block text-gray-700 font-medium mb-2">Description *</label>
                                    <textarea name="description" rows="3" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary" placeholder="Describe your website in detail..." required></textarea>
                                </div>
                                
                                <div class="md:col-span-2">
                                    <label class="block text-gray-700 font-medium mb-2">Preview Image *</label>
                                    <div class="file-upload w-full">
                                        <div class="flex items-center justify-center w-full">
                                            <label class="flex flex-col w-full h-32 border-2 border-dashed rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <i class="fas fa-cloud-upload-alt text-3xl text-secondary mb-2"></i>
                                                    <p class="text-sm text-gray-500">Click to upload or drag and drop</p>
                                                    <p class="text-xs text-gray-400">PNG, JPG, GIF (Max 2MB)</p>
                                                </div>
                                                <input name="image" type="file" class="hidden" accept="image/*" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tags Section -->
                        <div class="mb-8">
                            <div class="flex justify-between items-center mb-6 pb-2 border-b border-gray-200">
                                <h2 class="text-2xl font-bold text-dark">Tags</h2>
                                <button type="button" id="addTagBtn" class="btn-add text-white px-4 py-2 rounded-lg font-medium flex items-center">
                                    <i class="fas fa-plus mr-2"></i> Add Tag
                                </button>
                            </div>
                            
                            <div class="text-sm text-gray-500 mb-4">Select relevant tags for your website (select at least one)</div>
                            
                            <div id="tagsContainer">
                                <!-- Tag will be added here dynamically -->
                                <div class="tag-group flex items-center mb-3">
                                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary mr-3">
                                        <option value="">Select a tag</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="button" class="btn-remove text-red-500 p-2 rounded-full hover:bg-red-50">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div id="selectedTags" class="flex flex-wrap gap-2 mt-4">
                                <!-- Selected tags will appear here -->
                            </div>
                            <div id="selectedTagsInputs"></div>
                        </div>
                        
                        <!-- Elements Section -->
                        <div class="mb-8">
                            <div class="flex justify-between items-center mb-6 pb-2 border-b border-gray-200">
                                <h2 class="text-2xl font-bold text-dark">Elements</h2>
                                <button type="button" id="addElementBtn" class="btn-add bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium flex items-center">
                                    <i class="fas fa-plus mr-2"></i> Add Element
                                </button>
                            </div>
                            
                            <div class="text-sm text-gray-500 mb-4">Showcase key elements/components of your website</div>
                            
                            <div id="elementsContainer" class="space-y-4">
                                <!-- Elements will be added here dynamically -->
                                <div class="element-card bg-light border border-gray-200 rounded-xl p-5">
                                    <div class="flex justify-between items-center mb-4">
                                        <h3 class="font-semibold text-gray-700">Element #1</h3>
                                        <button type="button" class="btn-remove text-red-500 p-2 rounded-full hover:bg-red-50">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-gray-700 font-medium mb-2">Element Name *</label>
                                            <input type="text" name="elements[0][name]" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary" placeholder="Navigation Menu" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-medium mb-2">Element Image *</label>
                                            <div class="file-upload">
                                                <div class="flex items-center justify-center w-full">
                                                    <label class="flex flex-col w-full border-2 border-dashed rounded-lg cursor-pointer hover:bg-gray-50">
                                                        <div class="flex flex-col items-center justify-center py-4">
                                                            <i class="fas fa-image text-xl text-secondary mb-1"></i>
                                                            <p class="text-sm text-gray-500">Upload image</p>
                                                        </div>
                                                        <input type="file" name="elements[0][image]" class="hidden" accept="image/*" required>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row gap-3 pt-4">
                            <button type="submit" class="bg-gray-500 hover:bg-gray-800 btn-primary text-white px-6 py-3 rounded-lg font-medium flex-1 flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i> Submit Website
                            </button>
                            <button type="button" id="resetBtn" class="bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-medium flex-1 hover:bg-gray-300 transition">
                                <i class="fas fa-redo mr-2"></i> Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="text-center text-gray-500 text-sm mt-8">
            <p>Website Submission Portal &copy; 2023. All rights reserved.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tags functionality
            const tagsContainer = document.getElementById('tagsContainer');
            const selectedTagsContainer = document.getElementById('selectedTags');
            const selectedTagsInputsContainer = document.getElementById('selectedTagsInputs');
            const addTagBtn = document.getElementById('addTagBtn');
            let tagCounter = 1;
            let elementIndex = 1;
            
            // Function to update hidden tag inputs
            function updateTagsHiddenInputs() {
                selectedTagsInputsContainer.innerHTML = '';
                const tagElements = selectedTagsContainer.querySelectorAll('.tag');
                tagElements.forEach(tag => {
                    const tagId = tag.querySelector('button').getAttribute('data-value');
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'tags[]';
                    input.value = tagId;
                    selectedTagsInputsContainer.appendChild(input);
                });
            }
            
            // Function to add a new tag select field
            function addTagSelect() {
                tagCounter++;
                const tagGroup = document.createElement('div');
                tagGroup.className = 'tag-group flex items-center mb-3';
                tagGroup.innerHTML = `
                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary mr-3">
                        <option value="">Select a tag</option>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn-remove text-red-500 p-2 rounded-full hover:bg-red-50">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                tagsContainer.appendChild(tagGroup);
                
                // Add event listener to the remove button
                const removeBtn = tagGroup.querySelector('.btn-remove');
                removeBtn.addEventListener('click', function() {
                    if (tagsContainer.querySelectorAll('.tag-group').length > 1) {
                        tagGroup.remove();
                    }
                });
                
                // Add event listener to the select to show tag when selected
                const select = tagGroup.querySelector('select');
                select.addEventListener('change', function() {
                    if (this.value) {
                        showSelectedTag(this.value, this.options[this.selectedIndex].text);
                        this.value = ""; // Reset the select
                    }
                });
            }
            
            // Function to show a selected tag
            function showSelectedTag(value, text) {
                const tagElement = document.createElement('div');
                tagElement.className = 'tag bg-secondary/10 text-primary px-4 py-2 rounded-full flex items-center';
                tagElement.innerHTML = `
                    <span>${text}</span>
                    <button type="button" class="ml-2 text-red-500 hover:text-red-700" data-value="${value}">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                selectedTagsContainer.appendChild(tagElement);
                
                // Add event listener to the remove button
                const removeBtn = tagElement.querySelector('button');
                removeBtn.addEventListener('click', function() {
                    tagElement.remove();
                    updateTagsHiddenInputs();
                });
                
                updateTagsHiddenInputs();
            }
            
            // Add event listener to the initial tag select
            const initialTagSelect = tagsContainer.querySelector('select');
            initialTagSelect.addEventListener('change', function() {
                if (this.value) {
                    showSelectedTag(this.value, this.options[this.selectedIndex].text);
                    this.value = ""; // Reset the select
                }
            });
            
            // Add event listener to the initial remove button
            const initialTagRemoveBtn = tagsContainer.querySelector('.btn-remove');
            initialTagRemoveBtn.addEventListener('click', function() {
                if (tagsContainer.querySelectorAll('.tag-group').length > 1) {
                    tagsContainer.removeChild(initialTagRemoveBtn.parentElement);
                }
            });
            
            // Add event listener to the "Add Tag" button
            addTagBtn.addEventListener('click', addTagSelect);
            
            // Elements functionality
            const elementsContainer = document.getElementById('elementsContainer');
            const addElementBtn = document.getElementById('addElementBtn');
            let elementCounter = 1;
            
            // Function to add a new element card
            function addElementCard() {
                const currentIndex = elementIndex++;
                const elementCard = document.createElement('div');
                elementCard.className = 'element-card bg-light border border-gray-200 rounded-xl p-5';
                elementCard.innerHTML = `
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-700">Element #${elementCounter + 1}</h3>
                        <button type="button" class="btn-remove text-red-500 p-2 rounded-full hover:bg-red-50">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Element Name *</label>
                            <input type="text" name="elements[${currentIndex}][name]" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-primary" placeholder="Element Name" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Element Image *</label>
                            <div class="file-upload">
                                <div class="flex items-center justify-center w-full">
                                    <label class="flex flex-col w-full border-2 border-dashed rounded-lg cursor-pointer hover:bg-gray-50">
                                        <div class="flex flex-col items-center justify-center py-4">
                                            <i class="fas fa-image text-xl text-secondary mb-1"></i>
                                            <p class="text-sm text-gray-500">Upload image</p>
                                        </div>
                                        <input type="file" name="elements[${currentIndex}][image]" class="hidden" accept="image/*" required>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                elementsContainer.appendChild(elementCard);
                
                // Add event listener to the remove button
                const removeBtn = elementCard.querySelector('.btn-remove');
                removeBtn.addEventListener('click', function() {
                    if (elementsContainer.querySelectorAll('.element-card').length > 1) {
                        elementCard.remove();
                    }
                });
                
                elementCounter++;
            }
            
            // Add event listener to the initial element remove button
            const initialElementCard = elementsContainer.querySelector('.element-card');
            const initialElementRemoveBtn = initialElementCard.querySelector('.btn-remove');
            initialElementRemoveBtn.addEventListener('click', function() {
                if (elementsContainer.querySelectorAll('.element-card').length > 1) {
                    elementsContainer.removeChild(initialElementCard);
                }
            });
            
            // Add event listener to the "Add Element" button
            addElementBtn.addEventListener('click', addElementCard);
            
            // Form reset functionality
            const resetBtn = document.getElementById('resetBtn');
            const form = document.getElementById('submissionForm');
            
            function resetForm() {
                // Reset form fields
                form.reset();
                
                // Reset tags
                const tagGroups = tagsContainer.querySelectorAll('.tag-group');
                for (let i = 1; i < tagGroups.length; i++) {
                    tagGroups[i].remove();
                }
                const firstTagSelect = tagsContainer.querySelector('select');
                if (firstTagSelect) firstTagSelect.value = "";
                selectedTagsContainer.innerHTML = '';
                updateTagsHiddenInputs();
                
                // Reset elements - remove all except the first one
                const elementCards = elementsContainer.querySelectorAll('.element-card');
                for (let i = 1; i < elementCards.length; i++) {
                    elementCards[i].remove();
                }
                
                // Reset the first element card
                const firstElementCard = elementsContainer.querySelector('.element-card');
                if (firstElementCard) {
                    const nameInput = firstElementCard.querySelector('input[type="text"]');
                    if (nameInput) nameInput.value = "";
                    const fileInput = firstElementCard.querySelector('input[type="file"]');
                    if (fileInput) fileInput.value = "";
                    
                    // Reset title
                    const title = firstElementCard.querySelector('h3');
                    if (title) title.textContent = "Element #1";
                }
                
                // Reset counters
                tagCounter = 1;
                elementCounter = 1;
                elementIndex = 1;
            }
            
            resetBtn.addEventListener('click', resetForm);
            
            // Form submission handling
            form.addEventListener('submit', function(e) {
                // Check if at least one tag is selected
                if (selectedTagsContainer.children.length === 0) {
                    alert('Please select at least one tag for your website.');
                    e.preventDefault();
                    return;
                }
                
                // Form will submit normally if validation passes
            });
        });
    </script>
</x-layout>