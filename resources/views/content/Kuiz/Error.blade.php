<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error UI</title>
    <!-- Add your CSS stylesheets or styles here -->
</head>
<body>
    <h1>Sorry!</h1>
    <p>Some of your answers are incorrect. Please try again.</p>

    @foreach ($data as $setName => $set)
        <h2>{{ ucfirst($setName) }}:</h2>
        <ul>
            @foreach ($set['correctAnswers'] as $key => $correctAnswer)
                <li>
                    Question {{ substr($key, -1) }}:
                    Correct answer is {{ $correctAnswer }}
                    @if ($set['userInput'][$key] !== $correctAnswer)
                        (Your answer: {{ $set['userInput'][$key] }})
                    @endif
                </li>
            @endforeach
        </ul>
    @endforeach

    <!-- You can add more content, styling, or links as needed -->
</body>
</html>
