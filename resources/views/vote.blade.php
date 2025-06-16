<x-layout>
    <div class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
        <div class="max-w-5xl w-full bg-gray-50 rounded-md">
            <!-- Main voting screen (shown by default) -->
            <div id="voting-screen">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-6 md:gap-0">
                    <div class="flex flex-col justify-center md:w-1/2">
                        <h2 class="text-lg font-semibold text-gray-900">
                            Studio DOT
                        </h2>
                        <p class="text-base text-gray-700 mt-1">
                            needs your vote.
                        </p>
                    </div>
                    <div class="md:w-1/2 flex justify-end">
                        <img alt="Screenshot of Studio DOT website with layered images and dark blue background, rectangular shape with rounded corners" class="image-rect" src="https://storage.googleapis.com/a1aa/image/29ee005b-0072-452d-8a40-1e8b30667e39.jpg" />
                    </div>
                </div>
                <div class="mt-16 max-w-4xl">
                    <div class="flex justify-between items-center mb-3">
                        <p class="text-sm font-semibold text-gray-900" id="question-title">
                            Design
                        </p>
                        <p class="text-sm text-gray-600" id="question-progress">
                            1 / 4
                        </p>
                    </div>
                    <p class="text-sm text-gray-700 mb-4" id="question-text">
                        Does it effectively engage the user through strategic use of color,
                        typography, and imagery?
                    </p>
                    <div>
                        <div class="grid grid-cols-7 border border-gray-300 rounded-md overflow-hidden text-center text-gray-700 text-xs select-none">
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="4">
                                1-4
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Not good enough
                                </span>
                            </button>
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="5">
                                5
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    It's ok
                                </span>
                            </button>
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="6">
                                6
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Good
                                </span>
                            </button>
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="7">
                                7
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Very Good
                                </span>
                            </button>
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="8">
                                8
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Great
                                </span>
                            </button>
                            <button class="border-r border-gray-300 py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="9">
                                9
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Excellent
                                </span>
                            </button>
                            <button class="py-4 px-2 font-bold text-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" type="button" data-step="1" data-value="10">
                                10
                                <br />
                                <span class="font-normal text-xs text-gray-500">
                                    Perfect
                                </span>
                            </button>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <button aria-label="Previous question" class="hidden" id="prev-btn" type="button">
                                <div class="bg-black rounded-md p-2 hover:bg-white transition-colors duration-300">
                                    <i class="fas fa-arrow-left text-white hover:text-black"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Confirmation screen (hidden by default) -->
            <div id="confirmation-screen" class="hidden">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-6 md:gap-0">
                    <div class="flex flex-col justify-center md:w-1/2">
                        <h2 class="text-lg font-semibold text-gray-900">
                            Studio DOT
                        </h2>
                        <p class="text-base text-gray-700 mt-1">
                            needs your vote.
                        </p>
                    </div>
                    <div class="md:w-1/2 flex justify-end">
                        <img alt="Screenshot of Studio DOT website" class="image-rect" src="https://storage.googleapis.com/a1aa/image/29ee005b-0072-452d-8a40-1e8b30667e39.jpg" />
                    </div>
                </div>
                
                <div class="mt-16 max-w-4xl">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Just one thing more...</h3>
                    <p class="text-sm text-gray-700 mb-8">Here's how you voted. Please confirm to submit your vote.</p>
                    
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex space-x-8">
                            <div class="flex flex-col items-center">
                                <div class="w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                    <span id="design-score" class="text-xl font-bold">0</span>
                                </div>
                                <span class="text-xs text-gray-700">Design</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                    <span id="usability-score" class="text-xl font-bold">0</span>
                                </div>
                                <span class="text-xs text-gray-700">Usability</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                    <span id="creativity-score" class="text-xl font-bold">0</span>
                                </div>
                                <span class="text-xs text-gray-700">Creativity</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center mb-2">
                                    <span id="content-score" class="text-xl font-bold">0</span>
                                </div>
                                <span class="text-xs text-gray-700">Content</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-xs text-gray-500">Overall</span>
                            <p id="average-score" class="text-2xl font-bold">0.00</p>
                        </div>
                    </div>
                    
                    <div class="flex justify-between mt-8">
                        <button id="edit-votes-btn" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Edit Votes
                        </button>
                        <button id="submit-votes-btn" class="px-4 py-2 bg-black rounded-md text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Confirm and submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const questions = [
                {
                    title: "Design",
                    text: "Does it effectively engage the user through strategic use of color, typography, and imagery?",
                    progress: "1 / 4"
                },
                {
                    title: "Usability",
                    text: "Can users perform tasks safely, effectively, and efficiently while enjoying the experience?",
                    progress: "2 / 4"
                },
                {
                    title: "Creativity",
                    text: "Does it solve its problems and communicate ideas in an innovative way?",
                    progress: "3 / 4"
                },
                {
                    title: "Content",
                    text: "Is the content useful, of a high quality, and allows the website to fully serve its purpose?",
                    progress: "4 / 4"
                }
            ];

            const titleEl = document.getElementById("question-title");
            const textEl = document.getElementById("question-text");
            const progressEl = document.getElementById("question-progress");
            const buttons = document.querySelectorAll("button[data-step]");
            const prevBtn = document.getElementById("prev-btn");
            const votingScreen = document.getElementById("voting-screen");
            const confirmationScreen = document.getElementById("confirmation-screen");
            const editVotesBtn = document.getElementById("edit-votes-btn");
            const submitVotesBtn = document.getElementById("submit-votes-btn");

            // Score elements
            const designScoreEl = document.getElementById("design-score");
            const usabilityScoreEl = document.getElementById("usability-score");
            const creativityScoreEl = document.getElementById("creativity-score");
            const contentScoreEl = document.getElementById("content-score");
            const averageScoreEl = document.getElementById("average-score");

            let currentIndex = 0;
            const scores = [0, 0, 0, 0]; // To store scores for each question

            function fadeOutIn(element, newContent) {
                element.style.transition = "opacity 0.4s ease";
                element.style.opacity = 0;
                setTimeout(() => {
                    element.innerHTML = newContent;
                    element.style.opacity = 1;
                }, 400);
            }

            function updateUI(index) {
                fadeOutIn(titleEl, questions[index].title);
                fadeOutIn(textEl, questions[index].text);
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
                    // Store the score (using data-value attribute)
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
                // Here you would typically submit the scores to your backend
                alert("Thank you for your vote! Your ratings have been submitted.");
                // You might want to redirect or reset the form here
            });
        </script>
    </div>
    <x-footer></x-footer>
</x-layout>