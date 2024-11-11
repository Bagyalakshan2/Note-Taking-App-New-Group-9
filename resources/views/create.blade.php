<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
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

        /* Container for the form */
        div {
            background-color: rgb(205, 189, 219);
            padding: 30px;
            border: 2px solid rgb(205, 189, 219);
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            color: rgb(54, 66, 67);
            width: 100%;
            max-width: 400px;
            height: auto;
            font-family: inherit;
        }

        /* Title of the page */
        h1 {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Label and Input Fields */
        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: inline-block;
        }

        input, textarea {
            padding: 10px;
            width: 100%;
            border: none;
            border-bottom: 2px solid #333;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        /* Button styles */
        button {
            width: 100%;
            padding: 12px;
            background-color: rgb(54, 66, 67);
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            transition: background-color 0.4s;
        }

        button:hover {
            background-color: rgb(72, 100, 102);
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
            margin-top: 20px;
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
        <h1>Create a New Note</h1>

        <form action="/notes" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" required placeholder="Enter note title">
            <br>
            <label for="content">Content:</label>
            <textarea name="content" required placeholder="Enter note content"></textarea>
            <br>
            <button type="submit">Create Note</button>
        </form>

        <a href="/">Back to Notes</a>
    </div>
</body>
</html>
