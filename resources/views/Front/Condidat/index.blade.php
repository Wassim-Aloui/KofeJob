@extends('Layouts.freelancer')

@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Manage candidature</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('Front.Condidat.create') }}" class="btn btn-primary back-btn mb-4">Ajouter une candidature</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="manage-projects.html">All candidature</a>
                </li>
            </ul>
        </nav>

        @isset($condidats)
            @foreach ($condidats as $condidat)
                <div class="my-projects-list">
                    <div class="row">
                        <div class="col-lg-10 flex-wrap">
                            <div class="projects-card flex-fill">
                                <div class="card-body">
                                    <div class="projects-details align-items-center">
                                        <div class="project-info">
                                            <span> {{$condidat->email}} </span>
                                            <h2>{{ $condidat->nom }} {{ $condidat->prenom }}</h2>
                                            <div class="customer-info">
                                                <ul class="list-details">
                                                    <li>
                                                        <strong>Offre :</strong>
                                                        <a href="{{ route('Front.Condidat.showC', ['id' => $condidat->offers->id]) }}">
                                                            {{ $condidat->offers->title }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="project-hire-info">
                                            <div class="content-divider"></div>
                                            <div class="projects-amount">
                                                <h3>lettre de motivation</h3>
                                                <h5>  {{$condidat->lettreMotivation}}</h5>
                                            </div>
                                            <div class="content-divider"></div>
                                            <div class="projects-action text-center">
                                                <a href="{{ route('Front.Condidat.edit', $condidat->id) }}" class="projects-btn">Modifier</a>
                                                <form action="{{ route('Front.Condidat.destroy', $condidat->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="projects-btn">Supprimer</button>
                                                </form>
                                                <button class="projects-btn view-responses" data-condidat-id="{{ $condidat->id }}">Voir les réponses</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset

        <div class="row">
            <div class="col-md-12">
                <ul class="paginations list-pagination">
                    <li class="page-item"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="active">1</a></li>
                    <li class="page-item"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection




<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.view-responses').click(function () {
            var condidatId = $(this).data('condidat-id');

            // Faites une requête Ajax pour obtenir les réponses du candidat
            $.get('{{ route("Admin.Reponse.getReponsesByCondidatId", ":id") }}'.replace(':id', condidatId), function (data) {
                var responseContent = '';

                // Grouping responses by candidate
                var responsesByCandidate = {};

                $.each(data, function (index, response) {
                    var candidateId = response.condidat_id;
                    if (!responsesByCandidate[candidateId]) {
                        responsesByCandidate[candidateId] = [];
                    }
                    responsesByCandidate[candidateId].push(response);
                });

                $.each(responsesByCandidate[condidatId], function (index, response) {
                    responseContent += '<strong>Réponse :</strong> ' + response.contenu + '<br>';
                });

                // Utilisez SweetAlert2 pour afficher les réponses dans une belle popup avec défilement
                Swal.fire({
                    title: 'Réponses du candidat',
                    html: '<div style="max-height: 400px; overflow-y: auto;">' + responseContent + '</div>',
                    icon: 'info',
                    confirmButtonText: 'Fermer'
                });
            });
        });
    });
</script>
