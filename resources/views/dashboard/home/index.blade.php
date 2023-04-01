@extends('dashboard.layout.main')

@section('content')
    
    <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
        <!-- main content -->

        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-6">
                    <h2>Dashboard</h2>
                    <h4>Ringkasan pinjaman</h4>
                </div>
                <div class="col-3">
                    <button type="submit" class="col-2 py-2 border-0 rounded-1" style="
                    color: #4ABD78;
                    background-color: #F3FFE4;
                    box-shadow: -1px -1px 5px #ffffff73, 2px 2px 5px #000000;
                    ">
                    Ajukan
                    </button>
                </div>

            </div>
            
                <div class="container mb-5">
                    <div class="row justify-content-between">
                        <div class="col-3 bg-white shadow-lg mb-2 rounded p-lg-2 text-center">
                            <h5 style="color: #787878">Total Pinjaman</h5>
                            <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                            <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                            
                        </div>
                        <div class="col-3 bg-white shadow-lg mb-2 rounded-xs p-lg-2 text-center">
                            <h5 style="color: #787878">Pinjaman Aktif</h5>
                            <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                            <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                            
                        </div>
                        <div class="col-3 bg-white shadow-lg mb-2 rounded-xs p-lg-2 text-center">
                            <h5 style="color: #787878">Pinjaman lunas</h5>
                            <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                            <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                            
                        </div>
                    </div>
                </div>

                <h4>Riwayat pengajuan pinjaman</h4>
            <div class="card">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr class="bg-fade" style="background-color: #E6E6E6">
                                <th style="width: 120px; background-color: #E6E6E6">ID</th>
                                <th style="background-color: #e6e6e6">pinjaman</th>
                                <th style="background-color: #e6e6e6">Jumlah</th>
                                <th style="background-color: #e6e6e6">Tgl Pinjam</th>
                                <th style="background-color: #e6e6e6">Tgl kembali</th>
                                <th style="background-color: #e6e6e6">Bunga</th>
                                <th style="background-color: #e6e6e6">Total</th>
                                <th style="width: 100px; background-color: #e6e6e6">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">08 Oct 2017</td>
                                <td class="align-middle">
                                    <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Karen Smith</a>
                                        <em class="text-muted ml-1">(Sales Representative)</em>
                                    </div>

                                </td>

                                <td class="align-middle">
                                    <a href="#">#1928</a>
                                </td>
                                <td class="align-middle">&dollar;1100.50</td>
                                <td class="align-middle">
                                    <div class="badge badge-danger">failed</div>
                                </td>
                                <td class="align-middle" style="width:40px">
                                    <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            <i class="material-icons md-14 align-middle">assignment</i>
                                            <span class="align-middle">Manage</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="material-icons md-14 align-middle">content_copy</i>
                                            <span class="align-middle">Duplicate</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">
                                            <i class="material-icons md-14 align-middle">delete</i>
                                            <span class="align-middle">Delete</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection