<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conferma Ordine</title>
</head>


<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Il tuo ordine presso {{ $restaurant->name }} è stato ricevuto!!</h2>

                </div>
            </div>

            <div class="col-12">
                <p>{{ $order->first_name . ' ' . $order->last_name }} Ti ringraziamo per averci scelto! il tuo ordine
                    con numero {{ $order->id }} è in fase di preparazione.
                </p>

            </div>

            <div class="col-12">
                <h3>Dettagli ordine:</h3>
                @foreach ($plates as $plate)
                    <div>
                        <p>Piatto: {{ $plate->name }}</p>
                        <p>Quantità: {{ $plate->pivot->quantity }}</p>
                        <p>Prezzo: {{ $plate->price }} €</p>
                        <p>Totale Parziale:{{ $plate->price * $plate->pivot->quantity }} €</p>
                    </div>
                @endforeach
                <div class="col-12">
                    <p>Totale: {{ $order->total }} €</p>
                </div>
            </div>

        </div>
    </main>
</body>

</html>
