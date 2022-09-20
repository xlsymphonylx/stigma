@extends('templates.main')

@section('content')
    <div class="container mt-5 p-2 ">
        <form action="{{ route('create') }}" method="POST">
            @csrf
            @method('POST   ')
            <h3 class="text-center bold">Creacion de cliente</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telephone" placeholder="Telefono">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="direction" placeholder="Direccion">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
