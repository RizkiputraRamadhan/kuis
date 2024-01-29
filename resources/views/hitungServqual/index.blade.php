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
                <th scope="col">Nama</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Persepsi</th>
                <th scope="col">Harapan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->namaKonsumen}}</td>
                <td>{{$data->pertanyaan->pertanyaanText}}</td>
                <td>{{$data->jawabanPersepsi}}</td>
                <td>{{$data->jawabanHarapan}}</td>
                <td>
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