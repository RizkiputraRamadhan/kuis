@extends('layouts.app')
@section('content')
    <form method="POST" action="/konsumen">
        @csrf
        <div class="title-header">
            <div class="title-welcome">
                <h1 class="title-welcome"><b>Selamat Datang<b></h1>
            </div>
        </div>

        <div class="sub-title">
            <h2 class="sub-title">Silahkan Mengisi Kuisoner</h2>
            <hr />
        </div>
        <div class="form-konsumen">
            <h3 class="title-form-konsumen">Informasi Konsumen</h3>
            <label for="Nama" class="form-nama">Nama Panjang</label>
            <input type="name" class="form-control" id="form-nama" placeholder="Nama Panjang" style="margin-top: 10px"
                name="namaK">

            <div class="form_JK">
                <label for="Jenis Kelamin" class="form-JK" style="margin-top: 30px">Jenis Kelamin</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="jk-lk" value="L">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="jk-pr" checked
                        value="P">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                </div>
            </div>

            <label for="Umur" class="form-umur" style="margin-top: 30px">Umur</label>
            <input type="number" name="umurK" class="form-control" id="form-umur" placeholder="Isi dengan Angka"
                style="margin-top: 10px">

            <label for="Pekerjaan" class="form-pekerjaan" style="margin-top: 30px">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" id="form-umur" placeholder="Pekerjaan Anda"
                style="margin-top: 10px">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
@endsection
