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

    <p> You are loggen in. </p>

    @else

    <h2> Register account: <a href="/register">link</a> </h2>

    @endauth

    
</body>
</html>
