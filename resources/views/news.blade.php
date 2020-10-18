@extends('layouts.master')

@section('content')
<main id="main" class="py-5">
    <section id="demographic" class="demographic mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">{{ $title }}</h1>
            </div>
            <div>
                <div class="text-center">
                    <img class="img-fluid mb-4" src="{{asset($image)}}" width="700" alt="News List">
                </div>
                <p class="text-justify pb-3">
                    {!! $content !!}
                </p>
            </div>
        </div>
    </section>
</main> 
@endsection