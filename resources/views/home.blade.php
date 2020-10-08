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
                    <h3 class=" text-center"><u> Valeurs indicateur ICUR 01</u></h3>
                    {{-- <img src="{{ asset('img/basic-line-chart.svg') }}" alt=""
                        class="chart-left"> --}}
                    <div id="chart1" class="chart-left"></div>
                </div>
                <div class="chart-2  m-5 ">
                    <h3 class="text-center"><u> Valeurs indicateur IPRE 01 </u></h3>
                    {{-- <img src="{{ asset('img/basic-line-chart.svg') }}" alt=""
                        class="chart-right"> --}}
                    <div id="chart2" class="chart-right"></div>
                </div>
            </div>


        </section>
    </main>

@section('scripts')
    <script>
        const chart1 = new Chartisan({
            el: '#chart1',
            url: "@chart('familles_equipements_chart')",
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1', '#EC3134'])
                .borderColors(['#4299E1', '#ECC94B', '#EC3134'])
                .responsive()
                .beginAtZero()
                .legend({
                    position: 'bottom'
                })
                // .title('This is a sample chart using chartisan!')
                .datasets([{
                    type: 'line',
                    fill: false
                }])
        });

        const chart2 = new Chartisan({
            el: '#chart2',
            url: "@chart('equipements_chart')",
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1', '#EC3134'])
                .borderColors(['#4299E1', '#ECC94B', '#EC3134'])
                .responsive()
                .beginAtZero()
                .legend({
                    position: 'bottom'
                })

        });

    </script>
@endsection
@endsection
