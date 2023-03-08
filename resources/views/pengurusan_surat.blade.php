@extends('home')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Pengurusan Surat</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="home" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Pengurusan Surat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success" data-bs-toggle="modal" data-bs-target="#right-modal">Tambah Data Tamu</button> --}}
                    <div id="read" class="mt-3"></div>
                    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-right">
                            <div class="modal-content">
                                {{-- <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Tambah Data Tamu</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div> --}}
                                <div class="modal-body">
                                    <div class="text-center mb-2">
                                        <a href="index.html" class="text-success">
                                            <span><img
                                                    src="logo.png" alt=""
                                                    height="48"></span>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mt-0 mb-5">Sistem Informasi Pengarsipan Kelurahan Lasiana</h4>
                                        {{-- <p>Kelurahan Lasiana</p> --}}
                                       
                                    </div>
                                   

                                    <form class="ps-3 pe-3" action="#">

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="username">Name</label>
                                            <input class="form-control" type="text" id="username"
                                                required="" placeholder="Nama Lengkap">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Alamat</label>
                                            <input class="form-control" type="text" id="emailaddress"
                                                required="" placeholder="Alamat">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Perihal</label>
                                            <input class="form-control" type="text" required=""
                                                id="password" placeholder="Perihal">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Dokumen</label>
                                            <input class="form-control" type="file" required=""
                                                id="password" placeholder="Perihal">
                                        </div>

                                        

                                        <div class="form-group mt-5 text-center">
                                            <button class="btn waves-effect waves-light btn-rounded btn-outline-success" type="submit">Proses</button>
                                            <button class="btn waves-effect waves-light btn-rounded btn-outline-danger" data-bs-dismiss="modal">Kembali</button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<script type="text/javascript" src="{{ asset('jquery-1.7.2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        read()
    });
    // Read Database
    function read(){
        $.get("data_tamu/read", {}, function(data, status){
            $('#read').html(data);
        });
    }
</script>
@endsection