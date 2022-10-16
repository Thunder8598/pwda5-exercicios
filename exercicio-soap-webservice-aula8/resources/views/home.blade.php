<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
</head>

<body>
    <main class="container d-flex justify-content-center">
        <form class="row g-3" method="POST" action="/enviar">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">CEP</label>
                <input type="text" name="cep" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            @csrf
        </form>
    </main>
</body>

</html>