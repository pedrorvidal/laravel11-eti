<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Adicionar novo</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td> - </td>
            </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum usuário no banco.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
</body>

</html>