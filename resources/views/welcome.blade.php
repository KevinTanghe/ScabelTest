<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Test Scabel</h1>
    </header>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="row">
                <div class="col-12">
                    <div class="card alert alert-success">
                        <div class="card-body">
                            <p class="mb-0">{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <form action="test" method="POST">
            @csrf
            <div>
                <label for="">texte</label>
                <input type="text" name="text">
            </div>
            <div>
                <label for="">chiffre</label>
                <input type="text" name="number">
            </div>
            <div>
                <label for="">Date</label>
                <input type="text" name="date">
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
