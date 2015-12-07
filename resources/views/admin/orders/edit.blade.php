@extends('app')
@section('content')
    <div class="container">
        <h2>Editando</h2>
        @include('errors._check')
        {!! Form::model($orders, ['route'=>['admin.categories.update',$orders->id ]]) !!}
        @include('admin.orders._form')
        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection