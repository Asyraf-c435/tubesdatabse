<x-layout>
    <div class="bg-gray-50 min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-2xl font-bold text-gray-900 mb-8">Vote for Your Favorite Designs</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/29ee005b-0072-452d-8a40-1e8b30667e39.jpg" alt="Studio DOT">
                    </div>
                    <div class="p-4">
                        <!-- Voting Screen -->
                        <div id="voting-screen-1">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-900">Studio DOT</h3>
                                <span class="text-xs bg-gray-100 px-2 py-1 rounded" id="question-progress-1">1/4</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-4" id="question-text-1">Does it effectively engage the user through strategic use of color, typography, and imagery?</p>
                            
                            <div class="grid grid-cols-7 border border-gray-300 rounded-md overflow-hidden text-center text-gray-700 text-xs select-none mb-4">
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="4">
                                    1-4
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="5">
                                    5
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="6">
                                    6
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="7">
                                    7
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="8">
                                    8
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="9">
                                    9
                                </button>
                                <button class="py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="1" data-value="10">
                                    10
                                </button>
                            </div>
                            <div class="flex justify-start">
                                <button aria-label="Previous question" class="hidden" id="prev-btn-1" type="button">
                                    <div class="bg-black rounded-md p-2 hover:bg-white transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white hover:text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <!-- Confirmation Screen -->
                        <div id="confirmation-screen-1" class="hidden">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Just one thing more...</h3>
                            <p class="text-sm text-gray-700 mb-8">Here's how you voted. Please confirm to submit your vote.</p>
                            
                            <div class="flex items-center justify-between mb-8">
                                <div class="flex space-x-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="design-score-1" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Design</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="usability-score-1" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Usability</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="creativity-score-1" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Creativity</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="content-score-1" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Content</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs text-gray-500">Overall</span>
                                    <p id="average-score-1" class="text-xl font-bold">0.00</p>
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <button id="edit-votes-btn-1" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    Edit Votes
                                </button>
                                <button id="submit-votes-btn-1" class="px-4 py-2 bg-black rounded-md text-sm font-medium text-white hover:bg-gray-800">
                                    Confirm and submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1497366754035-f200968a6e72" alt="Minimal Studio">
                    </div>
                    <div class="p-4">
                        <!-- Voting Screen -->
                        <div id="voting-screen-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-900">Minimal Studio</h3>
                                <span class="text-xs bg-gray-100 px-2 py-1 rounded" id="question-progress-2">1/4</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-4" id="question-text-2">Does it effectively engage the user through strategic use of color, typography, and imagery?</p>
                            
                            <div class="grid grid-cols-7 border border-gray-300 rounded-md overflow-hidden text-center text-gray-700 text-xs select-none mb-4">
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="4">
                                    1-4
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="5">
                                    5
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="6">
                                    6
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="7">
                                    7
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="8">
                                    8
                                </button>
                                <button class="border-r border-gray-300 py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="9">
                                    9
                                </button>
                                <button class="py-3 px-1 font-bold text-sm hover:bg-gray-100" data-card="2" data-value="10">
                                    10
                                </button>
                            </div>
                            <div class="flex justify-start">
                                <button aria-label="Previous question" class="hidden" id="prev-btn-2" type="button">
                                    <div class="bg-black rounded-md p-2 hover:bg-white transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white hover:text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <!-- Confirmation Screen -->
                        <div id="confirmation-screen-2" class="hidden">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Just one thing more...</h3>
                            <p class="text-sm text-gray-700 mb-8">Here's how you voted. Please confirm to submit your vote.</p>
                            
                            <div class="flex items-center justify-between mb-8">
                                <div class="flex space-x-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="design-score-2" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Design</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="usability-score-2" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Usability</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="creativity-score-2" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Creativity</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                            <span id="content-score-2" class="text-lg font-bold">0</span>
                                        </div>
                                        <span class="text-xs text-gray-700">Content</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs text-gray-500">Overall</span>
                                    <p id="average-score-2" class="text-xl font-bold">0.00</p>
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <button id="edit-votes-btn-2" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    Edit Votes
                                </button>
                                <button id="submit-votes-btn-2" class="px-4 py-2 bg-black rounded-md text-sm font-medium text-white hover:bg-gray-800">
                                    Confirm and submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 and Card 4 would follow the same pattern -->
                <!-- ... (similar structure for cards 3 and 4) ... -->
            </div>
        </div>
    </div>
    <x-footer></x-footer>

    <script>
        // Questions for all cards
        const questions = [
            {
                title: "Design",
                text: "Does it effectively engage the user through strategic use of color, typography, and imagery?",
                progress: "1/4"
            },
            {
                title: "Usability",
                text: "Can users perform tasks safely, effectively, and efficiently while enjoying the experience?",
                progress: "2/4"
            },
            {
                title: "Creativity",
                text: "Does it solve its problems and communicate ideas in an innovative way?",
                progress: "3/4"
            },
            {
                title: "Content",
                text: "Is the content useful, of a high quality, and allows the website to fully serve its purpose?",
                progress: "4/4"
            }
        ];

        // Initialize voting systems for each card
        function initializeVotingSystem(cardNumber) {
            const titleEl = document.getElementById(`question-text-${cardNumber}`);
            const progressEl = document.getElementById(`question-progress-${cardNumber}`);
            const buttons = document.querySelectorAll(`button[data-card="${cardNumber}"]`);
            const prevBtn = document.getElementById(`prev-btn-${cardNumber}`);
            const votingScreen = document.getElementById(`voting-screen-${cardNumber}`);
            const confirmationScreen = document.getElementById(`confirmation-screen-${cardNumber}`);
            const editVotesBtn = document.getElementById(`edit-votes-btn-${cardNumber}`);
            const submitVotesBtn = document.getElementById(`submit-votes-btn-${cardNumber}`);

            // Score elements
            const designScoreEl = document.getElementById(`design-score-${cardNumber}`);
            const usabilityScoreEl = document.getElementById(`usability-score-${cardNumber}`);
            const creativityScoreEl = document.getElementById(`creativity-score-${cardNumber}`);
            const contentScoreEl = document.getElementById(`content-score-${cardNumber}`);
            const averageScoreEl = document.getElementById(`average-score-${cardNumber}`);

            let currentIndex = 0;
            const scores = [0, 0, 0, 0]; // To store scores for each question

            function fadeOutIn(element, newContent) {
                element.style.transition = "opacity 0.4s ease";
                element.style.opacity = 0;
                setTimeout(() => {
                    element.textContent = newContent;
                    element.style.opacity = 1;
                }, 400);
            }

            function updateUI(index) {
                fadeOutIn(titleEl, questions[index].text);
                fadeOutIn(progressEl, questions[index].progress);
                
                if (index > 0) {
                    prevBtn.classList.remove("hidden");
                } else {
                    prevBtn.classList.add("hidden");
                }
            }

            function showConfirmationScreen() {
                // Update all score displays
                designScoreEl.textContent = scores[0];
                usabilityScoreEl.textContent = scores[1];
                creativityScoreEl.textContent = scores[2];
                contentScoreEl.textContent = scores[3];
                
                // Calculate average
                const average = scores.reduce((sum, score) => sum + score, 0) / scores.length;
                averageScoreEl.textContent = average.toFixed(2);
                
                // Switch screens
                votingScreen.classList.add("hidden");
                confirmationScreen.classList.remove("hidden");
            }

            buttons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    // Store the score
                    const value = parseInt(btn.dataset.value);
                    scores[currentIndex] = value;
                    
                    if (currentIndex < questions.length - 1) {
                        currentIndex++;
                        updateUI(currentIndex);
                    } else {
                        // All questions answered, show confirmation
                        showConfirmationScreen();
                    }
                });
            });

            prevBtn.addEventListener("click", () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateUI(currentIndex);
                }
            });

            editVotesBtn.addEventListener("click", () => {
                // Go back to voting screen
                confirmationScreen.classList.add("hidden");
                votingScreen.classList.remove("hidden");
            });

            submitVotesBtn.addEventListener("click", () => {
                alert(`Thank you for voting on Card ${cardNumber}! Your ratings have been submitted.`);
                // Reset for demo purposes
                setTimeout(() => {
                    confirmationScreen.classList.add("hidden");
                    votingScreen.classList.remove("hidden");
                    currentIndex = 0;
                    scores.fill(0);
                    updateUI(0);
                }, 1000);
            });
        }

        // Initialize all cards
        initializeVotingSystem(1);
        initializeVotingSystem(2);
        // initializeVotingSystem(3);
        // initializeVotingSystem(4);
    </script>
</x-layout>