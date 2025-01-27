<!DOCTYPE html>
<html>
<head>
    <title>K {{ 2 }}</title>
    <style>
        .choice {
            display: inline-block;
            margin-bottom: 10px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f1f1f1;
            cursor: pointer;
            margin-right: 10px;
        }
        .choice.correct {
            background-color: #d4edda; /* Light green */
            border-color: #c3e6cb;
        }
        .choice.incorrect {
            background-color: #f8d7da; /* Light red */
            border-color: #f5c6cb;
        }
        .flashcard {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .choice.selected {
            background-color: #cce5ff; /* Light blue */
            border-color: #b8daff;
        }
    </style>
    <script>
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

        function submitQuiz(event, nextChapter) {
            event.preventDefault();
            let score = 0;
            document.querySelectorAll('.choice.correct.selected').forEach(() => {
                score++;
            });
            alert('Your score: ' + score + ' / {{ count($questions) }}');
            document.querySelector('input[name="chapter_number"]').value = nextChapter;
            document.getElementById('quiz-form').submit();
        }
    </script>
</head>
<body>
    <h1>Kabanata {{ 2 }}</h1>
    <form id="quiz-form" action="{{ route('kabanata.next', ['chapter' => 3]) }}" method="POST">
        @csrf
        <input type="hidden" name="chapter_number" value="">
        @foreach ($questions as $question)
            <div class="flashcard">
                <h3>{{ $question->question }}</h3>
                @foreach ($question->choices as $choice)
                    <span class="choice" id="choice_{{ $choice->id }}" data-question-id="{{ $question->id }}" onclick="checkAnswer(event, {{ $choice->id }}, {{ $choice->is_correct ? 'true' : 'false' }})">
                        {{ $choice->choice }}
                    </span>
                @endforeach
            </div>
        @endforeach
        <button type="button" onclick="submitQuiz(event, 3)">Next</button> <!-- Change '2' to the desired chapter number -->
    </form>

</body>
</html>
