@extends('admin_layouts.admin')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
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
                <h1 class="h3 mb-0 text-gray-800">tentang</h1>
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
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>about_content</th>
                                    <th>visi</th>
                                    <th>misi</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>about_content</th>
                                    <th>visi</th>
                                    <th>misi</th>
                                    <th>action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($about as $tentang)
                                <tr>
                                    <td>{{ $tentang->id_about }}</td>
                                    <td><img src="{{ asset('images/about/'.$tentang->thumbnail) }}" style="width: 100px"></td>
                                    <td>{{ $tentang->about_content }}</td>
                                    <td>{{ $tentang->visi }}</td>
                                    <td>{!!$tentang->misi !!}    {{--// SummerNote Data --}}</td>
                                        <td class="">
                                            <button
                                                class="btn btn-warning m-1" data-toggle="modal" data-target="#edit-{{ $tentang->id_about }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708L12.793 8l-2.147-2.146a.5.5 0 0 1 0-.708z" />
                                                    <path fill-rule="evenodd"
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708L12.793 8l-2.147-2.146a.5.5 0 0 1 0-.708z"
                                                        clip-rule="evenodd" />
                                                    <path
                                                        d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5z" />
                                                </svg>
                                            </button>

                                            <a href="{{ route('about-delete', $tentang->id_about) }}" class="btn btn-danger m-1">
                                                @csrf
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>

                                            </a>
                                        </td>
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

<!-- Modal tambah data -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-about_content" id="staticBackdropLabel">Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('about-store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id_about">
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control-file" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="about_content">about_content</label>
                        <input type="text" class="form-control" name="about_content" placeholder="Enter about_content">
                    </div>
                    <div class="form-group">
                        <label for="visi">visi</label>
                        <textarea class="form-control" name="visi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">misi</label>
                        <textarea class="form-control" name="misi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit data -->
@foreach ($about as $tentang)
<div class="modal fade" id="edit-{{ $tentang->id_about }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-about_content" id="editLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('about-update',$tentang->id_about) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        {{-- <img src="{{ asset('images/about'.$tentang->thumbnail) }}" alt="" class="img-thumbnail"> --}}
                        <input type="file" class="form-control-file" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="about_content">about_content</label>
                        <input type="text" class="form-control @error('about_content') is-invalid @enderror" name="about_content" placeholder="Enter about_content" value="{{ $tentang->about_content }}">
                        <!-- error message untuk about_content -->
                        @error('about_content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="visi">visi</label>
                        <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" rows="3">{{ $tentang->visi }}</textarea>
                        <!-- error message untuk about_content -->
                        @error('visi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <textarea class="form-control" id="summernote" name="misi"> {!!$tentang->misi !!}    {{--// SummerNote Data --}} </textarea>
    <script>
      $('#summernote').summernote();
    </script>
                    <input type="hidden" name="id_about" value="{{ $tentang->id_about}}">
                    <button type="submit" class="btn btn-primary">update data</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endforeach

<!-- script -->

@endsection
