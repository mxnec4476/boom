@extends('backend.mainlayout')
@section('content')
<div class="content-wrapper" style="min-height: 1416.81px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buttons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buttons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Buttons
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                <table class="table table-bordered text-center">
                  <tbody><tr>
                    <th>Mr.fix</th>
                    <th>Ashi</th>
                    <th>กระบอกน้ำไฮเทค</th>
                    <th>หูฟัง i12</th>
                    <th>ชาอชิ</th>
                  </tr>
                  <tr>
                    <td>
                        <a class="btn btn-app" href="/admin/mrfix">
                            <i class="fas fa-edit"href="/"></i> Add
                          </a>
                    </td>
                    <td>
                        <a class="btn btn-app"href="/admin/ashi">
                            <i class="fas fa-edit"></i> Add
                          </a>
                    </td>
                    <td>
                        <a class="btn btn-app"href="/">
                            <i class="fas fa-edit"></i> Add
                          </a>
                    </td>
                    <td>
                        <a class="btn btn-app"href="/">
                            <i class="fas fa-edit"></i> Add
                          </a>
                    </td>
                    <td>
                        <a class="btn btn-app"href="/">
                            <i class="fas fa-edit"></i> Add
                          </a>
                    </td>
                   
                  </tr>
                  <tr>
                    
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->
    </div>
</section>
@endsection