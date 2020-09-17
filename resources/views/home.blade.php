@extends('layouts.app')

@section('content')

<main class="d-flex min-vh-100">
@include('partials.left_menu')

    <section class="content w-100 d-flex flex-column align-items-center  mt-5">
        <div class="main-section-head text-center">
            
            @if (Auth::user()->hasRole('utilisateur_eiffage') && Auth::user()->hasRole('utilisateur_green_perf'))
            <h1> -- SITE EIFFAGE --</h1>
            @else
                <h1> -- SITE GREEN-PERF --</h1>
            @endif
            
            <img src="{{asset('img/site_img.jpg')}}" alt="site_img">
        </div>
    </section>
</main>

@endsection