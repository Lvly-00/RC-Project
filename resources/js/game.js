import "./bootstrap";
// Function to show the sidebar with the selected word's data
const questionContainer = document.getElementById("question-container");
const resultContainer = document.getElementById("result-container");
const resultText = document.getElementById("result");
const nextChapterButton = document.getElementById("next-chapter");
const submitAnswerButton = document.getElementById("submit-answer");
const retryButton = document.getElementById("retry-button");
const answerInput = document.getElementById("answer");
const questionText = document.getElementById("question");

let score = 0;
let currentQuestionIndex = 0;
let selectedQuestions = [];
const requiredScore = 3; // User needs to answer at least 3 out of 5 questions correctly

// List of all 10 questions and their correct answers
const allQuestions = [
    { question: "What is the capital of France?", answer: "paris" },
    {
        question: "What is the largest planet in our solar system?",
        answer: "jupiter",
    },
    { question: "Who wrote 'Romeo and Juliet'?", answer: "shakespeare" },
    { question: "What is the chemical symbol for water?", answer: "h2o" },
    { question: "What is the smallest prime number?", answer: "2" },
    { question: "What is the capital of Japan?", answer: "tokyo" },
    { question: "What is the square root of 64?", answer: "8" },
    { question: "Who painted the Mona Lisa?", answer: "leonardo da vinci" },
    {
        question: "What is the freezing point of water in Celsius?",
        answer: "0",
    },
    { question: "What is the largest ocean on Earth?", answer: "pacific" },
];

// Function to randomly select 5 questions from the list
function selectRandomQuestions() {
    const shuffled = allQuestions.sort(() => 0.5 - Math.random()); // Shuffle all questions
    selectedQuestions = shuffled.slice(0, 5); // Select the first 5
}

function displayQuestion() {
    console.log(
        "Displaying question:",
        selectedQuestions[currentQuestionIndex]
    );
    if (currentQuestionIndex < selectedQuestions.length) {
        questionText.textContent =
            selectedQuestions[currentQuestionIndex].question;
        answerInput.value = ""; // Clear the input field
    } else {
        // End of quiz
        questionContainer.style.display = "none";
        resultContainer.style.display = "block";
        resultText.textContent = `You scored ${score} out of ${selectedQuestions.length}.`;
        nextChapterButton.disabled = score < requiredScore;
    }
}

// Event listener for submitting the answer
submitAnswerButton.addEventListener("click", () => {
    console.log("Submit button clicked");
    const userAnswer = answerInput.value.trim().toLowerCase();
    const correctAnswer = selectedQuestions[currentQuestionIndex].answer;

    if (userAnswer === correctAnswer) {
        score += 1;
        resultText.textContent = "Correct! Next question.";
    } else {
        resultText.textContent = "Incorrect! Try again.";
    }

    currentQuestionIndex++;
    displayQuestion();
});

// Event listener for the "Next Chapter" button
nextChapterButton.addEventListener("click", () => {
    if (score >= requiredScore) {
        alert("Proceeding to the next chapter...");
        // Redirect to the next chapter or game
        window.location.href = "next-chapter.html";
    } else {
        alert("You need to score higher to proceed.");
    }
});

// Event listener for the "Retry" button
retryButton.addEventListener("click", () => {
    // Reset the quiz
    score = 0;
    currentQuestionIndex = 0;
    selectRandomQuestions(); // Select new random questions
    resultText.textContent = "";
    nextChapterButton.disabled = true;
    questionContainer.style.display = "block";
    resultContainer.style.display = "none";
    displayQuestion(); // Display the first question
});
document.addEventListener("DOMContentLoaded", () => {
    selectRandomQuestions();
    displayQuestion();
});

let currentChapter = 1; // This should be dynamically set based on the player's progress

// Function to update the next chapter link
function updateNextChapterLink() {
    const nextChapter = currentChapter + 1;
    const nextChapterLink = document.getElementById("next-chapter-link");
    nextChapterLink.href = `{{ route('kabanata') }}${nextChapter}`;
}

// Call the function to update the link when the page loads or when the chapter changes
updateNextChapterLink();

// Example: Enable the "Next Chapter" button when the player completes the current chapter
document.getElementById("next-chapter").disabled = false;
