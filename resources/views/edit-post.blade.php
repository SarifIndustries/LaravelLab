<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border: 1px solid black; border-radius: 16px; float: center; width: 300px; text-align: center; background: #71f4f8; padding: 4px">
        <form action="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <h2> Edit Post </h2>
            <input name="title" type="text" value={{$post->title}}> <br>
            <textarea name="content">{{$post->content}}</textarea> <br>
            <button>Save</button>
        </form>
    </div>
</body>
</html>