@extends('Layouts.site')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="empty-content text-center">
                        <img src="assets/img/404.png" alt="logo" class="img-fluid">
                        <h2>Page not <span class="orange-text">found</span></h2>
                        <p>Oops! Looks like you followed a bad link.</p>
                        <p>If you think this is a problem with us, please tell us.</p>
                        <div class="btn-item">
                            <a class="btn get-btn" href="index.html">GO TO HOME</a>
                            <a class="btn courses-btn" href="#">BACK</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
