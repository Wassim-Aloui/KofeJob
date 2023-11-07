
@extends('Layouts.site')

@section('content')
    <div class="bread-crumb-bar">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><img src="Assets/img/home-icon.svg" alt> Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Ajouter une candidature</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select-project mb-4">
                        <form action="{{ route('Front.Condidat.store') }}" method="POST">
                            @csrf
                            <div class="title-box widget-box">

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h1>Ajouter une candidature</h1>
                                        <div class="form-group mb-0">
                                            <label for="nom"><h3>Nom</h3></label>
                                            <input type="text" id="nom" name="nom" class="form-control" required>
                                            @error('nom')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="title-content">
                                    <div class="title-detail">

                                        <div class="form-group mb-0">
                                            <label for "prenom"><h3>Prénom</h3></label>
                                            <input type="text" id="prenom" name="prenom" class="form-control" required>
                                            @error('prenom')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="title-content">
                                    <div class "title-detail">

                                    <div class="form-group mb-0">
                                        <label for="email"><h3>Email</h3></label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                        @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="title-content">
                                <div class="title-detail">

                                    <div class="form-group mb-0">
                                        <label for="lettreMotivation"><h3>Lettre de motivation</h3></label>
                                        <textarea id="lettreMotivation" name="lettreMotivation" class="form-control" required></textarea>
                                        @error('lettreMotivation')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="title-content">
                                <div class="title-detail">
                                    <label for="offers_id"><h3>Offre associée</h3></label>
                                    <select name="offers_id" id="offers_id" class="form-control" required>
                                        <option value="" disabled selected>Choisissez une offre</option>
                                        @foreach($offers as $offer)
                                            <option value="{{ $offer->id }}">{{ $offer->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('offers_id')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-end">
                                    <div class="btn-item">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
