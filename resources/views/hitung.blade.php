@extends('page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ $widget1['kriteria'] }}</th>
                    <th>{{ $widget2['kriteria'] }}</th>
                    <th>{{ $widget3['kriteria'] }}</th>
                    <th>{{ $widget4['kriteria'] }}</th>
                    <th>{{ $widget5['kriteria'] }}</th>
                    <th>{{ $widget6['kriteria'] }}</th>
                    <th>{{ $widget7['kriteria'] }}</th>
                    <th>{{ $widget8['kriteria'] }}</th>
                    <th>{{ $widget9['kriteria'] }}</th>
                  </tr>
                  </thead>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>nis</th>
                    <th>pkn</th>
                    <th>bhs_indo</th>
                    <th>mtk</th>
                    <th>ipa</th>
                    <th>ips</th>
                    <th>bhs_ingris</th>
                    <th>rata_rata_rpot</th>
                    <th>absensi</th>
                    <th>dokumen_pendukung</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nis }}</td>
                        <td>{{$alternatif->pkn / $C1max['alternatif']}}</td>
                        <td>{{$alternatif->bhs_indo / $C2max['alternatif']}}</td>
                        <td>{{$alternatif->mtk / $C3max['alternatif']}}</td>
                        <td>{{$alternatif->ipa / $C4max['alternatif']}}</td>
                        <td>{{$alternatif->ips / $C5max['alternatif']}}</td>
                        <td>{{$alternatif->bhs_ingris / $C6max['alternatif']}}</td>
                        <td>{{$alternatif->rata_rata_rpot / $C7max['alternatif']}}</td>
                        <td>{{$alternatif->absensi / $C8max['alternatif']}}</td>
                        <td>{{$alternatif->dokumen_pendukung / $C9max['alternatif']}}</td>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>nis</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nis}}</td>
                        {{-- Hasil --}}
                        <td>
                            {{(($alternatif->pkn / $C1max['alternatif'])*$widget1['kriteria'])+
                            (($alternatif->bhs_indo / $C2max['alternatif'])*$widget2['kriteria'])+
                            (($alternatif->mtk / $C3max['alternatif'])*$widget3['kriteria'])+
                            (($alternatif->ipa / $C4max['alternatif'])*$widget4['kriteria'])+
                            (($alternatif->ips / $C5max['alternatif'])*$widget5['kriteria'])+
                            (($alternatif->bhs_ingris / $C6max['alternatif'])*$widget6['kriteria'])+
                            (($alternatif->rata_rata_rpot / $C7max['alternatif'])*$widget7['kriteria'])+
                            (($alternatif->absensi / $C8max['alternatif'])*$widget8['kriteria'])+
                            (($alternatif->dokumen_pendukung / $C9max['alternatif'])*$widget9['kriteria'])}}
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
