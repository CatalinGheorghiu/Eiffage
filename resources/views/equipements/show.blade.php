@extends('layouts.app')

@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center mb-5">
                <h1>Equipement <strong>#{{ $equipement->id }}</strong> Details </h1>
            </div>

            <div class="container align-middle ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Equipement <strong class="text-primary">{{ $equipement->equip_code }}</strong></div>

                            <div class="card-body">
                                <p class="text-primary"> <strong class="text-dark"> ID:</strong> {{ $equipement->id }}</p>
                                <p class="text-primary"> <strong class="text-dark"> CODE EQUIPEMENT:</strong> {{ $equipement->equip_code }}</p>
                                <p class="text-primary"> <strong class="text-dark"> DESIGNATION:</strong> {{ $equipement->designation }}</p>
                                <p class="text-primary"> <strong class="text-dark"> FAMILLE EQUIPEMENT:</strong> {{ $equipement->familleEquipement->fam_equip_code}}</p>

                                <a class="btn btn-dark" href="{{ route('equipements.index') }}">Retourner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
