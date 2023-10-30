<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            margin: 50px;
        }

        .quiz {
            margin-top: 25px;
            display: flex;
            align-items: flex-start;
            gap: 40px;
        }

        .quiz-title {
            font-size: 24px;
            font-weight: 700;
        }

        .quiz-description {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="/">
        @csrf
        <a href="/quiz">Create</a>
    </form>

    @foreach ($quizzes as $quiz)
        <div class="quiz">
            <div>
                <p class="quiz-title">{{ $quiz->title }}</p>
                <p class="quiz-description">{{ $quiz->description }}</p>
            </div>
            <a href="/quiz/{{ $quiz->id }}">Edit</a>
        </div>
    @endforeach
</body>
</html>