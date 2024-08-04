@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Usuário')
@section('content')

<h1>Novo usuário</h1>

<form action="{{ route('users.store')}}" method="POST">
    @csrf()
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form>

@endsection