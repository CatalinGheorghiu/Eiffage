@extends('layouts.app')

@section('content')

    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column  align-items-center ">
            <div class="main-section-head text-center mt-5">

                @if (Auth::user()->hasRole('utilisateur_eiffage') && Auth::user()->hasRole('utilisateur_green_perf'))
                    <h1> -- SITE EIFFAGE --</h1>
                @else
                    <h1> -- SITE GREEN-PERF --</h1>
                @endif

                <img src="{{ asset('img/site_img.jpg') }}" alt="site_img">
            </div>

            <div class="charts-section d-flex mt-5">
                <div class="chart-1   m-5">
                    <h3 class="mb-5 text-center"><u> Valeurs indicateur ICUR 01</u></h3>
                    <img src="{{ asset('img/basic-line-chart.svg') }}" alt="" class="chart-left">
                </div>
                <div class="chart-2  m-5 ">
                    <h3 class="mb-5 text-center"><u> Valeurs indicateur IPRE 01 </u></h3>
                    <img src="{{ asset('img/basic-line-chart.svg') }}" alt="" class="chart-right">
                </div>
            </div>
        </section>
    </main>

@endsection
