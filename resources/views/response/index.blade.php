@extends('layouts.appDashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Responden Konsumen</h5>
                    <p>
                    </p>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Persepsi</th>
                                <th scope="col">Harapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->namaKonsumen }}</td>
                                    <td>{{ $data->pertanyaan->pertanyaanText }}</td>
                                    <td>{{ $data->jawabanPersepsi }}</td>
                                    <td>{{ $data->jawabanHarapan }}</td>
                                    <td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
