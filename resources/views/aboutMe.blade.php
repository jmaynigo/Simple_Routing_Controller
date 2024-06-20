<div>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>About Me</title>
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
            <p>Hi! I'm <b>{{ $name }}</b> from {{ $address }}.</p>
            <p>I am currently {{ $age }} years old, born on {{ $birthday }}.</p>
            <p>My dream was to become a {{ $dream }} but I am currently studying to become an {{ $currentCareerPath }}.</p>
        
        </body>
    </html>
</div>