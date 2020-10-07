@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  ">
            <div class="main-section-head text-center  my-5">
                <h1 class=""><u> Famille Equipements </u></h1>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <table class="table   text-center table-striped  table-bordered" id="myTable">
                            @can('edit-users')
                                <a href="{{ route('famille_equipements.create') }}">
                                    <button class="btn btn-primary  mr-3 mb-2 px-3">Ajouter famille equipements</button>
                                </a>
                            @endcan
                            <thead>
                                <tr >
                                    <th scope="col">Code</th>
                                    <th scope="col">Nom</th>
                                    @cannot('delete-users')
                                    <th scope="col">&nbsp;</th>
                                    @endcannot
                                    @can('delete-users')
                                        <th scope="col" >Actions</th>

                                    @endcan
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    {{-- {{ $dataTable->scripts() }} --}}

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('famille_equipements.index') }}",
                columns: [
                    {
                        data: 'fam_equip_code'
                    },
                    {
                        data: 'nom'
                    },
                    {
                        data: 'btns',
                        orderable: false
                    },

                ]
            });
        });

    </script>
@endsection
@endsection
