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
                                <li class="breadcrumb-item" aria-current="page">Update a Gig</li>
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
                        <form action="{{route('Front.Gig.update',$gig->id)}}" method="POST">
                            @csrf
                            <div class="title-box widget-box">

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Gig Title</h3>
                                        <div class="form-group mb-0">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Gig title" value="{{$gig->title}}">
                                            @error('title')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Price</h3>
                                        <div class="form-group price-cont mb-0" id="price_type">
                                          <input type="number" id="price" name="price" class="form-control" value="{{$gig->price}}" >
                                          @error('price')
                                          <small class="form-text text-danger">{{$message}}</small>
                                      @enderror
                                        </div>
                                    </div>
                                </div>


                              

                            

                            

                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Write Description of Gig</h3>
                                        <div class="form-group mb-0">
                                            <textarea id="description" name="description" class="form-control summernote" rows="5">{{$gig->description}}</textarea>
                                            @error('description')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-end">
                                        <div class="btn-item">
                                            <button type="submit" class="btn next-btn">Submit</button>
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
