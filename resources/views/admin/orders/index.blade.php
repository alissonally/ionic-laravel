@extends('app')
@section('content')
    <div class="container">
        <h2>Pedidos</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th>Itens</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @if(count($orders) > 0)
                @foreach( $orders as $order)
                    <tr>
                        <td>#{{$order->id}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            <ul>
                            @foreach( $order->items as $item )
                                <li>{{$item->product->name}}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Eitar</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">
                        Nenhum pedido encontrado.
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        {!! $orders->render()!!}
    </div>
@endsection