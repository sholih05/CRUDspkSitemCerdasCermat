@extends('page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('alternatif/add') }}" class="btn-sm btn-success">Tambah Data Siswa</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIS</th>
                    <th>PKN</th>
                    <th>bhs.Indo</th>
                    <th>mtk</th>
                    <th>ipa</th>
                    <th>ips</th>
                    <th>bhs_ingris</th>
                    <th>MENTAL</th>
                    <th>Rata-Rata Rapot</th>
                    <th>Absensi</th>
                    <th>dokumen</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $alternatif)
                      <tr>
                        <td>{{ $alternatif->nis }}</td>
                        <td>{{ $alternatif->pkn }}</td>
                        <td>{{ $alternatif->bhs_indo }}</td>
                        <td>{{ $alternatif->mtk }}</td>
                        <td>{{ $alternatif->ipa }}</td>
                        <td>{{ $alternatif->ips }}</td>
                        <td>{{ $alternatif->bhs_ingris }}</td>
                        <td>{{ $alternatif->rata_rata_rpot }}</td>
                        <td>{{ $alternatif->absensi }}</td>
                        <td>{{ $alternatif->dokumen_pendukung }}</td>
                        <td>
                          <a href="{{ url('alternatif/edit/'.$alternatif->id) }}" class="btn-xs btn-primary">Edit</a>
                          <a href="{{ url('alternatif/delete/'.$alternatif->id) }}" class="btn-xs btn-danger">Delete</a>
                        </td>
                      </tr>


                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
