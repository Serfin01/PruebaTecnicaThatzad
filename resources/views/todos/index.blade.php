<!--
@extends('mainPc')

@section('content')

    <div class="container w-25 border p-4 mt-5">
        <form action="{{route('todos')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tittle" class="form-label">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</label>
                <input type="text" name="tittle" placeholder="Introduce el código postal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
                <div class="form-text">¡Que la lluvia no te pare!</div>
        </form>
    </div>

@endsection-->