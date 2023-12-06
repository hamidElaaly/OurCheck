<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="user/assets/img/clients/imprimante.png" rel="icon">
  <title>OurCheck</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
  <style>
    
    .form-image-container {
      display: flex;
      flex-wrap: wrap;
    }
    
        .form-container {
        border-radius: 10px;
        padding-left: 10px;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        position: relative;
        margin: 60px 10px;
        width: 25%;

        }





        label{
        font-size: 15px;
        font-weight: 900;
        font-family: 'Montserrat';
        margin-bottom: 2px;
        display: block;
        color: white;
        }

        input{
        display: block;
        width: 100%;
        height: 40px;
        outline: none;
        padding: 11px 20px;
        box-sizing: border-box;
        font-family: 'Montserrat';
        font-weight: 500;
        font-size: 13px;
        }

        input {
        outline: none;
        appearance: unset !important;
        -moz-appearance: unset !important;
        -webkit-appearance: unset !important;
        -o-appearance: unset !important;
        -ms-appearance: unset !important; }

        select{
        display: block;
        width: 100%;
        border: 2px solid #ebebeb;
        box-sizing: border-box;
        font-family: 'Montserrat';
        font-weight: 500;
        font-size: 13px;
        padding-left: 10px;
        }
        input:focus, select:focus {
        border: 1px solid #ff6801; }

body {
     position: relative;
    }

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




        .image-container {
        position: relative;
     
        margin: 0 auto;
        margin-top: 200px;
        }

        .imprimer {
        text-align: center;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        padding: 20px;
        border-radius: 15px;
        font-size: 20px;
        font-weight:600;
        margin: 0 auto;
        margin-top: 40px;
        width: 50%;
        box-sizing: border-box;
        cursor: pointer;
        }
        .imprimer:hover{
        background:linear-gradient(90deg, #e23e40, #ff7a7a) ;
        color: white;
        }

        @media (max-width: 768px) {
    .form-container{
      width: 100%;
    }
    .image-container {
      width: 80%;
      margin-top: 10px;
    }
    .imprimer{
      margin-top: 10px;
      font-size: 16px;
      width: 80%;
      margin-bottom: 10px;
    }
  

  }
</style>

</head>

<body>

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
          <li><a class="nav-link scrollto active" href="{{url('check_page')}}">Cheque</a></li>
          <li><a class="nav-link scrollto" href="{{url('historique_page')}}">Historique</a></li>
          <x-app-layout>
          </x-app-layout>
          @endauth
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     
   @guest
       <a href="{{route('login')}}" class="get-started-btn scrollto">s'identifier</a>
      <a href="{{route('register')}}" class="get-started-btn scrollto">s'inscrire</a>
   @endguest
      
    </div>
  </header>
  <!-- End Header -->

  <!-- Add your image here -->
  


<div class="form-image-container mt-5">
  <div class="form-container">
    <!-- Add this code inside the form-container -->

    <label for="attempts" class="form-label">Tentatives restantes :</label>
    
     @if (Auth::user())
     <input type="text" id="attempts" value="{{Auth::user()->remaining_attempts }}" disabled>
     @endif
    
    <section id="tabs" class="tabs " >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 mt-3 mt-lg-0" style="width: 100%;">
          <aside>
            <form id="printSection" action="{{ url('upload_check') }}" method="POST" >
                @csrf
              <div class="mb-3">
                <label for="state" class="form-label">Pays :</label>
                <select id="pay" name="pay" class="form-control input-lg dynamic" data-dependent="bank">
                    <option value="">--CHOISISSEZ-LE-PAYS--</option>
                    @foreach ($country_list as $item)
                    <option value="{{$item->pay}}" >{{$item->pay}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="mb-3">
                <label for="banks" class="form-label">Banque:</label>
                <select id="bank" class="form-control input-lg dynamic" name="bank" style="color: black;">
                    <option value="">--SÉLECTIONNER-LA-BANQUE--</option>
                  </select>
              </div>
              <div>
                <input type="hidden"  id="Dx_order" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_order" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_date" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_date" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dxcv_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dycv_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_for" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_for" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_bares" style="color: black; width: 200px;">
                <input type="hidden" id="Dy_bares" style="color: black; width: 200px;">
                <input type="hidden"  id="width" style="color: black; width: 200px;">
                <input type="hidden"  id="height" style="color: black; width: 200px;">
              </div>

              <div class="mb-3">
                <label for="date" class="form-label">Date de Chèque:</label>
                <input type="date" style="border-radius: 10px" id="datecheque" onInput="draw()" name="datecheque" >
                  <div class="datecheque-pos"></div>
              </div>
              <script>
                // Set default value to current date
                const currentDate = new Date().toISOString().split('T')[0];
                document.getElementById('datecheque').value = currentDate;
              
                function displaySelectedDate() {
                  const inputElement = document.getElementById('datecheque');
                  const selectedDate = inputElement.value;
                  const displayElement = document.querySelector('.datecheque-pos');
                  displayElement.textContent = "Selected Date: " + selectedDate;
                }
              </script>
              

              <div class="mb-3">
                <label for="order" class="form-label">A l'ordre:</label>
                <input type="text" style="border-radius: 10px" id="order" onInput="draw()" name="order" style="color: black" >
                  <div class="order-pos"></div>
              </div>
              <div class="mb-3">
                <label for="montant" class="form-label">Montant:</label>
                <input type="number" style="border-radius: 10px" id="montant" onInput="draw()" name="montant" style="color: black" >
                <div class="montant-pos"></div>
              </div>
              <div class="mb-3">
                <label for="payer" class="form-label">Fait a:</label>
                <input type="text" style="border-radius: 10px" id="payerpour" onInput="draw()" name="payerpour" style="color: black" >
                <div class="payerpour-pos"></div>
              </div>
              <div class="mb-3">
                <label for="cheque" class="form-label">Chèque barré:</label>
                <input list="b" style="border-radius: 10px" id="chequebarre" onInput="draw()" name="chequebarre" style="color: black" >
                    <datalist id="b">
                        <option value="/ /">
                        <option value="A/c Payee">
                         <option value="يصرف للمستفيد الأول">
                        <option value="Non Endossable">
                    
                    </datalist>
            <div class="chequebarre-pos"></div>
              </div>
              <button id="hhh" style="padding: 5px;background-color: white;width: 250px;" class="imprimer" type="submit" style="background-color: rgb(4, 4, 53)">Ajouter Au historique</button>
          </form>
          
          </aside>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="image-container" >
   <div style="position: relative; ">
            <img id="bank-image" src="images/1683812141.jpg" alt="Bank Image">
            <canvas id="bank-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;"></canvas>
        </div>
        
        <h4 style="color: white" class="imprimer" ><a id="printBtn" href="{{ route('print.check') }}" >Imprimer Cheque</a></h4>
</div>
</div>
<!-- ======= change contries  ======= -->



<script>
    $(document).ready(function(){
      $('#pay').on('change', function(){
        var pay_id = $(this).val();
        if(pay_id){
          $.ajax({
            url: '/get-banks/'+pay_id,
            type: 'GET',
            dataType: 'json',
            success: function(data){
              $('#bank').empty();
              $('#bank').append('<option value="">--SELECT-PAYS--</option>');
              $.each(data, function(key, value){
              $('#bank').append('<option  data-image="'+value['image']+'" data-width="'+value['width']+'" data-height="'+value['height']+'" >'+ value['name'] +'</option>');
              });
        
            }
          });
        }
      });
      $('#bank').on('change', function() {
        var bank_image = $(this).find(':selected').data('image');
        var width = $(this).find(':selected').data('width');
        var height = $(this).find(':selected').data('height');
        if (bank_image) {
          $('#bank-image').attr('src', '/images/' + bank_image);
          $('#bank-image').css('width', width + 'px');
          $('#bank-image').css('height', height + 'px');
          $('#width').val(width);
          $('#height').val(height);
          $('#bank-canvas').attr('width', width + 'px');
          $('#bank-canvas').attr('height', height + 'px');
          drawCanvas();
        }
    
      });
      function drawCanvas() {
        var canvas = document.getElementById('bank-canvas');
        var context = canvas.getContext('2d');
    
        // Clear previous content
        context.clearRect(0, 0, canvas.width, canvas.height);
    
        // Draw image on canvas
        var image = document.getElementById('bank-image');
        context.drawImage(image, 0, 0, canvas.width, canvas.height);
      }
    });
    </script>

    
<script>
    $(document).ready(function(){
     $('#bank').on('change', function(){
         var bank = $(this).find('option:selected').text();
         if(bank){
           $.ajax({
             url: '/get-pos/'+bank,
             type: 'GET',
             dataType: 'json',
             success: function(data){
             $.each(data, function(key, value){
               $('#Dx_order').replaceWith('<input type="hidden" id="Dx_order" name="Dx_order" value="'+value['orderX']+'" style="color: black; width: 200px;">');
               $('#Dy_order').replaceWith('<input type="hidden" id="Dy_order" name="Dx_order" value="'+value['orderY']+'" style="color: black; width: 200px;">');
               $('#Dx_date').replaceWith('<input type="hidden" id="Dx_date"  value="'+value['dateX']+'" style="color: black; width: 200px;">');
               $('#Dy_date').replaceWith('<input type="hidden" id="Dy_date"  value="'+value['dateY']+'" style="color: black; width: 200px;">');
               $('#Dx_Montant').replaceWith('<input type="hidden" id="Dx_Montant" value="'+value['MontantX']+'" style="color: black; width: 200px;">');
               $('#Dy_Montant').replaceWith('<input type="hidden" id="Dy_Montant" value="'+value['MontantY']+'" style="color: black; width: 200px;">');
               $('#Dxcv_Montant').replaceWith('<input type="hidden" id="Dxcv_Montant" value="'+value['MontantXv']+'" style="color: black; width: 200px;">');
               $('#Dycv_Montant').replaceWith('<input type="hidden" id="Dycv_Montant" value="'+value['MontantYv']+'" style="color: black; width: 200px;">');
               $('#Dx_for').replaceWith('<input type="hidden" id="Dx_for" value="'+value['forX']+'" style="color: black; width: 200px;">');
               $('#Dy_for').replaceWith('<input type="hidden" id="Dy_for" value="'+value['forY']+'" style="color: black; width: 200px;">');
               $('#Dx_bares').replaceWith('<input type="hidden" id="Dx_bares" value="'+value['baresX']+'" style="color: black; width: 200px;">');
               $('#Dy_bares').replaceWith('<input type="hidden" id="Dy_bares" value="'+value['baresY']+'" style="color: black; width: 200px;">');
               $('#width').replaceWith('<input type="hidden" id="width" value="'+value['width']+'" style="color: black; width: 200px;">');
               $('#height').replaceWith('<input type="hidden" id="height" value="'+value['height']+'" style="color: black; width: 200px;">');
             });
             },
           });
         } 
       });
   
   });
    
   
   </script>

   
<script>
    function draw() {
        const canvas = document.getElementById('bank-canvas');
        const ctx = canvas.getContext('2d');
        let img =document.getElementById("bank-image");
        img.src = document.getElementById("bank-image").src;
        img.addEventListener("load", ()=>{
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.clearRect(0, 0, canvas.width, canvas.height); // clear the canvas
            ctx.drawImage(img,1000,1000);
            ctx.font = '20px Arial bold';
    
            var x = document.getElementById("Dx_for").value;
            var y = document.getElementById("Dy_for").value;
            var payerpour = document.getElementById("payerpour").value;
            ctx.fillText(payerpour, x, y);
    
            var z = document.getElementById("Dx_order").value;
            var w = document.getElementById("Dy_order").value;
            var order = document.getElementById("order").value;
            ctx.fillText(order, z, w);
    
            var h = document.getElementById("Dx_Montant").value;
            var m = document.getElementById("Dy_Montant").value;
            var montant = document.getElementById("montant").value;
            ctx.fillText(montant, h, m);
    
            var n = document.getElementById("Dx_bares").value;
            var i = document.getElementById("Dy_bares").value;
            var bares = document.getElementById("chequebarre").value;

            // Set the font style
            ctx.font = "15px Arial"; // Example: 20px font size with Arial font family

            // Get the width and height of the text
            var textWidth = ctx.measureText(bares).width;
            var textHeight = parseInt(ctx.font);

            // Set the border properties
            ctx.strokeStyle = "black"; // Example: Border color
            ctx.lineWidth = 1; // Example: Border width

            // Calculate the position of the top left corner of the border
            var borderWidth = 1; // Adjust the border width as needed
            var x = parseInt(n) ;
            var y = parseInt(i) ;

            // Calculate the position to align the text within the border
            var textX = borderWidth; // Adjusted to start from the left side of the border
            var textY = textHeight + borderWidth; // Adjusted to start from the top side of the border

            // Calculate the width and height of the border
            var borderWidthWithText = textWidth + (2 * borderWidth);
            var borderHeightWithText = textHeight + (2 * borderWidth);

            // Save the current canvas state
            ctx.save();

            // Rotate the canvas context
            ctx.translate(x, y);
            ctx.rotate(-Math.PI / 4); // Rotate by -45 degrees (diagonal)

            // Draw the top border
            ctx.strokeRect(0, 0, borderWidthWithText, borderWidth);

            // Draw the bottom border
            ctx.strokeRect(0, borderHeightWithText - borderWidth, borderWidthWithText, borderWidth);

            // Draw the text
            ctx.fillText(bares, textX, textY);

            // Restore the canvas state
            ctx.restore();

            var hh = document.getElementById("Dxcv_Montant").value;
            var mm = document.getElementById("Dycv_Montant").value;
            var number = document.getElementById("montant").value;
            Convertmontant=convertNumberToFrenchText(number) + ' dirhams';
            ctx.fillText(Convertmontant, hh, mm);




    
            var l = document.getElementById("Dx_date").value;
            var k = document.getElementById("Dy_date").value;
            var date = document.getElementById("datecheque").value;
            ctx.fillText(date, l,k);
      
        });
    }
    </script>

    
<script>
    function convertNumberToFrenchText(number) {
      var units = ['', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'];
      var tens = ['', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante-dix', 'quatre-vingt', 'quatre-vingt-dix'];
    
      if (number === 0) {
        return 'zéro';
      }
    
      var text = '';
    
      if (number >= 1000000000) {
        var billions = Math.floor(number / 1000000000);
        text += convertNumberToFrenchText(billions) + ' milliard ';
        number %= 1000000000;
      }
    
      if (number >= 1000000) {
        var millions = Math.floor(number / 1000000);
        text += convertNumberToFrenchText(millions) + ' million ';
        number %= 1000000;
      }
    
      if (number >= 1000) {
        var thousands = Math.floor(number / 1000);
        if (thousands === 1) {
          text += 'mille ';
        } else {
          text += convertNumberToFrenchText(thousands) + ' mille ';
        }
        number %= 1000;
      }
    
      if (number >= 100) {
        var hundreds = Math.floor(number / 100);
        if (hundreds === 1 && number % 100 !== 0) {
          text += 'cent ';
        } else if (hundreds === 1 && number % 100 === 0) {
          text += 'cent';
        } else {
          text += units[hundreds] + '-cent ';
        }
        number %= 100;
      }
    
      if (number >= 20) {
        var tensValue = Math.floor(number / 10);
        if (tensValue === 8 && number % 10 === 0) {
          text += 'quatre-vingts ';
        } else if (tensValue === 1 && number % 10 === 1) {
          text += 'onze ';
        } else {
          text += tens[tensValue] + '-';
          if (tensValue === 7 || tensValue === 9) {
            number -= 10;
          }
        }
        number %= 10;
      }
    
      if (number > 0) {
        text += units[number] + ' ';
      }
    
        return text.trim();
    
      
    }
    
    </script>
 
 <script>
  $('#printBtn').on('click', function(event) {
    
    var canvas = document.getElementById('bank-canvas'); // Get the canvas element

    // Apply print-specific style using CSS media query
    var printStyle = '<style>@media print { body > * { visibility: hidden; } #bank-canvas { visibility: visible; height: 100%; } }</style>';
    $('head').append(printStyle);

    // Create a new window for printing
    var printWindow = window.open('', '_blank');
    printWindow.document.open();

    // Write the canvas image to the new window's document
    printWindow.document.write('<html><head></head><body>');
    printWindow.document.write('<img src="' + canvas.toDataURL() + '" style="width: 100%; height: auto;"/>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();

    // Print the new window
    printWindow.onload = function() {
      printWindow.print();
      printWindow.onafterprint = function() {
        printWindow.close();
      };
    };
  });
</script>


<script>
     $(document).ready(function() {

    var remainingAttempts = parseInt($('#attempts').val());

    $('#attempts').val(remainingAttempts);
    if (remainingAttempts === 0) {
      $('form#printSection input, form#printSection select, form#printSection button').attr('disabled', true);
      alert('limeted')
    }
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





  <!-- Vendor JS Files -->
  <script src="user/assets/vendor/aos/aos.js"></script>
  <script src="user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="user/assets/vendor/php-email-form/validate.js"></script>
  <script src="user/assets/vendor/purecounter/purecounter.js"></script>
  <script src="user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="user/assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="user/assets/js/main.js"></script>

</body>

</html>