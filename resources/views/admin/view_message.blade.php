
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
  

        label{
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
            width: 200px
        }
        .card {
        height: 400px;
        width: 100%;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 0;
      }
      .b{
        background-color:#00C0EF;
        height:30px ;
         width:30%;
         margin-right:19px;
         
         border-radius: 10px;
         font-size: 18px;
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
            <div class="card" style=" background-color: #f2f2f2;border-radius: 20px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="padding: 15px">
                           
                                <div class="col"><br>
                                    <label for="" >{{$data->name}}</label>
                                </div>
                            <div class="col"><br>
                                <label for="" >{{$data->email}}</label>
                            </div>
                            <div class="col" style="margin-top: 26px">
                                <label for="" >{{$data->message}}</label>
                            </div>
                           
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