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
        <input class="form-control" type="text" id="nama" name="nama"
            required="" placeholder="Nama Lengkap">
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Alamat</label>
        <input class="form-control" type="text" id="alamat" name="alamat"
             placeholder="Alamat">
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="password">Perihal</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Surat Keterangan Usaha</option>
            <option>Surat Domisili</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="password">Dokumen</label>
        <input class="form-control" type="file" 
            id="password" placeholder="Perihal">
    </div>

    

    <div class="form-group mt-5 text-center">
        <button class="btn waves-effect waves-light btn-rounded btn-outline-success" onclick="store()">Proses</button>
        <button class="btn waves-effect waves-light btn-rounded btn-outline-danger" data-bs-dismiss="modal">Kembali</button>
    </div>

</form>