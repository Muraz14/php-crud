<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit quiz</title>
</head>
<body>
    <form method="POST" action="/">
        @csrf
        <input name="title" type="text" placeholder="title" value="{{ $quiz ? $quiz->title : '' }}" />
        <input name="description" type="text" placeholder="description" value="{{ $quiz ? $quiz->description : '' }}" />
        <input type="submit" value="Update" />
    </form>
</body>
</html>