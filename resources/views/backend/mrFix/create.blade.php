@extends('backend.mainlayout')
@section('content')
    <div class="content-wrapper" style="min-height: 1416.81px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
                
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{route('mrfix.store')}}"method="POST">
    @csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>วันที่:</strong>
                    <input type="date" name="date" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อลูกค้า:</strong>
                    <input type="text" name="name" class="form-control" placeholder="ชื่อลูกค้า">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>ที่อยู่:</strong>
                  <input type="text" name="abode" class="form-control" placeholder="ที่อยู่">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์:</strong>
                <input type="number" name="call" class="form-control" placeholder="เบอร์" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>สินค้า</strong>
          </div>
      </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              
              <input type="checkbox" id="vehicle" onclick="checkitaaaaa()"   value="มะม่วง" namejs="vehicle">
              <label for="vehicle"> a</label>
              <input type="number" id="numberA" readonly name="vehicle1" oninput="inputcal()" placeholder="จำนวน">90<br><br>


              <input type="checkbox" id="vehicle1" onclick="checkitaaaaa()"   value="B" namejs="vehicle">
              <label for="vehicle1"> b</label>
              <input type="number" id="numberB" readonly name="vehicle2" oninput="inputcal()" placeholder="จำนวน">120<br><br>
                
              
              <input type="checkbox" id="vehicle2" onclick="checkitaaaaa()"   value="C" namejs="vehicle">
              <label for="vehicle2"> c</label>
              <input type="number" id="numberC" readonly name="vehicle3" oninput="inputcal()" placeholder="จำนวน">500<br><br>
               
              <input type="checkbox" id="vehicle3" onclick="checkitaaaaa()"   value="D" namejs="vehicle">
              <label for="vehicle3"> d</label>
              <input type="number" id="numberD" readonly name="vehicle4" oninput="inputcal()" placeholder="จำนวน">1000<br><br>
              <div class="form-group">
                    <strong>รวมสินค้า:</strong>
                    <input type="text" name="goods" id="goods" class="form-control" placeholder="สินค้า">
                </div>
            
              <div class="form-group">
                  <strong>ต้นทุน:</strong>
                  <input type="number" id="Cost" name="cost" class="form-control" placeholder="ต้นทุน" readonly>
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ราคาขาย:</strong>
                <input type="number" name="price" class="form-control" placeholder="ราคาขาย">
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>จำนวนที่ซื้อ:</strong>
              <input type="number" name="amount" id="amount" class="form-control" placeholder="จำนวนที่ซื้อ"readonly>
            </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รวมยอดซือ:</strong>
            <input type="number" name="all" class="form-control" placeholder="รวมยอดซือ">
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>ส่วนลด:</strong>
          <input type="number" name="pro" class="form-control" placeholder="รวมยอดซือ"name="vehicle">
        </div>
     
  
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>

      </div>
</form>
</div>
</div>
</div>
<script >
    var datasArr = [];
  function checkitaaaaa(){
    if( $('#vehicle').is(':checked')){
        $('#numberA').attr('readonly',false)
    }else{
     
      $('#numberA').attr('readonly',true)
    }

    if( $('#vehicle1').is(':checked')){
        $('#numberB').attr('readonly',false)
    }else{
      $('#numberB').attr('readonly',true)
    }

    if( $('#vehicle1').is(':checked')){
        $('#numberC').attr('readonly',false)
    }else{
      $('#numberC').attr('readonly',true)
    }

    if( $('#vehicle1').is(':checked')){
        $('#numberD').attr('readonly',false)
    }else{
      $('#numberD').attr('readonly',true)
    }
    datasArr = []
      $.each($("input[namejs='vehicle']:checked"), function() {
        datasArr.push($(this).val());
     });
    var goods = datasArr.join(',');
    $('#goods').val(goods);
    console.log(datasArr);
  }

 function inputcal(){
    var a = $('#numberA').val();
    var b = $('#numberB').val();
    var c = $('#numberC').val();
    var d = $('#numberD').val();
   if(a==''){
    a=0;
   }
   if(b==''){
    b=0;
   }
   if(c==''){
    c=0;
   }
   if(d==''){
    d=0;
   }
   
    let total = (parseInt(a)*90)+(parseInt(b)*120)+(parseInt(c)*500)+(parseInt(d)*1000);
    let totalCount = parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d);
   $('#Cost').val(total);
   $('#amount').val(totalCount);
  
 }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection