@extends('Layouts.Project')

@section('content')


<body>
<div class="blog-single-post pro-post widget-box">
<div class="blog-image">
    <br><br><br>
<a href="javascript:void(0);"><img src="{{ asset('uploads/' . $blog->image) }}" alt="Blog Image" class="img-fluid" width="200" height="200"></a>
</div>
<h3 class="blog-title">{{ $blog->titre }}</h3>
<div class="blog-info clearfix">
<div class="post-left">
<ul>
<li>
<div class="post-author">
<a href="developer-details.html"><img src="../assets/img/img-02.jpg" alt="Post Author"><span>{{ $blog->author->name }}</span></a>
</div>
</li>
<li><a href="#"><i class="far fa-calendar"></i>{{ $blog->created_at }}</a></li>
<li><a href="#"><i class="far fa-comments"></i>{{ $commentCount }}</a></li>

</ul>
</div>
</div>
<div class="blog-content">
<p>{{ $blog->description }}</p>

</div>
</div>

    <div class="blog-comments pro-post widget-box clearfix pb-0">
<h3 class="pro-title">Comments</h3>
<div class="pro-content pb-0">
<ul class="comments-list">

<li>
@foreach($comments as $comment)
<div class="comment">
<div class="comment-author">
<img class="avatar" alt src="../assets/img/img-05.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">{{ $comment->user->name }} </span>
</span>
<p>{{ $comment->comment }}</p>
</div>
</div>
@endforeach
</li>
</ul>
</div>
</div>
<div class=" pro-post widget-box  new-comment clearfix">
<h4 class="pro-title">Leave Comment</h4>
<div class="pro-content">
<form action="{{ route('StoreComment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="blogId" value="{{ $blog->id }}">

        <div class="form-group">
            <label for="comment">comment </label>
            <input type="text" name="comment" class="form-control" >
            @error('comment')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</div>
</body>

@endsection
