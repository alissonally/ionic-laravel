@extends('app')
@section('content')
    <div class="container">
        <h2>Editando categoria {{$category->name}}</h2>
        @include('errors._check')
        {!! Form::model($category, ['route'=>['admin.categories.update',$category->id ]]) !!}
        @include('admin.categories._form')
        <div class="form-group">
            {!! Form::submit('Salvar Categoria',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection