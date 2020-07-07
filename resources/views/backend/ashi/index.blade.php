@extends('backend.mainlayout')
@section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>วันที่</th>
               <th>ชื่อลูกค้า</th>
               <th>ที่อยู่</th>
               <th>เบอร์</th>
               <th>สินค้า</th>
               <th>ต้นทุน</th>
                <th>ราคาขาย</th>
                <th>จำนวนที่ซื้อ</th>
                <th>รวมยอดซือ</th>
                <th>ส่วนลด</th>
                <th>แก้ไข</th>
              </tr>
            </thead>
            <tbody>
               
               
              <tr>
              <td></td>
                <td>11-7-2014</td>
                <td><span class="tag tag-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              
            </tbody>
                 
            
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>

@endsection