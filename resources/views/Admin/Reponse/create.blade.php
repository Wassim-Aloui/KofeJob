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
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('Admin.Reponse.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="contenu">Contenu de la Réponse</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="condidat_id">Candidat</label>
                <select class="form-control" id="condidat_id" name="condidat_id" required>
                    @foreach ($condidats as $condidat)
                        <option value="{{ $condidat->id }}">{{ $condidat->nom }} {{ $condidat->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</div>
@endsection
