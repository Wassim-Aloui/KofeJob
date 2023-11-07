@extends('Layouts.Project')


@section('content')



    <div class="content">
    <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select-project mb-4">
                        <form action="{{route('UpdateBlog',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="title-box widget-box">

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Blog Title</h3>
                                        <div class="form-group mb-0">
                                            <input type="text" id="title" name="titre" class="form-control" value="{{$blog->titre}}">
                                            @error('titre')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Write blog's description </h3>
                                        <div class="form-group mb-0">
                                            <input id="description" name="description" class="form-control summernote" rows="5" value="{{$blog->description}}"></input>
                                            @error('description')
                                            <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="title-content pb-0">
                                <div class="title-detail">
                                <h3>Blog's image </h3>
                                    <input
                                        type="file"
                                        name="image"
                                        id="inputImage"
                                        class="form-control ">
                                        @error('image')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
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
