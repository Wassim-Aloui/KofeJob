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
    <h1>Informations sur les candidatures</h1>
    <p><strong>Nom:</strong> {{ $condidatsAdmin->nom }}</p>
    <p><strong>Prénom:</strong> {{ $condidatsAdmin->prenom }}</p>
    <p><strong>Email:</strong> {{ $condidatsAdmin->email }}</p>
    <p><strong>Lettre de motivation:</strong></p>
    <p>{{ $condidatsAdmin->lettreMotivation }}</p>
    <a href="{{ route('Admin.Condidat.index') }}" class="btn btn-primary">Retour à la liste des candidatures</a>
    </div>
</div>
</div>
@endsection

