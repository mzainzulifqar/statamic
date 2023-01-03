@extends('landing-page')
@push('css')
    <style>
        p {
            color:rgb(78, 68, 68);
        }
    </style>
@endpush
@section('content')
<!--section-start-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic text-black">{!! $page->owner !!}</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                        <div class="fw-bold">
                            {{ $page->author }}
                            {{-- Tom Ato
                            <span class="fw-bold text-primary mx-1">/</span>
                            CEO, Pomodoro --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--section-end-->
@endsection