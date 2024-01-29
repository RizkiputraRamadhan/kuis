@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <title>Kuisoner Kepuasan Pelanggan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .title-welcome {
                background-color: black;
                justify-content: center;
                width: 100%;
                height: 100px;
                text-align: center;
                color: white;
            }

            .sub-title {
                color: black;
                margin-top: 10px;
                text-align: center;
                justify-content: center
            }

            hr {
                display: block;
                height: 10px;
                border: 0;
                border-top: 1px solid black;
                margin: 1em 0;
                padding: 0;
                width: 100%
            }

            .form-konsumen {
                width: 50%;
                margin-left: 100px;
                color: black;
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .title-kuisoner {
                margin-top: 30px;
                margin-bottom: 30px;
                text-align: center
            }

            .footer-title {
                text-align: center;
                margin-bottom: 30px;
            }

            .form-pertanyaan {
                width: 75%;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                margin-left: auto;
                margin-right: auto;
            }

            .btn {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                float: right;
                margin-bottom: 30px;
            }
        </style>

    </head>

    <body>
        <div class="title-header">
            <div class="title-welcome">
                <h1 class="title-welcome"><b>Selamat Datang<b></h1>
            </div>
        </div>

        <div class="sub-title">
            <h2 class="sub-title">Silahkan Mengisi Kuisoner</h2>
            <hr />
        </div>

        <form method="POST" action="/survey">
            @csrf
            <div class="form-konsumen">
                <h3 class="title-form-konsumen">Informasi Konsumen</h3>
                <label for="Nama" class="form-nama">Nama Panjang</label>
                <input type="name" class="form-control" id="form-nama" placeholder="Nama Panjang"
                    style="margin-top: 10px" name="namaK">

                <div class="form_JK">
                    <label for="Jenis Kelamin" class="form-JK" style="margin-top: 30px">Jenis Kelamin</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="jk-lk"
                            value="L">
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

                <label for="Date" class="form-date" style="margin-top: 30px">Tanggal Isi</label>
                <input type="date" name="tanggal=isi" class="form-control" id="form-date" placeholder="Isi dengan Angka"
                    style="margin-top: 10px">
            </div>
            {{-- </form>
                     --}}

            <div class="form-pertanyaan">
                <h3 class="title-kuisoner">Pertanyaan Kuisoner</h3>
                <hr />
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Pertanyaan</td>
                            <td class="table-warning"; colspan="5">Persepsi</td>
                            <td class="table-warning"; colspan="5">Harapan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="table-danger">Tangible</td>
                            <td>STP</td>
                            <td>TP</td>
                            <td>CP</td>
                            <td>P</td>
                            <td>SP</td>
                            <td>STP</td>
                            <td>TP</td>
                            <td>CP</td>
                            <td>P</td>
                            <td>SP</td>
                        </tr>
                        <td></td>
                        <td>Memberikan kepercayaan kepada konsumen baru terhadap kualitas produk yang dijual</td>
                        <td>
                            {{-- <form class="Tangible1-Persepsi">  --}}
                            <input type="radio" id="STP-P1" name="P1" value="STP-P1">
                            <label for="STP-P1"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P1" name="P1" value="TP-P1">
                            <label for="TP-P1"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-P1" name="P1" value="CP-P1">
                            <label for="CP-P1"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P1" name="P1" value="P-P1">
                            <label for="P-P1"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P1" name="P1" value="SP-P1">
                            <label for="SP-P1"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Tangible1-Harapan"> --}}
                        <td>
                            <input type="radio" id="H1" name="H1" value="STP-H1">
                            <label for="CP-H1"></label>
                        </td>
                        <td>
                            <input type="radio" id="H1" name="H1" value="TP-H1">
                            <label for="TP-H1"></label>
                        </td>
                        <td>
                            <input type="radio" id="H1" name="H1" value="CP-H1">
                            <label for="CP-H1"></label>
                        </td>
                        <td>
                            <input type="radio" id="H1" name="H1" value="P-H1">
                            <label for="P-H1"></label>
                        </td>
                        <td>
                            <input type="radio" id="H1" name="H1" value="SP-H1">
                            <label for="SP-H1"></label>
                        </td>
                        {{-- </form>  --}}

                        </tr>
                        <td></td>
                        <td>Customer Service bersikap selalu memberikan perhatian, bicara dengan suara yang lembut dan jelas
                            yang membuat konsumen nyaman</td>
                        <td>
                            {{-- <form class="Tangible2-Persepsi"> --}}
                            <input type="radio" id="STP-P2" name="P2" value="STP-P2">
                            <label for="STP-P1"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P2" name="P2" value="TP-P2">
                            <label for="TP-P2"></label>
                        <td>
                            <input type="radio" id="CP-P2" name="P2" value="CP-P2">
                            <label for="CP-P2"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P2" name="P2" value="P-P2">
                            <label for="P-P2"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P2" name="P2" value="SP-P2">
                            <label for="SP-P1"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Tangible2-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H2" name="H2" value="STP-H2">
                            <label for="CP-H2"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H2" name="H2" value="TP-H2">
                            <label for="TP-H2"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H2" name="H2" value="CP-H2">
                            <label for="CP-H2"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H2" name="H2" value="P-H2">
                            <label for="P-H2"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H2" name="H2" value="SP-H2">
                            <label for="SP-H2"></label>
                        </td>
                        {{-- </form> --}}

                        <tr>
                            <td></td>
                            <td>Customer service mampu meyakinkan konsumen serta memberikan kepuasan setiap pelayanan yang
                                diberikan seperti argumen-argumen yang masuk akal</td>
                            <td>
                                {{-- <form class="Tangible3-Persepsi"> --}}
                                <input type="radio" id="STP-P3" name="P3" value="STP-P3">
                                <label for="STP-P3"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P3" name="P3" value="TP-P3">
                                <label for="TP-P3"></label>
                            <td>
                                <input type="radio" id="CP-P3" name="P3" value="CP-P3">
                                <label for="CP-P3"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P3" name="P3" value="P-P3">
                                <label for="P-P4"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P3" name="P3" value="SP-P3">
                                <label for="SP-P3"></label>
                            </td>
                            <td>
                                {{-- </form> --}}

                                {{-- <form class="Tangible3-Harapan"> --}}
                                <input type="radio" id="STP-H3" name="STP-H3" value="STP-H3">
                                <label for="CP-H3"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H3" name="TP-H3" value="TP-H3">
                                <label for="TP-H3"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H3" name="CP-H3" value="CP-H3">
                                <label for="CP-H3"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H3" name="P-H3" value="P-H3">
                                <label for="P-H3"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H3" name="SP-H3" value="SP-H3">
                                <label for="SP-H3"></label>
                            </td>
                            {{-- </form> --}}

                        <tr>
                            <td>2</td>
                            <td class="table-danger">Reliability</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <tr>
                            <td></td>
                            <td>Customer Service Pt.Trakindo Bsd memiliki keahlian dalam melayani konsumen</td>
                            <td>
                                {{-- <form class="Reability1-Persepsi"> --}}
                                <input type="radio" id="STP-P4" name="P4" value="STP-P4">
                                <label for="STP-P4"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P4" name="P4" value="TP-P4">
                                <label for="TP-P4"></label>
                            <td>
                                <input type="radio" id="CP-P4" name="P4" value="CP-P4">
                                <label for="CP-P4"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P4" name="P4" value="P-P4">
                                <label for="P-P4"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P4" name="P4" value="SP-P4">
                                <label for="SP-P4"></label>
                            </td>
                            {{-- </form> --}}

                            {{-- <form class="Reliability1-Harapan"> --}}
                            <td>
                                <input type="radio" id="STP-H4" name="H4" value="STP-H4">
                                <label for="CP-H4"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H4" name="H4" value="TP-H4">
                                <label for="TP-H4"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H4" name="H4" value="CP-H4">
                                <label for="CP-H4"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H4" name="H4" value="P-H4">
                                <label for="P-H4"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H4" name="H4" value="SP-H4">
                                <label for="SP-H4"></label>
                            </td>
                            {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd memahami semua kualitas Produk yang dijual</td>
                        <td>
                            {{-- <form class="Reability2-Persepsi"> --}}
                            <input type="radio" id="STP-P5" name="P5" value="STP-P5">
                            <label for="STP-P5"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P5" name="P5" value="TP-P5">
                            <label for="TP-P5"></label>
                        <td>
                            <input type="radio" id="CP-P5" name="P5" value="CP-P5">
                            <label for="CP-P"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P5" name="P5" value="P-P4">
                            <label for="P-P5"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P5" name="P5" value="SP-P5">
                            <label for="SP-P5"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Reability2-Harapan">  --}}
                        <td>
                            <input type="radio" id="STP-H5" name="H5" value="STP-H5">
                            <label for="CP-H5"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H5" name="TP-H4" value="TP-H5">
                            <label for="TP-H5"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H5" name="CP-H5" value="CP-H5">
                            <label for="CP-H5"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H5" name="P-H5" value="P-H45">
                            <label for="P-H5"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H5" name="SP-H5" value="SP-H5">
                            <label for="SP-H5"></label>
                        </td>
                        {{-- </form> --}}

                        <tr>
                            <td></td>
                            <td>Customer Service Pt.Trakindo Bsd memiliki komunikasi yang baik</td>
                            {{-- <form class="Reability3-Persepsi"> --}}
                            <td>
                                <input type="radio" id="STP-P6" name="P6" value="STP-P6">
                                <label for="STP-P6"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P6" name="P6" value="TP-P6">
                                <label for="TP-P6"></label>
                            <td>
                                <input type="radio" id="CP-P6" name="P6" value="CP-P6">
                                <label for="CP-P6"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P6" name="P6" value="P-P6">
                                <label for="P-P6"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P5" name="P6" value="SP-P6">
                                <label for="SP-P6"></label>
                            </td>
                            {{-- </form> --}}

                            {{-- <form class="Realibity3-Harapan"> --}}
                            <td>
                                <input type="radio" id="STP-H5" name="H6" value="STP-H6">
                                <label for="CP-H6"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H6" name="H6" value="TP-H6">
                                <label for="TP-H6"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H6" name="H6" value="CP-H6">
                                <label for="CP-H6"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H6" name="H6" value="P-H6">
                                <label for="P-H6"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H6" name="H6" value="SP-H6">
                                <label for="SP-H6"></label>
                            </td>
                            {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd berpakaian rapih dan sopan </td>
                        {{-- <form class="Realibity4-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P7" name="P7" value="STP-P7">
                            <label for="STP-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P7" name="P7" value="TP-P7">
                            <label for="TP-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-P7" name="P7" value="CP-P7">
                            <label for="CP-P7"></label>
                        <td>
                            <input type="radio" id="P-P7" name="P7" value="P-P7">
                            <label for="P-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P7" name="P7" value="SP-P7">
                            <label for="SP-P7"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Realibity4-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-P7" name="H7" value="STP-P7">
                            <label for="STP-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P7" name="H7" value="TP-P7">
                            <label for="TP-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-P7" name="H7" value="CP-P7">
                            <label for="CP-P7"></label>
                        <td>
                            <input type="radio" id="P-P7" name="H7" value="P-P7">
                            <label for="P-P7"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P7" name="H7" value="SP-P7">
                            <label for="SP-P7"></label>
                        </td>
                        {{-- </form> --}}
                        </tr>
                        <td></td>
                        <td>Menyelesaikan masalah konsumen pada produk yang dijual</td>
                        {{-- <form class="Reability5-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P8" name="P8" value="STP-P8 ">
                            <label for="STP-P8"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P8" name="P8 " value="TP-P8 ">
                            <label for="TP-P8"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-P8" name="P8" value="CP-P8">
                            <label for="CP-P8"></label>
                        <td>
                            <input type="radio" id="P-P8" name="P8" value="P-P8">
                            <label for="P-P8"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P8" name="P8" value="SP-P8">
                            <label for="SP-P8"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Reability5-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-P8" name="H8" value="STP-P8">
                            <label for="STP-P8"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H8" name="H8" value="TP-H8">
                            <label for="STP-H8"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H8" name="H8" value="CP-H8">
                            <label for="CP-H8"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H8" name="H8" value="P-H8">
                            <label for="P-H8"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H8" name="H8" value="SP-H8">
                            <label for="SP-H8"></label>
                        </td>
                        {{-- </form> --}}
                        </tr>
                        <td>3</td>
                        <td class="table-danger">Responsiveness</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <tr>
                            <td></td>
                            <td>Customer Service selalu dapat menyelesaikan keluhan konsumen</td>
                            {{-- <form class="Responsiveness1-Persepsi"> --}}
                            <td>
                                <input type="radio" id="STP-P9" name="P9" value="STP-P9">
                                <label for="STP-P9"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P9" name="P9" value="TP-P9">
                                <label for="TP-P9"></label>
                            <td>
                                <input type="radio" id="CP-P9" name="P9" value="CP-P9">
                                <label for="CP-P9"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P9" name="P9" value="P-P9">
                                <label for="P-P9"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P9" name="P9" value="SP-P9">
                                <label for="SP-P9"></label>
                            </td>
                            {{-- </form> --}}

                            {{-- <form class="Responsiveness1-Harapan"> --}}
                            <td>
                                <input type="radio" id="STP-H9" name="H9" value="STP-H9">
                                <label for="CP-H9"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H9" name="H9" value="TP-H9">
                                <label for="TP-H9"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H9" name="H9" value="CP-H9">
                                <label for="CP-H9"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H9" name="H9" value="P-H9">
                                <label for="P-H9"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H9" name="H9" value="SP-H9">
                                <label for="SP-H9"></label>
                            </td>
                            {{-- </form> --}}
                        </tr>
                        <td></td>
                        <td>Cepat memahami kualitas produk yang ingin dibeli konsumen </td>

                        {{-- <form class="Responsiveness2-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P10" name="P10" value="STP-P10">
                            <label for="STP-P10"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P10" name="P10" value="TP-10">
                            <label for="TP-P10"></label>
                        <td>
                            <input type="radio" id="CP-P10" name="P10" value="CP-P10">
                            <label for="CP-P10"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P10" name="P10" value="P-P10">
                            <label for="P-P10"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P10" name="P10" value="SP-P10">
                            <label for="SP-P10"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Responsiveness2-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H10" name="H10" value="STP-H10">
                            <label for="CP-H10"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H10" name="H10" value="TP-H10">
                            <label for="TP-H10"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H10" name="H10" value="CP-H10">
                            <label for="CP-H10"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H10" name="H10" value="P-H10">
                            <label for="P-H10"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H10" name="H10" value="SP-H10">
                            <label for="SP-H10"></label>
                        </td>
                        {{-- </form>   --}}
                        </tr>
                        <td></td>
                        <td>Mendengarkan keluhan konsumen</td>

                        {{-- <form class="Responsiveness3-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P11" name="P11" value="STP-P11">
                            <label for="STP-P11"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P11" name="P11" value="TP-P11">
                            <label for="TP-P11"></label>
                        <td>
                            <input type="radio" id="CP-P11" name="P11" value="CP-P11">
                            <label for="CP-P11"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P11" name="P11" value="P-P11">
                            <label for="P-P11"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P11" name="P11" value="SP-P11">
                            <label for="SP-P11"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Responsiveness3-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H11" name="H11" value="STP-H11">
                            <label for="CP-H11"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H11" name="H11" value="TP-H11">
                            <label for="TP-H11"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H11" name="H11" value="CP-H11">
                            <label for="CP-H11"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H11" name="H11" value="P-H11">
                            <label for="P-H11"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H11" name="H11" value="SP-H11">
                            <label for="SP-H11"></label>
                        </td>
                        {{-- </form> --}}
                        </tr>
                        <td>4</td>
                        <td class="table-danger">Assurance</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <tr>
                            <td></td>

                            <td>Tanggung jawab Customer service dari awal sampai selesai transaksi sehingga konsumen puas
                            </td>

                            {{-- <form class="Assurance1-Persepsi"> --}}
                            <td>
                                <input type="radio" id="STP-P12" name="P12" value="STP-P12">
                                <label for="STP-P12"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P12" name="P12" value="TP-P12">
                                <label for="TP-P12"></label>
                            <td>
                                <input type="radio" id="CP-P12" name="P11" value="CP-P12">
                                <label for="CP-P12"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P12" name="P12" value="P-P12">
                                <label for="P-P12"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P12" name="P12" value="SP-P12">
                                <label for="SP-P12"></label>
                            </td>
                            {{-- </form> --}}

                            {{-- <form class="Assurance1-Harapan"> --}}
                            <td>
                                <input type="radio" id="STP-H12" name="H12" value="STP-H12">
                                <label for="CP-H12"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H12" name="H12" value="TP-H12">
                                <label for="TP-H12"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H11" name="H12" value="CP-H12">
                                <label for="CP-H12"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H12" name="H12" value="P-H12">
                                <label for="P-H12"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H12" name="H12" value="SP-H12">
                                <label for="SP-H12"></label>
                            </td>
                            {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Menjelaskan kualitas produk yang dijual kepada konsumen</td>
                        {{-- <form class="Assurance2-Persepsi">  --}}
                        <td>
                            <input type="radio" id="STP-P13" name="P13" value="STP-P13">
                            <label for="STP-P13"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P13" name="P13" value="TP-P13">
                            <label for="TP-P13"></label>
                        <td>
                            <input type="radio" id="CP-P12" name="P13" value="CP-P13">
                            <label for="CP-P13"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P13" name="P13" value="P-P13">
                            <label for="P-P13"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P12" name="P13" value="SP-P13">
                            <label for="SP-P13"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Assurance2-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H12" name="H13" value="STP-H13">
                            <label for="CP-H13"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H13" name="H13" value="TP-H13">
                            <label for="TP-H13"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H13" name="H13" value="CP-H13">
                            <label for="CP-H13"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H13" name="H13" value="P-H13">
                            <label for="P-H12"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H13" name="H13" value="SP-H13">
                            <label for="SP-H13"></label>
                        </td>
                        {{-- </form>  --}}
                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd ramah,sopan,menarik dan cepat tanggap</td>

                        {{-- <form class="Assurance3-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P14" name="P14" value="STP-P14">
                            <label for="STP-P14"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P14" name="P14" value="TP-P14">
                            <label for="TP-P14"></label>
                        <td>
                            <input type="radio" id="CP-P14" name="P14" value="CP-P14">
                            <label for="CP-P14"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P14" name="P14" value="P-P14">
                            <label for="P-P14"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P14" name="P14" value="SP-P14">
                            <label for="SP-P14"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Assurance3-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H14" name="H14" value="STP-H14">
                            <label for="CP-H14"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H14" name="H14" value="TP-H14">
                            <label for="TP-H14"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H14" name="H14" value="CP-H14">
                            <label for="CP-H14"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H14" name="H14" value="P-H14">
                            <label for="P-H14"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H14" name="H14" value="SP-H14">
                            <label for="SP-H14"></label>
                        </td>
                        {{-- </form> --}}
                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd mampu dengan cepat memahami keinginan konsumen</td>

                        {{-- <form class="Assurance4-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P15" name="P15" value="STP-P15">
                            <label for="STP-P15"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P15" name="P15" value="TP-P15">
                            <label for="TP-P15"></label>
                        <td>
                            <input type="radio" id="CP-P15" name="P15" value="CP-P15">
                            <label for="CP-P15"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P15" name="P15" value="P-P15">
                            <label for="P-P15"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P15" name="P15" value="SP-P15">
                            <label for="SP-P15"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Assurance4-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H15" name="H15" value="STP-H15">
                            <label for="CP-H15"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H15" name="H15" value="TP-H15">
                            <label for="TP-H15"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H15" name="H15" value="CP-H15">
                            <label for="CP-H15"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H15" name="H15" value="P-H15">
                            <label for="P-H15"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H15" name="H15" value="SP-H15">
                            <label for="SP-H15"></label>
                        </td>
                        {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Memberikan jaminan keamanan produk yang dijual sesuai dengan harga dan kualitas</td>

                        {{-- <form class="Assurance5-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P16" name="P16" value="STP-P16">
                            <label for="STP-P16"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P16" name="P16" value="TP-P16">
                            <label for="TP-P16"></label>
                        <td>
                            <input type="radio" id="CP-P16" name="P16" value="CP-P16">
                            <label for="CP-P16"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P16" name="P16" value="P-P16">
                            <label for="P-P16"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P16" name="P16" value="SP-P16">
                            <label for="SP-P16"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Assurance5-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H15" name="H16" value="STP-H16">
                            <label for="CP-H16"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H16" name="H16" value="TP-H16">
                            <label for="TP-H16"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H16" name="H16" value="CP-H16">
                            <label for="CP-H16"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H16" name="H16" value="P-H16">
                            <label for="P-H16"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H16" name="H16" value="SP-H16">
                            <label for="SP-H16"></label>
                        </td>
                        {{-- </form> --}}

                        </tr>

                        <td>5</td>
                        <td class="table-danger">Emphaty</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <tr>
                            <td></td>
                            <td>Customer Service Pt.Trakindo Bsd lebih memprioritaskan keinginan konsumen</td>

                            {{-- <form class="Emphaty1-Persepsi"> --}}
                            <td>
                                <input type="radio" id="STP-P13" name="P17" value="STP-P17">
                                <label for="STP-P17"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P17" name="P17" value="TP-P15">
                                <label for="TP-P17"></label>
                            <td>
                                <input type="radio" id="CP-P17" name="P17" value="CP-P17">
                                <label for="CP-P17"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P17" name="P17" value="P-P17">
                                <label for="P-P17"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P17" name="P17" value="SP-P17">
                                <label for="SP-P17"></label>
                            </td>
                            {{-- </form> --}}

                            {{-- <form class="Emphaty1-Harapan"> --}}
                            <td>
                                <input type="radio" id="STP-H17" name="H17" value="STP-H17">
                                <label for="CP-H17"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-H17" name="H17" value="TP-H17">
                                <label for="TP-H17"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-H17" name="H17" value="CP-H17">
                                <label for="CP-H17"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-H17" name="H17" value="P-H17">
                                <label for="P-H17"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-H17" name="H17" value="SP-H17">
                                <label for="SP-H17"></label>
                            </td>
                            {{-- </form> --}}
                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd memahami kebutuhan konsumen</td>

                        {{-- <form class="Emphaty2-Persepsi"> --}}
                        <td>
                            <input type="radio" id="STP-P18" name="P18" value="STP-P18">
                            <label for="STP-P18"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P18" name="P18" value="TP-P18">
                            <label for="TP-P18"></label>
                        <td>
                            <input type="radio" id="CP-P18" name="P18" value="CP-P18">
                            <label for="CP-P18"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P18" name="P18" value="P-P18">
                            <label for="P-P18"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P18" name="P18" value="SP-P18">
                            <label for="SP-P18"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Emphaty2-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-H18" name="H18" value="STP-H18">
                            <label for="CP-H18"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H14" name="H18" value="TP-H18">
                            <label for="TP-H18"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H18" name="H18" value="CP-H18">
                            <label for="CP-H18"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H18" name="H18" value="P-H18">
                            <label for="P-H18"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H18" name="H18" value="SP-H18">
                            <label for="SP-H18"></label>
                        </td>
                        {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Customer Service Pt.Trakindo Bsd memberikan perhatian individual kepada para konsumen</td>

                        {{-- <form class="Emphaty3-Persepsi"> --}}
                        <td>
                            <input type="radio" id="TP-P19" name="P19" value="TP-P19">
                            <label for="TP-P19"></label>
                        <td>
                            <input type="radio" id="CP-P19" name="P19" value="CP-P19">
                            <label for="CP-P19"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P19" name="P19" value="P-P19">
                            <label for="P-P19"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P19" name="P19" value="SP-P19">
                            <label for="SP-P19"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Empathy3-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-P19" name="P19" value="STP-P19">
                            <label for="STP-P19"></label>
                        </td>

                        <td>
                            <input type="radio" id="STP-H19" name="H19" value="STP-H19">
                            <label for="CP-H19"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H19" name="H19" value="TP-H19">
                            <label for="TP-H19"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H19" name="H19" value="CP-H19">
                            <label for="CP-H19"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H19" name="H19" value="P-H19">
                            <label for="P-H19"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H19" name="SP-H19" value="SP-H19">
                            <label for="SP-H19"></label>
                        </td>
                        {{-- </form> --}}

                        </tr>
                        <td></td>
                        <td>Kemudahan dalam berkomunikasi dengan konsumen</td>

                        {{-- <form class="Emphaty4-Persepsi"> --}}
                        <td>
                            <input type="radio" id="TP-P20" name="P20" value="TP-P20">
                            <label for="TP-P20"></label>
                        <td>
                            <input type="radio" id="CP-P20" name="P20" value="CP-P20">
                            <label for="CP-P20"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P20" name="P20"
                                value="P-P20>
                                <label for="P-P19"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P20" name="P20" value="SP-P20">
                            <label for="SP-P20"></label>
                        </td>
                        {{-- </form> --}}

                        {{-- <form class="Empathy3-Harapan"> --}}
                        <td>
                            <input type="radio" id="STP-P20" name="P20" value="STP-P20">
                            <label for="STP-P20"></label>
                        </td>

                        <td>
                            <input type="radio" id="STP-H20" name="H20" value="STP-H20">
                            <label for="CP-H20"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-H20" name="H20" value="TP-H20">
                            <label for="TP-H20"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-H20" name="H20" value="CP-H20">
                            <label for="CP-H20"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-H20" name="H20" value="P-H20">
                            <label for="P-H20"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-H20" name="SP-H20" value="SP-H20">
                            <label for="SP-H20"></label>
                        </td>
                        {{-- </form> --}}
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
            <hr />
        </form>

    </body>
    <footer>
        <div class="footer-title">
            <h2>Terima Kasih Telah Mengisi Kuisoner</h2>
        </div>
    </footer>

    </html>
@endsection
