@extends('Layouts.Project')

@section('content')
    <div class="col-xl-12 col-md-12">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Offre</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('Front.Condidat.index') }}" class="btn btn-primary back-btn mb-4">Retour à la liste des candidats</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Offre Details</a>
                </li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="blog grid-blog">
                    <div class="blog-content">
                        <p class="mb-0"><strong>Titre:</strong> {{ $condidatsOffer->title }}</a></p>
                        <p class="mb-0"><strong>Description:</strong> {{ $condidatsOffer->description }}</p>
                        <ul class="entry-meta meta-item">

                            <li><i class="far fa-clock"><p><strong>Créée le :</strong> {{ $condidatsOffer->created_at }}</p></i> Date de création</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
