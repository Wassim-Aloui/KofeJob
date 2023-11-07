@extends('Layouts.freelancer')

@section('content')




    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Manage Alerts</h3>
                </div>
                <div class="col-md-6 text-end">
                 </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="manage-projects.html">Reply to Alert</a>
                </li>
            </ul>
        </nav>
   
        
            <div class="row">
                <div class="col-md-12">
                    <div class="select-project mb-4">
                        <form action="{{route('admin.alerts.reply.store',$alert->id)}}" method="GET">
                            @csrf
                            @method('POST') 
                            <div class="title-box widget-box">

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Alert Title</h3>
                                        <div class="form-group mb-0">
                                            <input disabled type="text" id="title" value="{{$alert->title}}"  name="title" class="form-control" placeholder="Enter Alert title">
                                            @error('title')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="title-content">
                                    <div class="title-detail">
                                        <h3>Subject</h3>
                                        <div class="form-group price-cont mb-0" id="subject_type">
                                          <!-- <input type="text" id="subject" value="{{$alert->subject}}" name="subject" class="form-control" placeholder="What's the Subject"> -->
                                        
                                          <select disabled name="subject" id="subject" class="form-control"  >
                                            <option disabled value="{{$alert->subject}}" disabled selected>{{$alert->subject}}</option>
    <option value="freelancer">Freelancer</option>
    <option value="employer">Employer</option>
    <option value="job">Job</option>
    <option value="job">Paiement</option>
</select>
                                          @error('subject')
                                          <small class="form-text text-danger">{{$message}}</small>
                                      @enderror
                                        </div>
                                    </div>
                                </div>


                              

                            

                            

                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Alert Description</h3>
                                        <div class="form-group mb-0">
                                            <textarea disabled id="description" name="description" class="form-control summernote" rows="5" placeholder="Your Description goes here">{{$alert->description}}</textarea>
                                            @error('description')
                                            <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Reply To Alert</h3>
                                        <div class="form-group mb-0">
                                            <textarea  id="description" name="description" class="form-control summernote" rows="5" placeholder="Your Description goes here">{{$reply?->description}}</textarea>
                                            @error('description')
                                            <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-end">
                                        <div class="btn-item">
                                            <button type="submit" class="btn next-btn">Reply</button>
                                            @if ($reply)
    <a  href="{{route('admin.reply.delete', ['id' => $reply->id])}}" class="btn next-btn">Delete Reply</a>
    @endif
 
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
    </div>
@endsection
