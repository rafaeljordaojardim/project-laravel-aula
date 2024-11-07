
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pedidos</title>
</head>
<body>
  @foreach ($pedidos as $pedido)
      <div>ID {{ $pedido->id }} </div>
      <div>Nome: {{ $pedido->user->name }} </div>
      <div>Total: {{ $pedido->total() }} </div>
        @foreach($pedido->items as $item )
          {{$item->nome}}
          {{$item->preco}}
          {{$item->pivot->quantidade}}
          <br>
        @endforeach
      <hr>
  @endforeach
</body>
</html>