<!-- Name Field -->
<div class="row col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="row col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Field -->
<div class="row col-sm-6">
    {!! Form::label('rol', 'Rol:') !!}
    <p>{{ implode( ", ",$user->getRoleNames()->toArray())}}</p>
</div>