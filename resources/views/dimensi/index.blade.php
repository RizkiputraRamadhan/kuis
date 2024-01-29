@extends("layouts.appDashboard")
@section("content")
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Dimensi</h5>
            <a class="btn btn-info mb-2" href="/pertanyaan/add">Buat Dimensi Baru</a>
          <p>Berisikan data-data dari dimensi pertanyaan.</p>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nama_dimensi}}</td>
                <td>
                    <a class="btn btn-success m-1" href="/dimensi/{{ $data->id }}/edit">Edit</a>
                    <a class="btn btn-danger m-1" href="/dimensi/{{ $data->id }}/delete">Delete</a>
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
