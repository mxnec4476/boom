@extends('backend.mainlayout')
@section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
            <a class="btn btn-block btn-warning" href="{{ route('mrfix.create') }}"style="width:195px;height:40px; margin:auto">add Mrfix</a>
            <a class="btn btn-block btn-warning" href="{{ route('stock.create') }}"style="width:195px;height:40px; margin:auto">add Mrfix</a>
        
          <div class="card-tools">
            </div>
          </div>
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Stock
              </h3>
            </div>
            <div class="card-body pad table-responsive">
              <table class="table table-bordered text-center">
                <tbody><tr>
                  <th>ออรจินัล </th>
                  <th>พรีเมียมอัพเกรด</th>
                  <th>Glasklare 10H</th>
                  <th>ครีมลบรอย Scartech</th>
                </tr>
                
                <tr>
                  <td>{{$plus_original}}</td>
                  <td>{{$plus_premium}}</td>
                  <td>{{$plus_glasklare}}</td>
                  <td>{{$plus_scartech}}</td>
                 </tr>
              </tbody></table>
            </div>
            <!-- /.card -->
          </div>
            {{-- {{$data}}-{{$data1}}....{{$data2}} --}}
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
              </tr>
            </thead>
            <tbody>
               
               @foreach ($mrfixes as $mrfix)

              <tr>
              <td>{{$mrfix->id}}</td>
              <td>{{ $mrfix->date }}</td>
              <td>{{ $mrfix->name }}</td>
            <td>{{ $mrfix->abode }}</td>
            <td>{{ $mrfix->call }}</td>
            <td>{{ $mrfix->goods }}</td>
            <td>{{ $mrfix->cost }}</td>
            <td>{{ number_format($mrfix->price,2) }}</td>
            <td>{{ $mrfix->amount }}</td>
            <td>{{ $mrfix->all }}</td>
            <td>{{ $mrfix->pro }}</td>
              </tr>
              
            </tbody>                 
               @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>

@endsection