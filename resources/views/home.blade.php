<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello-world di Laravel</h1>
    <header>
        <h3>Le scimmie più forti secondo me</h3>
        <ol>
            @foreach ($apes as $ape)
                <li>{{$ape}}</li>  
            @endforeach
        </ol>
    </header>
    <a href="/first_page">Momento SIMIA</a>
</body>
</html>