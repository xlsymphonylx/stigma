@extends('templates.main')

@section('content')
    <div class="container mt-2 mx-auto">
        <div class="text-left">
            <a class="btn btn-primary mb-2" href="{{ route('register') }}">Nuevo</a>
        </div>
        <form action="{{ route('search') }}" method="GET" class="d-flex flex-row justify-content-center">
            @csrf
            @method('GET')
            <div class="form-group w-100">
                <input type="text" class="form-control" id="name" placeholder="Buscar por nombre" name="name">
            </div>

            <div>
                <button type="submit" class="btn btn-primary ml-2">Buscar</button>
            </div>
        </form>
        <table class="table">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="text-center">
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->direction }}</td>
                        <td class="d-flex flex-row justify-content-center">
                            <a class="btn btn-warning mr-2" href="{{ route('edit', $client->id) }}">Editar</a>
                            <form action="{{ route('delete', $client->id) }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
