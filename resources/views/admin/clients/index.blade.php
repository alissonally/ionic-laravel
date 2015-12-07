@extends('app')
@section('content')
    <div class="container">
        <h2>Clientes</h2>
        <a href="{{route('admin.clients.create')}}" class="btn btn-default">Novo produto</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fone</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->state}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->zipcode}}</td>
                    <td>
                        <a href="{{route('admin.clients.edit', ['id'=>$client->id])}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{route('admin.clients.destroy', ['id'=>$client->id])}}" class="btn btn-danger btn-sm">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $clients->render()!!}
    </div>
@endsection