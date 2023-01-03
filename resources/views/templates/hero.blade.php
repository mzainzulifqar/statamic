@extends('landing-page')

@section('content')
<!--section-start-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">{!! $page->text_1 !!}</h1>
                    <p class="lead fw-normal text-white-50 mb-4" style="color:white;">{!! $page->text_2 !!}</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ $page->link_1 }}">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ $page->link_1 }}">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                @foreach (Statamic::tag('glide:generate')->src($page->image_1)->width(600)->height(400) as $image)
                    <img class="img-fluid rounded-3 my-5 card-img-top" src="{{ $image['url'] }}" id="1"/>
                @endforeach
            </div>
        </div>
    </div>
</header>
<!--section-end-->
@endsection