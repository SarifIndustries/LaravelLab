<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palisade blades</title>
</head>
<body>

    <h1> Palisade blades maintanance page </h1>
    <h2> Security office </h2>

    @auth

    <p> You are logged in. </p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>

    <div style="border: 1px solid black; border-radius: 16px; float: center; width: 300px; text-align: center; background: #9562b3; padding: 4px">
        <form action="/create-post" method="POST">
            <h2> Create new note </h2>
            @csrf
            <input name="title" type="text" placeholder="title"> <br>
            <textarea name="content"></textarea> <br>
            <button>Create</button>
        </form>
    </div>

    <hr>

    <div style="border: 3px solid black; border-radius: 16px">
        <h2> &nbsp All posts </h2>
        @foreach($posts as $post)
        <div style="border: 1px solid black; padding: 8px; margin: 8px; background: #dfc092">
            <h3> {{$post['title']}} by {{$post->getUser->name}} </h3>
            <p> {{$post['content']}} </p>
            <p> <a href="/edit-post/{{$post->id}}">Edit</a> </p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    @else

    <h2> Authorize access: <a href="/authorize">link</a> </h2>

    @endauth

    
</body>
</html>
