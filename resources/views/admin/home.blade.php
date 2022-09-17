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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Berita Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Berita</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                            $berita = \App\Models\news::all();
                                            echo $berita->count();
                                            ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Layanan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                            $layanan = \App\Models\service::all();
                                            echo $layanan->count();
                                            ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-toolbox fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portofolio Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Portofolio
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                            $portofolio = \App\Models\portfolio::all();
                                            echo $portofolio->count();
                                            ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-photo-video fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pesanan Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pesanan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{-- <?php
                                            $pesanan = \App\Models\transaction_detail::all();
                                            echo $pesanan->count();
                                            ?> --}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    @include('admin_layouts.footer')

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- End of Content Wrapper -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($datas) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Pendapatan',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script> --}}
{{-- <script src="{{ asset('assets/sbadmin2/js/demo/chart-area-demo.js') }}"></script> --}}

@endsection
