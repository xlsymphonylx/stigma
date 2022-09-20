@extends('templates.main')

@section('content')
    <div class="container mt-5 p-2 ">
        <form action="{{ route('update', $client->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <h3 class="text-center bold">Edicion de cliente</h3>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $client->name }}" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $client->telephone }}" name="telephone"
                    placeholder="Telefono">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $client->direction }}" name="direction"
                    placeholder="Direccion">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
