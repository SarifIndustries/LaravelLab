<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security office register</title>
</head>
<body>
    <div style="border: 1px solid black; border-radius: 16px; float: center; width: 300px; text-align: center; background: #c06c84; padding: 4px">
        <form action="/register" method="POST">
            <h2> Register </h2>
            @csrf
            <input name="email" type="text" placeholder="email"> <br>
            <input name="login" type="text" placeholder="login"> <br>
            <input name="password" type="password" placeholder="password"> <br>
            <button>Register</button>
        </form>
    </div>
</body>
</html>
