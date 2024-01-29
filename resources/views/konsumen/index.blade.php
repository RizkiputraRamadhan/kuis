@extends("layouts.appDashboard")
@section("content")
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Umur</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->namaKonsumen}}</td>
                <td>{{$data->umurKonsumen}}</td>
                <td>{{$data->jenisKelamin}}</td>
                <td>{{$data->pekerjaanKonsumen}}</td>
                <td>
                    <a href="/konsumen/{{ $data->id }}/{{ $data->namaKonsumen }}/show" class="btn btn-info">Detail</a>
                    <a href="/konsumen/{{ $data->id }}/delete" class="btn btn-danger">Delete</a>
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
