
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Details</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the note details */
        div {
            background-color: rgb(205, 189, 219);
            padding: 30px;
            border: 2px solid rgb(205, 189, 219);
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            color: rgb(54, 66, 67);
            width: 100%;
            max-width: 600px;
            font-family: inherit;
        }

        /* Title of the note */
        h1 {
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Content of the note */
        p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        /* Back Link */
        a {
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            background-color: rgb(54, 66, 67);
            color: white;
            border-radius: 7px;
            text-align: center;
            display: block;
            width: 100%;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
            transition: background-color 0.4s;
        }

        a:hover {
            background-color: rgb(72, 100, 102);
        }
    </style>
</head>
<body>

    <div>
        <h1>{{ $note->title }}</h1>
        <p>{{ $note->content }}</p>

        <!-- Link back to the list of notes -->
        <a href="{{ route('notes.index') }}">Back to Notes</a>
    </div>
</body>
</html>

