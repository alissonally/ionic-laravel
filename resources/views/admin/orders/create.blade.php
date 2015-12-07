@extends('app')
@section('content')
    <div class="container">
        <h2>Nova categoria</h2>
        @include('errors._check')
        {!! Form::open(['route'=>'admin.categories.store']) !!}

        @include('admin.categories._form')
        <div class="form-group">
            {!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection