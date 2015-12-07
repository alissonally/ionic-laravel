@extends('app')
@section('content')
    <div class="container">
        <h2>Pedidos</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @if(count($orders) > 0)
                @foreach( $orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a href="{{route('admin.orders.items', ['id'=>$order->id])}}" class="btn btn-primary btn-sm">Ítems</a>
                            <a href="{{route('admin.orders.edit', ['id'=>$order->id])}}" class="btn btn-primary btn-sm">Eitar</a>
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