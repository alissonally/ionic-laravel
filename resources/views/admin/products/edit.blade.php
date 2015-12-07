@extends('app')
@section('content')
    <div class="container">
        <h2>Editando produto {{$products->name}}</h2>
        @include('errors._check')
        {!! Form::model($products, ['route'=>['admin.products.update',$products->id ]]) !!}
        @include('admin.products._form')
        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection