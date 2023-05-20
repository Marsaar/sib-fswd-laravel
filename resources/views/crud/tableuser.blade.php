<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>Tabel User</title>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>
    <body>
        <h1>Data Pengguna</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
           
            <tbody> 
                @forelse ($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>
                        <form method="POST">
                            <a href=""><button type='button' class='btn btn-primary' name='read'>Detail</button></a>
                            <a href=""><button type='button' class='btn btn-warning' name='submit'>Edit</button></a>
                            <a href=""><button type='button' class='btn btn-danger' name='delete'>Remove</button></a>
                        </form>
                    </td>
                    <td>{{ $u->avatar }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->phone }}</td>
                    <td>{{ $u->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>