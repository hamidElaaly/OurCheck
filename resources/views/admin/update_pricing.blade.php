
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
            width: 200px }
           
        .card {
        height: 520px;
        width: 100%;
        background-color: #f2f2f2;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 0;
      }
    </style>
    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="card" style="border-radius: 20px">
                <div class="card-body">
            <div class="container" align="center" style="padding-top: 100px">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
    
                </div>
                
            @endif
                    <form action="{{url('editPricing',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                 <label  style="color: black">type</label>
                                 <input  value="{{$data->type}}"  style="background-color: #ffffff;color: black; border:none;" name="type" class="form-control">
                                </div>
                            <div class="col">
                                <label for="banktype" style="color: black"  > price</label>
                                <input  value="{{$data->price}}"  style="background-color: #ffffff;color: black;border:none;" name="price" class="form-control" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                <label for="width" style="color: black">proprity</label>
                                <input type="text" value="{{$data->proprity}}" style="background-color: #ffffff;color: black;border:none;" name="proprity" class="form-control" >
                              </div>
                    </div>
                </div>
              
           <div class="form-group" style="padding: 15px">
                            <button style="width:40%;margin-right:19px;color: black" type="submit" class="btn btn-primary"
                            name="add_product">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>