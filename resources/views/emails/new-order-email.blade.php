<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Ordine</title>
</head>

<body>
    <main>
        <div>
            <h2>Nuovo ordine in arrivo</h2>
            <h4>Hai ricevuto un nuovo ordine!</h4>
        </div>

        <div>
            <h3>Dati Cliente:</h3>
            <p>Nome: {{ $order->first_name . $order->last_name }}</p>
            <p>Indirizzo: {{ $order->address }}</p>
            <p>Email: {{ $order->address }}</p>
            <p>Telefono: {{ $order->address }}</p>
        </div>


        </div>
    </main>
</body>

</html>
