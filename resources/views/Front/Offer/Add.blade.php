@extends('Layouts.site')


@section('content')
    <div class="bread-crumb-bar">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><img src="Assets/img/home-icon.svg" alt>
                                        Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Post an Offer</li>
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
                        <form action="{{ route('offers.store') }}" method="POST">
                        @csrf <!-- CSRF token -->

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="skills">Select Skills</label>
                                <div class="container">
                                    @foreach ($skills as $skill)
                                        <input type="checkbox" name="skills[]" value="{{ $skill->id }}" class="btn-check" id="{{$skill->id}}" autocomplete="off"/>
                                        <label class="btn btn-sm btn-outline-danger" for="{{$skill->id}}"><strong>{{ $skill->name }}</strong></label>
                                    @endforeach
                                </div>
{{--                                <select name="skills[]" id="skills" class="form-control" multiple>--}}
{{--                                    @foreach ($skills as $skill)--}}
{{--                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
                            </div>

                            <button type="submit" class="btn btn-primary">Create Offer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
