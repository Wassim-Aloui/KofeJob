@extends('Layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Liste des candidatures</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Candidatures</li>
                    </ul>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Lettre de Motivation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($condidatsAdmin as $condidat)
                <tr>
                    <td>{{ $condidat->nom }}</td>
                    <td>{{ $condidat->prenom }}</td>
                    <td>{{ $condidat->email }}</td>
                    <td>{{ $condidat->lettreMotivation }}</td>
                    <td>
                    <a href="{{ route('Admin.Condidat.show', $condidat->id) }}" class="btn btn-primary">Voir</a>
                        <form action="{{ route('Admin.Condidat.destroy', $condidat->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
