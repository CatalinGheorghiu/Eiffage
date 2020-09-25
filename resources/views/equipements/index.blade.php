@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center">
                <h1>Equipements Page</h1>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-dark  col-12 text-center" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Famille equipement</th>
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
                ajax: "{{ route('equipements.index') }}",
                columns: [{
                        data: 'equip_code'
                    },
                    {
                        data: 'designation'
                    },
                    {
                        data: 'familleEquipement',
                        name: 'familleEquipement.fam_equip_code'
                    },
                ]
            });
        });

    </script>
@endsection
@endsection
