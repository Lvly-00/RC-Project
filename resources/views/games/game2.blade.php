<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabanata Quiz 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .question {
            margin-bottom: 20px;
        }
        .result {
            font-weight: bold;
            margin-top: 20px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Kabanata Quiz</h1>
    <div id="quiz-container">
        <!-- Quiz content will be dynamically loaded here -->
    </div>
    <div id="result-container" class="hidden">
        <p class="result"></p>
        <button id="next-chapter" class="hidden">Next Chapter</button>
    </div>

    <script>
        const chapters = 30;
        const questionsPerChapter = 5;
        const extraQuestions = 5;
        const requiredScore = 3; // Minimum score to proceed to the next chapter

        let currentChapter = 1;
        let score = 0;

        // Sample questions for each chapter (replace with actual questions)
        const questions = {
            1: [
                { question: "Kabanata 1 Question 1", options: ["A", "B", "C", "D"], answer: "A" },
                { question: "Kabanata 1 Question 2", options: ["A", "B", "C", "D"], answer: "B" },
                { question: "Kabanata 1 Question 3", options: ["A", "B", "C", "D"], answer: "C" },
                { question: "Kabanata 1 Question 4", options: ["A", "B", "C", "D"], answer: "D" },
                { question: "Kabanata 1 Question 5", options: ["A", "B", "C", "D"], answer: "A" }
            ],
            // Add questions for other chapters here...
            30: [
                { question: "Kabanata 30 Question 1", options: ["A", "B", "C", "D"], answer: "A" },
                { question: "Kabanata 30 Question 2", options: ["A", "B", "C", "D"], answer: "B" },
                { question: "Kabanata 30 Question 3", options: ["A", "B", "C", "D"], answer: "C" },
                { question: "Kabanata 30 Question 4", options: ["A", "B", "C", "D"], answer: "D" },
                { question: "Kabanata 30 Question 5", options: ["A", "B", "C", "D"], answer: "A" }
            ],
            extra: [
                { question: "Extra Question 1", options: ["A", "B", "C", "D"], answer: "A" },
                { question: "Extra Question 2", options: ["A", "B", "C", "D"], answer: "B" },
                { question: "Extra Question 3", options: ["A", "B", "C", "D"], answer: "C" },
                { question: "Extra Question 4", options: ["A", "B", "C", "D"], answer: "D" },
                { question: "Extra Question 5", options: ["A", "B", "C", "D"], answer: "A" }
            ]
        };

        function loadQuiz(chapter) {
            const quizContainer = document.getElementById('quiz-container');
            quizContainer.innerHTML = '';

            const chapterQuestions = questions[chapter];
            const extra = questions.extra;

            // Randomly select 5 questions (4 from chapter, 1 extra)
            const selectedQuestions = [...chapterQuestions.slice(0, 4), extra[Math.floor(Math.random() * extra.length)]];

            selectedQuestions.forEach((q, index) => {
                const questionDiv = document.createElement('div');
                questionDiv.className = 'question';
                questionDiv.innerHTML = `<p>${index + 1}. ${q.question}</ <p>${index + 1}. ${q.question}</p>`;
                q.options.forEach(option => {
                    questionDiv.innerHTML += `<label><input type="radio" name="question${index}" value="${option}"> ${option}</label><br>`;
                });
                quizContainer.appendChild(questionDiv);
            });

            const submitButton = document.createElement('button');
            submitButton.innerText = 'Submit';
            submitButton.onclick = submitQuiz;
            quizContainer.appendChild(submitButton);
        }

        function submitQuiz() {
            const chapterQuestions = questions[currentChapter];
            score = 0;

            const selectedQuestions = [...chapterQuestions.slice(0, 4), questions.extra[Math.floor(Math.random() * questions.extra.length)]];

            selectedQuestions.forEach((q, index) => {
                const selectedOption = document.querySelector(`input[name="question${index}"]:checked`);
                if (selectedOption && selectedOption.value === q.answer) {
                    score++;
                }
            });

            const resultContainer = document.getElementById('result-container');
            const resultText = resultContainer.querySelector('.result');
            resultText.innerText = `You scored ${score} out of ${questionsPerChapter + 1}.`;

            if (score >= requiredScore) {
                resultContainer.querySelector('#next-chapter').classList.remove('hidden');
                resultContainer.querySelector('#next-chapter').onclick = nextChapter;
            } else {
                resultText.innerText += ' You need to score at least 3 to proceed.';
            }

            resultContainer.classList.remove('hidden');
        }

        function nextChapter() {
            if (currentChapter < chapters) {
                currentChapter++;
                score = 0;
                document.getElementById('result-container').classList.add('hidden');
                loadQuiz(currentChapter);
            } else {
                alert('You have completed all chapters!');
            }
        }

        // Load the first chapter on page load
        loadQuiz(currentChapter);
    </script>
</body>
</html>
