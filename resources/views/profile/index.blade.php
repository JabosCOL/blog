@extends('layouts.app')

@section('content')
    
<div class="container">
<h1>Lista de Perfiles</h1>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Website</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($profiles as $profile)           
        
        <tr>
            <td>{{ $profile->id }}</td>
            <td>{{ $profile->title }}</td>
            <td>{{ $profile->biography }}</td>
            <td>{{ $profile->website }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('profile.edit',$profile) }}" >Editar</a>
                <form action="{{ route('profile.destroy',$profile->id)}}" method="post" class="d-inline">|
                    @csrf @method('DELETE')
                    <input type="submit" value="Borrar" class="btn btn-danger" onclick="return confirm('Deseas borrar el perfil?')">
                </form>
            </td>
        </tr>
        @endforeach  
    </tbody>
    
</table>

<a href="{{ route('profile.create') }}" class="btn btn-primary">Nuevo Perfil</a>
</div>
@endsection