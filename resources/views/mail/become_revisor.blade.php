<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it</title>
</head>
<body>
    <style>
        
        
    </style>
    <div>
        <div style="display:flex; justify-content:center; align-items:center">
        <div style="display:flex; align-items:center;">
            <h1 style="font-weight:bold; font-size:48px;">Un utente ha chiesto di diventare revisore</h1>
        </div>
        <div style="display:flex; flex-direction:column; align-items:center">
            <p>Nome:{{$user->name}}</p>
            <p>Email:{{$user->email}}</p>
            <p>Età:{{$data['age']}}</p>
            <p>Messaggio:{{$data['messageR']}}</p>
            <p>Se vuoi renderlo revisore clicca qui, altrimenti ignora questa mail </p>
            <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
        </div>
    </div>
    </div>
</body>
</html>