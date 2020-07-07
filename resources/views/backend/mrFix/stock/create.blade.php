@extends('backend.mainlayout')
@section('content')
    <div class="content-wrapper" style="min-height: 1416.81px;">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">เพิ่มสต็อค</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form"action="{{route('stock.store')}}"method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Adds Original</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Original"name="original">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adds Premium</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Premium"name="premium">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adds Glasklare</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Glasklare"name="glasklare">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adds Scartech</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Scartech"name="scartech">
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </div>
              <!-- /.card-body -->

             
            </form>
          </div>
    </div>
@endsection