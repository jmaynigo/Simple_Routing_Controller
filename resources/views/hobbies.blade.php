<div>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hobbies</title>
        </head>
        <body>
            <button>
                <a href="http://127.0.0.1:8000/aboutMe">About Me</a>
            </button>
            <button>
                <a href="http://127.0.0.1:8000/skills">Skills</a>
            </button>
            <button>
                <a href="http://127.0.0.1:8000/hobbies">Hobbies</a>
            </button>

            <h1>{{ $title }}</h1>
            <ul>
                <li>{{ $hobby1 }}</li>
                <li>{{ $hobby2 }}</li>
                <li>{{ $hobby3 }}</li>
                <li>{{ $hobby4 }}</li>
                <li>{{ $hobby5 }}</li>
            </ul>

        </body>
    </html>
</div>
