@extends('app')
@section('content')
    <div class="container">
        <h2>Novo produto</h2>
        @include('errors._check');
        {!! Form::open(['route'=>'admin.products.store']) !!}

        @include('admin.products._form');
        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection