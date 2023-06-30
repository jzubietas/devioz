@extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Editar permiso</h2>
        <div class="lead">
            Editando permiso.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre permiso</label>
                    <input value="{{ $permission->name }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Salvar permiso</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Volver</a>
            </form>
        </div>

    </div>
@endsection
