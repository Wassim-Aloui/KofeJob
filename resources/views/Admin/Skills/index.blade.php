@extends('Layouts.admin')

@section('content')
    <div class="page-wrapper">
        <!-- Include SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <!-- Include DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.10/css/dataTables.bootstrap4.min.css">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Skills</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Skills</li>
                        </ul>
                    </div>
                    <div class="col-auto">
{{--                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">--}}
                        <a class="btn filter-btn" href="{{ route('admin.skills.create') }}" id="filter_search">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card bg-white projects-card">
                <div class="card-body pt-0">
                    <div class="card-header">
                        <h5 class="card-title">Projects views</h5>
                    </div>
                    <div class="reviews-menu-links">
                        <ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
                            <li class="nav-item">
                                <a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All ({{$len}})</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content pt-0">
                        <div role="tabpanel" id="tab-4" class="tab-pane fade active show">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @isset($skills)

                                            @foreach ($skills as $skill)
                                                <tr>
                                                    <td>{{ $skill->id }}</td>
                                                    <td>{{ $skill->name }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-sm btn-warning">Edit</a>
{{--                                                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" style="display: inline;">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('DELETE')--}}
{{--                                                            <button type="submit" class="btn btn-sm btn-danger delete-skill" data-skill-id="{{ $skill->id }}">Delete</button>--}}
{{--                                                        </form>--}}
                                                        <button type="button" class="btn btn-sm btn-danger delete-skill" data-skill-id="{{ $skill->id }}">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                <form id="delete-form-{{ $skill->id }}" action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

        <script>
            document.querySelectorAll('.delete-skill').forEach(button => {
                button.addEventListener('click', function () {
                    const skillId = this.getAttribute('data-skill-id');

                    Swal.fire({
                        title: 'Confirm Deletion',
                        text: `Are you sure you want to delete this skill?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Delete',
                        cancelButtonText: 'Cancel',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send an AJAX request to delete the skill
                            axios.delete(`{{ route('admin.skills.destroy', '') }}/${skillId}`)
                                .then((response) => {
                                    console.log(response.status)
                                    if (response.status === 204|| response.status === 200) {
                                        // Successful deletion, you can update the UI as needed
                                        Swal.fire({
                                            title: 'Deleted!',
                                            text: 'The skill has been deleted.',
                                            icon: 'success',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // Modify the URL or redirect to a different page
                                                window.location.href = '{{ route('admin.skills.index') }}';
                                            }
                                        });

                                    } else {
                                        Swal.fire('Error', 'Failed to delete the skill.', 'error');
                                    }
                                })
                                .catch((error) => {
                                    Swal.fire('Error', 'An error occurred while deleting the skill.', 'error');
                                });
                        }
                    });
                });
            });
        </script>



    </div>
@endsection
