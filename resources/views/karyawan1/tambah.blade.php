@extends('layout.bahagia')

@section('title', 'TAMBAH DATA KARYAWAN')

@section('konten')

//ini saya comment supaya bisa ngepush ulang di github desktop, karena tadi error pak mohon maaf


<h3> TAMBAH DATA KARYAWAN </h3>
	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nip" class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nip'>
                            <input type="text" class="form-control" name="nip" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='nama'>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="pangkat" class="col-sm-2 control-label">Pangkat</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='pangkat'>
                            <input type="text" class="form-control" name="pangkat" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="gaji" class="col-sm-2 control-label">Gaji</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='gaji'>
                            <input type="text" class="form-control" name="gaji" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-green" value="Simpan Data">
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
