@extends('layouts.master')

@section('content')
<main id="main" class="py-5">
    <section id="demographic" class="demographic mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">Demografi</h1>
            </div>
            <div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Hasil Registrasi Menurut Jenis Kelamin 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>3728</td>
                                <td>3454</td>
                                <td>7182</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Luas Daerah, Jumlah Rumah Tangga, dan Jumlah Penduduk 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Luas (km<sup>2</sup>)</th>
                                <th>Jumlah Rumah Tangga</th>
                                <th>Jumlah Penduduk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>6,39</td>
                                <td>2117</td>
                                <td>7182</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Kepadatan Penduduk per Km2 dan per Rumah Tangga</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">No.</th>
                                <th colspan="2" class="text-center">Kepadatan Penduduk</th>
                            </tr>
                            <tr>
                                <th>Per km<sup>2</sup></th>
                                <th>Per Rumah Tangga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>1124</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Lahir yang Dicatat Menurut Jenis Kelamin 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>5</td>
                                <td>-</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Meninggal yang Dicatat Menurut Jenis Kelamin 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>4</td>
                                <td>3</td>
                                <td>7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Datang yang Dicatat Menurut Jenis Kelamin 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>31</td>
                                <td>21</td>
                                <td>52</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Pindah yang Dicatat Menurut Jenis Kelamin 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>36</td>
                                <td>30</td>
                                <td>66</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dt-responsive table-responsive mb-4">
                    <h5 class="font-weight-bold">Jumlah Penduduk Hasil Registrasi Menurut Kelompok Umur 2018</h5>
                    <table id="" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>0-4</th>
                                <th>5-9</th>
                                <th>10-14</th>
                                <th>15-24</th>
                                <th>25-39</th>
                                <th>40-59</th>
                                <th>>=60</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=50 class="text-center">1</td>
                                <td>709</td>
                                <td>532</td>
                                <td>460</td>
                                <td>982</td>
                                <td>1835</td>
                                <td>1446</td>
                                <td>594</td>
                                <td>7182</td>
                            </tr>
                        </tbody>
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