<div class="form-group">
    {!! Form::label('Users', 'Entregador:') !!}
    {!! Form::select('user_deliveryman_id', $users, null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::select('status', $users, null,['class'=>'form-control']) !!}
</div>