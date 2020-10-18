@extends('layouts.master')

@section('content')
<main id="main" class="py-5">
    <section id="demographic" class="demographic mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">Demografi</h1>
            </div>
            <div>
                <p class="text-justify pb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <div class="dt-responsive table-responsive">
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Blablabla</td>
                                <td>Blablabla</td>
                                <td>Blablabla</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main> 
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/responsive.bootstrap4.min.css')}}">
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(68, 138, 255, 0.1);
        }
    </style>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendor/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var table = $("#demographicTable").DataTable({
                "oLanguage": {
                    "sLengthMenu": "Tampilkan _MENU_ data",
                    "sZeroRecords": "Belum ada data",
                    "sInfoEmpty": "Menampilkan 0 data",
                    "sInfoFiltered": "",
                    "sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ orang",
                    "sSearch": "Cari: ",
                    "oPaginate": {
                        "sNext": "Selanjutnya",
                        "sPrevious": "Sebelumnya",
                    }
                },
                stateSave: true
            });
        });
    </script>
@endsection