<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="user/assets/img/clients/imprimante.png" rel="icon">
    <title>OurCheck-historique</title>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.semanticui.min.css">


    <!-- Vendor CSS Files -->
    <link href="user/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="user/assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- DataTables CSS Files -->
    <style>
         body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity value (0.5) as needed */
        z-index: -1;
        }
        .imprimer {
        text-align: center;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        padding: 10px;
        border-radius: 20px;
        color: white;
        font-size: 16px;
        font-weight:600;
        margin: 0 auto;

        width: 20%;
        box-sizing: border-box;
        cursor: pointer;
        }
    
        body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("user/assets/img/tabs-1.jpg");
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -2;
        }
        th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 16px;
    }
        .card {
        width: 100%;
        background-color: #f2f2f2;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 30px;
      }
    </style>
    
</head>
<body style="margin-top: 200px;">
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"><span>Our</span>Check<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{url('return_hero')}}">Accueil</a></li>

          @auth
          <li><a href="{{url('check_page')}}">Cheque</a></li>
          <li><a class="nav-link scrollto active" href="{{url('historique_page')}}">Historique</a></li>
          <x-app-layout>
          </x-app-layout>
          @endauth
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     
   @guest
       <a href="{{route('login')}}" class="get-started-btn scrollto">Login</a>
      <a href="{{route('register')}}" class="get-started-btn scrollto">Register</a>
   @endguest
      
    </div>
  </header>
  <!-- End Header -->
    <div class="container" style="margin-bottom: 40px">
        <div class="card" style="border-radius: 20px">
            <div class="card-body">
                <h1 style="text-align: center;font-size: 20px">Tableau des derniers chèques imprimés:</h1>
        <table id="example" class="ui celled table" style="width:100%">
            <thead>
                <tr>
                    <th>pay</th>
                    <th>banque</th>
                    <th>la date</th>
                    <th>l'order</th>
                    <th>Montant</th>
                    <th>Fait a</th>
                    <th style="text-align: center">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->pay}}</td>
                    <td>{{$item->bank}}</td>
                    <td> {{$item->datecheque}}</td>
                    <td>{{$item->order}} </td>
                    <td> {{$item->montant}} DH</td>
                    <td>{{$item->payerpour}}</td>
                    <td style="text-align: center"><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteHistorique',$item->id)}}"><i class="fas fa-trash-alt"></i> </a></td>
                </tr>
                @endforeach
                
            </tbody>
          
        </table>
        <h4 class="imprimer" ><a id="printBtn" onclick="return confirm('Are you sure you want to delete this?')" href="{{route('Effacer_tableau')}}" > Effacer le tableau</a></h4>
    </div>
</div>
</div>

    

   

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
    




    <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
    </script>



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>OurCheck<span>.</span></h3>
                <p>
                  Agadir hay Elhouda <br>
                  <br>
                  <br><br>
                  <strong>Téléphone :</strong> +************<br>
                  <strong>Email :</strong> Akssolus@gmail.com<br>
                </p>
              </div>
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Liens Utiles</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">À propos de nous</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'utilisation</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
                </ul>
              </div>
              <div class="col-lg-7 col-md-12 footer-map">
                <!-- Replace the iframe code below with the generated Google Maps embed code -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13765.476123914881!2d-9.5302107!3d30.3972701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b7fa2a796ee3%3A0x8437d1454f1f293e!2saksolus!5e0!3m2!1sfr!2sma!4v1686243734774!5m2!1sfr!2sma" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="container d-md-flex py-4">
          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Droits d'auteur <strong><span>OurCheck</span></strong>. Tous droits réservés
            </div>
            <div class="credits">
              <!-- Tous les liens dans le pied de page doivent rester intacts. -->
              <!-- Vous pouvez supprimer les liens uniquement si vous avez acheté la version pro. -->
              <!-- Informations de licence : https://bootstrapmade.com/license/ -->
              <!-- Achetez la version pro avec formulaire de contact PHP/AJAX fonctionnel : https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
              Conçu par <a href="">Aks</a>
            </div>
          </div>
          <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </footer>
    <!-- End Footer -->

    
</body>
</html>