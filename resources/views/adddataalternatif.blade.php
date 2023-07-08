@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nis" placeholder="NIS">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pkn" class="col-sm-2 col-form-label">pkn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pkn" placeholder="pkn">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bhs_indo" class="col-sm-2 col-form-label">bhs_indo</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="bhs_indo" placeholder="bhs_indo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="mtk" class="col-sm-2 col-form-label">mtk</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="mtk" placeholder="mtk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ipa" class="col-sm-2 col-form-label">ipa</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="ipa" placeholder="ipa">
                    </div>
                  </div>
                
                <div class="form-group row">
                    <label for="ips" class="col-sm-2 col-form-label">ips</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="ips" placeholder="ips">
                    </div>
                  </div>
                
                <div class="form-group row">
                    <label for="bhs_ingris" class="col-sm-2 col-form-label">bhs_ingris</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="bhs_ingris" placeholder="bhs_ingris">
                    </div>
                  </div>
                
                <div class="form-group row">
                    <label for="rata_rata_rpot" class="col-sm-2 col-form-label">rata_rata_rpot</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="rata_rata_rpot" placeholder="rata_rata_rpot">
                    </div>
                  </div>
                
                <div class="form-group row">
                    <label for="absensi" class="col-sm-2 col-form-label">absensi</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="absensi" placeholder="absensi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dokumen_pendukung" class="col-sm-2 col-form-label">dokumen_pendukung</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" name="dokumen_pendukung" placeholder="dokumen_pendukung">
                    </div>
                  </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create</button>
                  <button type="submit" class="btn btn-default float-right">Clear</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection