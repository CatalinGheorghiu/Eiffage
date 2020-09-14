@extends('layouts.app')

@section('content')

<main class="d-flex">
    <section class="sidebar  bg-danger pl-2">
        <ul class="nav flex-column mt-4 pb-5">
            <li class="nav-item "><a class="nav-link" href="/"><i class="fas fa-house-user"></i> Accueil</a></li>
<hr>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bookmark"></i> Indicateurs</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-building"></i> Sites</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-warehouse"></i> Locaux</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fire-extinguisher"></i> Equipements</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-cubes"></i> Familles Equipements</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-calendar-alt"></i> Calendriers Scolaires</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-store-alt-slash"></i> Fermetures</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-chart-pie"></i> Taux de disponibilite</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Niveaux de retenue</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-hourglass-start"></i> Temps de retablissement</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-clock"></i> Reactivites</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-creative-commons-sampling"></i> Periodicites</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-calendar-plus"></i> Periodes</a></li>
            <hr>


            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-wrench"></i> Operations</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-level-up-alt"></i> Valeurs Indicateurs</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-gripfire"></i> Consommations Energetiques</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Details Consommations Energetiques</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Performances</a></li>
        </ul>
    </section>

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