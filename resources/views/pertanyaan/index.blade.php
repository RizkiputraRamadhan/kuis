@extends("layouts.appDashboard")
@section("content")
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pertanyaan</h5>
          <a class="btn btn-info mb-2" href="/pertanyaan/add">Buat Pertanyaan Baru</a>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Dimensi</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->dimensi->nama_dimensi}}</td>
                <td>{{$data->pertanyaanText}}</td>
                <td class="d-flex">
                    <a class="btn btn-success m-1" href="/pertanyaan/{{ $data->id }}/edit">Edit</a>
                    <a class="btn btn-danger m-1" href="/pertanyaan/{{ $data->id }}/delete">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </div>
  </div>
@endsection
