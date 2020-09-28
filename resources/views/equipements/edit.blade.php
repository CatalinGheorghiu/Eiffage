@extends('layouts.app')


@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center mb-5">
                <h1>Equipement <strong>#{{ $equipement->id }}</strong> </h1>
            </div>

            <div class="container align-middle ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Modifier l'equipement <strong
                                    class="text-primary">{{ $equipement->equip_code }}</strong></div>

                            <div class="card-body">
                                <form action="{{ route('equipements.update', $equipement->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label for="equip_code" class="col-md-2 col-form-label text-md-left">Equipement
                                            Code</label>

                                        <div class="col-md-6">
                                            <input id="equip_code" type="text"
                                                class="form-control @error('equip_code') is-invalid @enderror"
                                                name="equip_code" value="{{ $equipement->equip_code }}" required
                                                autocomplete="equip_code" autofocus>

                                            @error('equip_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label for="designation"
                                            class="col-md-2 col-form-label text-md-left">Designation</label>

                                        <div class="col-md-6">
                                            <input id="designation" type="text"
                                                class="form-control @error('designation') is-invalid @enderror"
                                                name="designation" value="{{ $equipement->designation }}" required
                                                autofocus>

                                            @error('designation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label for="famille_equip">Famille Equipement</label>
                                        <select class="form-control" id="famille_equip">
                                            <option value="{{ $equipement->familleEquipement->fam_equip_code }}">
                                                {{ $equipement->familleEquipement->fam_equip_code }}</option>
                                            @foreach ($familleEquipements as $equip)
                                                <option value="{{ $equip->fam_equip_code }}">{{ $equip->fam_equip_code }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button class="btn btn-primary">Mettre à jour</button>
                                    <a class="btn btn-dark" href="{{ url()->previous() }}">Annuler</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
