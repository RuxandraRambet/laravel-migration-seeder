<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Station</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5 text-success fw-bold">Treni in Partenza</h1>
        <div class="d-flex flex-wrap gap-3">
            @foreach ($trains as $train)
                <div class="card" style="width: 25rem;">
                    @if ($train['company'] === 'Frecciarossa')
                        <img src="{{ Vite::asset('resources/img/frossa.png') }}" class="card-img-top pt-4"alt="Frecciarossa">
                    @elseif ($train['company'] === 'Italo')
                        <img src="{{ Vite::asset('resources/img/italo.png') }}" class="card-img-top"alt="Italo">
                    @else
                        <img src="{{ Vite::asset('resources/img/trenitalia.png') }}" class="card-img-top"alt="Trenitalia">
                    @endif

                    <div class="card-body">
                        <p class="card-text"><strong>Azienda:</strong> {{ $train['company'] }}</p>
                        <p class="card-text"><strong>Stazione di partenza:</strong> {{ $train['departure_station'] }}</p>
                        <p class="card-text"><strong>Stazione di arrivo:</strong> {{ $train['arrival_station'] }}</p>
                        <p class="card-text"><strong>Orario di partenza:</strong> {{ $train['departure_time'] }}</p>
                        <p class="card-text"><strong>Orario di arrivo:</strong> {{ $train['arrival_time'] }}</p>
                        <p class="card-text"><strong>Codice Treno:</strong> {{ $train['train_code'] }}</p>
                        <p class="card-text"><strong>Numero Carrozze:</strong> {{ $train['number_of_carriages'] }}</p>
                        @if ($train['is_on_time'] === 1)
                            <p class="card-text"><strong>In orario:</strong>Si</p>
                        @else
                            <p class="card-text text-danger fw-bold">Treno cancellato</p>
                        @endif


                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>
