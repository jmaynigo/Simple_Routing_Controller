<div>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Skills</title>
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
                <li>{{ $skill1 }}</li>
                <li>{{ $skill2 }}</li>
                <li>{{ $skill3 }}</li>
                <li>{{ $skill4 }}</li>
                <li>{{ $skill5 }}</li>
            </ul>

        </body>
    </html></div>
