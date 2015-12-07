@extends('app')
@section('content')
    <div class="container">
        <h2>Novo cliente</h2>
        @include('errors._check')
        {!! Form::open(['route'=>'admin.clients.store']) !!}

        @include('admin.clients._form')
        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection