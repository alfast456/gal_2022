@extends('admin_layouts.admin')

@section('main-content')


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('admin_layouts.nav')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">invoice</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
                    data-target="#staticBackdrop"><i class="fas fa-plus text-white-50"></i> Tambah Data</a>
            </div>
            <!-- DataTales Example -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id Pesanan</th>
                                    <th>Jenis Layanan</th>
                                    <th>Paket Layanan</th>
                                    <th>Total Harga</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Email Pelanggan</th>
                                    <th>No Telp Pelanggan</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id Pesanan</th>
                                    <th>Jenis Layanan</th>
                                    <th>Paket Layanan</th>
                                    <th>Total Harga</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Email Pelanggan</th>
                                    <th>No Telp Pelanggan</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($transaction_detail as $invoice)
                                <tr>
                                    <td>{{ $invoice->order_id }}</td>
                                    <td>{{ $invoice->title }}</td>
                                    <td>{{ $invoice->gross_amount/$invoice->price }} Bulan</td>
                                    <td>{{ $invoice->gross_amount }}</td>
                                    <td>{{ $invoice->name }}</td>
                                    <td>{{ $invoice->email }}</td>
                                    <td>{{ $invoice->no_hp }}</td>
                                    <td>{{ $invoice->status }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <h3>Belum Ada Data</h3>
                                    </td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- End of Main Content -->

    @include('admin_layouts.footer')

</div>
<!-- Button trigger modal -->


<!-- script -->

@endsection
