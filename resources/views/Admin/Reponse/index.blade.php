@extends('Layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Liste des candidats</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Candidats</li>
                    </ul>
                    <a href="{{ route('Admin.Reponse.create') }}" class="btn btn-primary">Ajouter une reponse</a>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Contenu</th>
                    <th>Candidat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reponses as $reponse)
                    <tr>
                        <td>{{ $reponse->id }}</td>
                        <td>{!! nl2br(e($reponse->contenu)) !!}</td>
                        <td>{{ $reponse->condidat->nom }} {{ $reponse->condidat->prenom }}</td>
                        <td>
                            <a href="{{ route('Admin.Reponse.edit', $reponse->id) }}" class="btn btn-primary">Éditer</a>
                            <form action="{{ route('Admin.Reponse.destroy', $reponse->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
