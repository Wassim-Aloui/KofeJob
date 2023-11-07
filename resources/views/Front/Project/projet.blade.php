
@extends('Layouts.Project')

@section('content')

    <div class="col-xl-3 col-md-4 theiaStickySidebar">
        <div class="settings-widget">
            <div
                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                <a href="user-account-details.html"></a>
                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                    <a href="user-account-details.html">
                        <h3 class="mb-0">  <i class="fas fa-sitemap" style="margin-right: 5px;"></i>  Categories</h3>
                    </a>
                </div>
            </div>
            @foreach ($categories as $category)
                <div class="settings-menu" style="border-bottom: 1px solid #ccc; padding: 5px 0;">
                    <ul>
                        <li class="nav-item" >
                            <a href="{{ route('projet.indexFront', ['category' => $category->slug]) }}" class="nav-link">
                                {{ $category->slug }}
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>
    </div>


    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                                    <h3>Manage Projects</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-proj" class="btn btn-primary back-btn mb-4">Add Project</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs mb-4">

                                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">

                                        <li class="nav-item">
                                            <a class="nav-link active" href="freelancer-ongoing-projects.html">Ongoing Projects</a>
                                        </li>


                                    </ul>
                                </nav>


                            @foreach($projets as $projet)

                            <div class="my-projects-list">
                                <div class="row">
                                    <div class="col-lg-12 flex-wrap">
                                        <div class="projects-card flex-fill">
                                            <div class="card-body">
                                                <div class="projects-details align-items-center">

                                                    <div class="project-info project">
                                                        <h2>{{$projet->title}}</h2>
                                                        <div class="proposal-client">
                                                            <h4 class="title-info">Client Price</h4>
                                                            <div class="d-flex">
                                                                <h3 class="client-price me-2">{{$projet->budget}}DNT</h3>
                                                                <p class="amnt-type">( FIXED )</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="project-hire-info project">
                                                        <div class="content-divider"></div>
                                                        <div class="proposer-info project">

                                                            <div class="proposer-detail">
                                                                <h4>Company :{{$projet->company}}</h4>
                                                                <ul class="proposal-details">
                                                                    <li><i class="fas fa-star text-primary"></i> Technology: {{$projet->technology}}</li>
                                                                    <li><i class="fas fa-sitemap text-primary"></i> Category: {{$projet->category->name}}</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-divider"></div>
                                                        <div class="projects-action text-start project">
{{--                                                            <a href="freelancer-view-project-detail.html" class="projects-btn project">Show details </a>--}}
                                                            <a  class="projects-btn project edit-projet  " data-id="{{$projet->id}}" data-bs-toggle="modal"  data-bs-target="#edit-proj">Show details  <i class="far fa-edit"></i></a>


                                                            <p class="hired-detail">Project taken on</p>
                                                            <p class="hired-date">{{$projet->start_date}}</p>
                                                            <p class="hired-detail">Project due date</p>
                                                            <p class="hired-date">{{$projet->due_date}}</p>
                                                            <a  class="btn btn-sm text-primary delete-projet"   data-id="{{$projet->id}}" data-bs-toggle="modal"data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


        <div class="modal custom-modal fade" id="delete_category" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{url('deleteProjet')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="form-header">
                                <h3>Delete</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <input type="hidden" id="delete_id" name="delete_id">
                            <div class="modal-btn delete-action">

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" style="width:200px" class="projects-btn btn-primary continue-btn">Delete</button>
                                    </div>
                                    <div class="col-6">
                                        <button data-bs-dismiss="modal" style="width:230px" class="projects-btn btn-primary cancel-btn">Cancel</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade custom-modal" id="edit-proj">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Projects</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('updateProjet')}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="proj_id" id="proj_id" >

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Budget</label>
                                <input type="number" class="form-control" name="budget" id="budget">
                            </div>

                            <div class="form-group">

                                <label for="progressValue">Progress:</label>


                                <div class="form-control"> <!-- Replace "form-group" with the appropriate CSS class for your styling -->

                                    <input type="range" name="progress" id="progress" min="0" max="100" step="1" value="50"
                                           style="width: 100%; margin-top: 5px; margin-bottom: 10px;"
{{--                                           oninput="updateProgressValue(this.value)"--}}
                                    >
                                    {{--                            <span id="progressValueDisplay">50</span>--}}

                                </div>

                            </div>



                            <div class="form-group">
                                <label>Technology</label>
                                <input type="text" name="technology" id="technology" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category:</label>
                                <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ isset($projet) && $projet->category_id === $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" id="company" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>From Date</label>
                                <div class="">
                                    <input class="form-control " name="start_date" id="start_date" type="date" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>To Date</label>
                                <div class="">
                                    <input class="form-control "  name="due_date" id="due_date" type="date" >
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--debut modal ajout--}}

        <div class="modal fade custom-modal" id="add-proj">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Projects</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{url('/projet/add')}}" method="post" id="add-proj-form">
                            {{ csrf_field() }}

                            <input type="hidden" name="proj_id" id="proj_id" >
<input type="hidden" name="user_id" id="user_id">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter a title">
                                <span id="title-error" class="text-danger validation-error "></span>

                            </div>
                            <div class="form-group">
                                <label>Budget</label>
                                <input type="number" class="form-control" name="budget" id="budget" placeholder="Budget">
                                <span id="budget-error" class="text-danger validation-error"></span>

                            </div>

                            <div class="form-group">

                                <label for="progressValue">Progress:</label>


                                <div class="form-control"> <!-- Replace "form-group" with the appropriate CSS class for your styling -->

                                    <input type="range" id="progress" name="progress" min="0" max="100" step="1" value="0"
                                           style="width: 100%; margin-top: 5px; margin-bottom: 10px;"
{{--                                           oninput="updateProgressValue(this.value)"--}}
                                    >
                                    {{--                            <span id="progressValueDisplay">50</span>--}}

                                </div>

                            </div>

                            <div class="form-group">
                                <label>Technology</label>
                                <input type="text" name="technology" id="technology" class="form-control" placeholder="Enter a technology">
                                <span id="technology-error" class="text-danger validation-error"></span>

                            </div>
                            <div class="form-group">
                                <label >Category:</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" disabled selected>Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                <span id="category_id-error" class="text-danger validation-error"></span>

                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" id="company" class="form-control"placeholder="Enter a company">
                                <span id="company-error" class="text-danger validation-error"></span>

                            </div>
                            <div class="form-group">
                                <label>From Date</label>
                                <div class="">
                                    <input class="form-control " name="start_date" id="start_date" type="date" >
                                    <span id="start_date-error" class="text-danger validation-error"></span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>To Date</label>
                                <div class="">
                                    <input class="form-control "  name="due_date" id="due_date" type="date" >
                                    <span id="due_date-error" class="text-danger validation-error"></span>

                                </div>
                            </div>
                            <input class="form-control "  name="end_date" id="end_date" type="hidden" value="2023-01-01" >

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                        <div id="error-messages" class="text-danger"></div>

                    </div>
                </div>
            </div>
        </div>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.delete-projet').on('click', function () {
                var cat_id = $(this).data('id');
                $('#delete_id').val(cat_id);
            })
            $('.edit-projet').on('click',function (){
                var proj_id=$(this).data('id');
                //alert(proj_id)
                console.log(proj_id)
                $.ajax(({
                    type:"GET",
                    url:"edit-projet/"+proj_id,
                    success:function (response){
                        // var category_name= response.projet.category.name;
                        console.log(response.projet);
                        $('#title').val(response.projet.title);
                        $('#technology').val(response.projet.technology);
                        $('#company').val(response.projet.company);
                        $('#budget').val(response.projet.budget);
                        $('#progress').val(response.projet.progress);
                        $('#start_date').val(response.projet.start_date);
                        $('#due_date').val(response.projet.due_date);
                        // $('#category_id').val(response.projet.category.name);
                        var categoryToSelect = response.projet.category.name; // Replace this with the category name you want to select

// Find the option with a value that matches the category name and set it as selected
                        $('#category_id option').filter(function() {
                            return $(this).text() === categoryToSelect;
                        }).prop('selected', true);

                        $('#proj_id').val(response.projet.id);

                    }
                }))
            });
        });

    </script>
    <script>
        // Get the range input element
        var progressInput = document.getElementById("progress");

        // Get the span element to display the percentage
        var progressValue = document.getElementById("progressValue");

        // Add an event listener to update the percentage value when the range input changes
        progressInput.addEventListener("input", function() {
            // Update the span with the current value and add a "%" symbol
            progressValue.textContent = progressInput.value + "%";
        });
    </script>
    <script>
        function updateProgressValue(value) {
            document.getElementById('progressValueDisplay').textContent = value;
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#add-proj-form').on('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission
                clearValidationErrors();

                // Serialize the form data
                var formData = $(this).serialize();

                // Make an Ajax request to the controller for validation
                $.ajax({
                    type: 'POST',
                    url: '{{ url("/projet/add") }}',
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            // If validation is successful, you can close the modal and do any further processing
                            $('#add-proj').modal('hide'); // Assuming the modal ID is 'add-proj'
                            // Perform any additional actions you need
                            window.location.href = '{{ url("/projetFront") }}';

                        } else {
                            console.log('Validation Errors:');
                            console.log(response.errors);
                            // If there are validation errors, display the errors under their inputs
                            $.each(response.errors, function(field, error) {

                                $('#' + field + '-error').text(error); // Display error under the appropriate field
                            });                    }
                    }
                });
            });
        });
        function clearValidationErrors() {
            $('.validation-error').text(''); // Assuming you have a common class for all error message elements
        }
    </script>
@endsection
