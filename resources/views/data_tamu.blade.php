@extends('home')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Tamu</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="home" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Tamu</li>
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
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success" onclick="create()">Tambah Data Tamu</button>
                    <div id="read" class="mt-3"></div>
                    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-right">
                            <div class="modal-content">
                                <div class="modal-header">
                                    {{-- <h4 class="modal-title" id="myModalLabel">Tambah Data Tamu</h4> --}}
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div>
                                
                                <div class="modal-body">
                                    <div id="page"></div>
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

    function create(){
        $.get("data_tamu/create", {}, function(data, status){
            $("#page").html(data);
            $("#right-modal").modal('show');
        });
    }


    function store(){
        var nama    = $("#nama").val();
        var alamat  = $("#alamat").val();
        var data    = "nama="+nama+"&alamat="+alamat;
        $.ajax({
            type    : "get",
            url     : "data_tamu/store",
            data    : data,
            success:function(data){
                // $("#page").html('');
                $(".btn-close").click();
                read();
            }
        });
    }
</script>
@endsection