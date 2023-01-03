@extends('landing-page')

@section('content')
<!--section-start-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">{{ $page->teaser }}</h2></div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    @foreach ($page->grid_field as $grid)
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                            <h2 class="h5">{{ $grid->text_1 }}</h2>
                            <p class="text-black">{{ $grid->text_2 }}</p>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--section-end-->
@endsection