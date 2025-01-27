<!DOCTYPE html>
<html>

<head>
    <title>Kabanata {{ 1 }}</title>
    @vite(['resources\css\game.css', 'resources\js\app.js'])

    <script>
        const minScore = 3; // Set your minimum required score here
        const highlightWords = ["nakalulunos", "kutad", "ganid ", "mapanglaw", "kahapisa't "]; // Define the words to highlight

        function checkAnswer(event, choiceId, isCorrect) {
            event.preventDefault();
            const choiceElement = document.getElementById('choice_' + choiceId);
            const questionId = choiceElement.getAttribute('data-question-id');
            const currentChoices = document.querySelectorAll(`[data-question-id='${questionId}']`);

            currentChoices.forEach(choice => {
                choice.classList.remove('selected', 'correct', 'incorrect');
            });

            choiceElement.classList.add('selected');
            if (isCorrect) {
                choiceElement.classList.add('correct');
            } else {
                choiceElement.classList.add('incorrect');
            }
        }

        function highlightQuestionText() {
            document.querySelectorAll('.question').forEach(question => {
                let questionText = question.innerHTML;
                highlightWords.forEach(word => {
                    const regex = new RegExp(`(${word})`, 'gi');
                    questionText = questionText.replace(regex, '<span class="highlight">$1</span>');
                });
                question.innerHTML = questionText;
            });
        }

        function submitQuiz(event, nextChapter) {
            event.preventDefault();
            let score = 0;
            document.querySelectorAll('.choice.correct.selected').forEach(() => {
                score++;
            });

            document.getElementById('score-message').innerText = 'Your score: ' + score + ' / {{ count($questions) }}';

            if (score >= minScore) {
                document.querySelector('input[name="chapter_number"]').value = nextChapter;
                document.getElementById('quiz-form').submit();
            } else {
                document.getElementById('warning-message').innerText = 'You need a score of at least ' + minScore +
                    ' to proceed to the next chapter.';
                document.getElementById('warning-modal').style.display = 'block';
            }
        }

        function closeModal() {
            document.getElementById('warning-modal').style.display = 'none';
        }

        window.onload = function() {
            highlightQuestionText();
        };
    </script>
</head>

<body>
    <div class="scroll">
        <h1>Kabanata {{ 1 }}</h1>
        <form id="quiz-form" action="{{ route('kabanata.next', ['chapter' => 3]) }}" method="POST">
            @csrf
            <input type="hidden" name="chapter_number" value="">
            @foreach ($questions as $question)
                <div class="flashcard">
                    <h2 class="question">{{ $question->question }}</h2>
                    @foreach ($question->choices as $choice)
                        <span class="choice" id="choice_{{ $choice->id }}" data-question-id="{{ $question->id }}"
                            onclick="checkAnswer(event, {{ $choice->id }}, {{ $choice->is_correct ? 'true' : 'false' }})">
                            {{ $choice->choice }}
                            @if ($choice->is_correct)
                                <strong>(Correct Answer)</strong>
                            @endif
                        </span>
                    @endforeach
                </div>
            @endforeach

            <button type="button" onclick="submitQuiz(event, 2)">Next</button>
            <!-- Change '2' to the desired chapter number -->
        </form>
        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>

    </div>

    <div id="warning-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="warning-message"></p>
            <p id="score-message"></p>
        </div>
    </div>
</body>

</html>
