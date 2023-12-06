<x-app-layout>
   
</x-app-layout>
  <!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body style="background-color: #ffff">
    <?php
      echo "<script>alert('you have $message messages');</script>";
      ?>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->
         <!-- partial -->
    <div class="container" style="background-color: #f2f2f2">
      <div class="row" style="margin-top: 40px">
        <div class="col-xl-20 col-sm-6 grid-margin stretch-card">
          <div class="card" style="height: 100px;background-color: white">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    
                    <p class="text-success ms-2 mb-0 " style="font-size: 30px">{{$user1}}</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="fas fa-user icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">User Number</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-20 col-sm-6 grid-margin stretch-card">
          <div class="card" style="height: 100px;background-color: white">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    
                    <p class="text-success ms-2 mb-0 font-weight-medium" style="font-size: 30px">{{$checkI}}</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="fas fa-print icon-item"></span>
                  </div>
                  
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Check Print</h6>
            </div>
          </div>
        </div>
        <!-- Additional Cards -->
      </div>
    
      <!-- Bar Charts -->
      <div class="row">
        <div class="col-md-6 ">
          <div class="card" style="background-color: white;border-radius: 10px" >
          <canvas id="barChart1" style="height: 400px;width: 2px"></canvas>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" style="background-color: white;border-radius: 10px">
          <canvas id="barChart2" style="height: 400px;"></canvas>
        </div>
        </div>
      </div>
    </div>
    
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Chart Initialization -->
    <script>
         var ctx = document.getElementById('barChart1').getContext('2d');
        var userCountChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($dates) !!},
                datasets: [{
                    label: 'Number of Users',
                    data: {!! json_encode($userCount) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    
        var ctx = document.getElementById('barChart2').getContext('2d');
        var userCountChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($date) !!},
                datasets: [{
                    label: 'Number of check print',
                    data: {!! json_encode($checkCount) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    </script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->

  </body>
</html>

