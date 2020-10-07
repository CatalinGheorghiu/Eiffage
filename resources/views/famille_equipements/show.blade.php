@extends('layouts.app')

@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center mb-5">
                <h1><u> Famille equipement <strong>#{{ $familleEquipement->fam_equip_code }}</strong> </u> </h1>
            </div>

            <div class="container align-middle ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Famille equipement <strong
                                    class="text-primary">{{ $familleEquipement->fam_equip_code }}</strong></div>

                            <div class="card-body">
                                <p class="text-primary"> <strong class="text-dark"> ID:</strong>
                                    {{ $familleEquipement->id }}</p>
                                <p class="text-primary"> <strong class="text-dark"> CODE EQUIPEMENT:</strong>
                                    {{ $familleEquipement->fam_equip_code }}</p>
                                <p class="text-primary"> <strong class="text-dark"> NOM:</strong>
                                    {{ $familleEquipement->nom }}</p>


                                <a class="btn btn-dark" href="{{ route('famille_equipements.index') }}">Retourner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
