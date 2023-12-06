<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link href="user/assets/img/clients/imprimante.png" rel="icon">
  <title>OurCheck</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->



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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"><span>Our</span>Check<span>.</span></a></h1>
 

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">À propos</a></li>
          <li><a class="nav-link scrollto" href="#tabs">Fonctionnalité</a></li>
          <li><a class="nav-link scrollto" href="#Services">Services</a></li>
          <li><a href="#catalogue">Forfaits</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('login')}}" class="get-started-btn scrollto">S'identifier</a>
      <a href="{{route('register')}}" class="get-started-btn scrollto">S'inscrire</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bienvenue sur <span>Our</span>Check</h1>
          <h2>Simplifiez et optimisez votre processus de création et de gestion des chèques grâce à notre solution en ligne innovante.</h2>
          <a href="#about" class="btn-get-started scrollto">Commencer</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="user/assets/img/clients/img1.png" class="img-fluid" alt="Client 1">
            </div>
            <div class="swiper-slide">
              <img src="user/assets/img/clients/img2.png" class="img-fluid" alt="Client 2">
            </div>
            <div class="swiper-slide">
              <img src="user/assets/img/clients/img4.jpg" class="img-fluid" alt="Client 4">
            </div>
            <div class="swiper-slide">
              <img src="user/assets/img/clients/img5.png" class="img-fluid" alt="Client 5">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
    
        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Découvrez notre histoire et notre mission</h3>
              <p>
                Apprenez comment notre équipe a développé cette plateforme pour simplifier la gestion des chèques de manière efficace et conviviale.
              </p>
              <a href="#" class="about-btn"><span>En savoir plus</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-group"></i>
                  <h4>Notre équipe</h4>
                  <p>Une équipe passionnée et expérimentée dédiée à simplifier la gestion des chèques pour vous.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                  <i class="bx bx-show"></i>
                  <h4>Notre vision</h4>
                  <p>Faciliter les processus financiers grâce à une technologie intuitive.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="700">
                  <i class="bx bx-check-shield"></i>
                  <h4>Sécurité</h4>
                  <p>Vos transactions et vos informations personnelles sont notre priorité.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="800">
                  <i class="bx bx-receipt"></i>
                  <h4>Notre solution</h4>
                  <p>Une plateforme en ligne intuitive pour créer et gérer vos chèques en quelques clics.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
    
      </div>
    </section><!-- End About Section -->


    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bx bx-edit"></i>
              <h4 class="d-none d-lg-block">Création de chèques</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="fas fa-robot"></i>
              <h4 class="d-none d-lg-block">Automatisation</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bx bx-printer"></i>
              <h4 class="d-none d-lg-block">Impression rapide</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bx bx-history"></i>
              <h4 class="d-none d-lg-block">Historique des transactions</h4>
            </a>
          </li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Création de chèques</h3>
                <p>Utilisez notre interface conviviale pour créer facilement des chèques en saisissant les informations requises, telles que le montant, le bénéficiaire, et la date.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="user/assets/img/tabs-1.jpg" alt="" class="img-fluid" >
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Automatisation</h3>
                <p>Notre système intelligent automatise certaines tâches, comme la conversion du montant en lettres, afin de vous faire gagner du temps et d'éliminer les erreurs potentielles.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="user/assets/img/tabs-2.jpg" alt="" class="img-fluid" >
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Impression rapide</h3>
                <p>Une fois le chèque créé, vous pouvez l'imprimer instantanément à l'aide de votre imprimante connectée.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="user/assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Historique des transactions</h3>
                <p>Notre application enregistre l'historique complet de toutes les transactions effectuées, offrant ainsi une vue d'ensemble de vos dépenses et une meilleure organisation financière.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Tabs Section --><!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="Services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nos Services</h2>
          <p>Découvrez les services que nous proposons pour une gestion efficace des chèques.</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Impression des chèques</a></h4>
              <p>Imprimez des chèques personnalisés avec les informations essentielles, telles que le bénéficiaire, le montant et la date.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Émission des chèques</a></h4>
              <p>Émettez facilement des chèques aux destinataires, en garantissant un traitement précis et rapide des paiements.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Encaissement des chèques</a></h4>
              <p>Encaissez efficacement les chèques via le système bancaire pour faciliter le transfert de fonds.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Suivi des chèques</a></h4>
              <p>Suivez l'état des chèques émis, y compris les dépôts, les encaissements et les rapprochements.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= testimonial Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Témoignages de clients</h2>
          <p>Voici ce que nos clients disent de nous:</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
    
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="user/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Photo du client 1">
                  <h3>Lucie Martin</h3>
                  <h4>Directrice financière chez ABC Inc.</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Nous avons récemment commencé à utiliser le logiciel de gestion de chèques de cette entreprise et nous sommes très satisfaits des résultats. La gestion des chèques est plus efficace et rapide, et le service client est excellent.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="user/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Photo du client 2">
                  <h3>Thomas Dubois</h3>
                  <h4>Comptable chez XYZ SA</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Nous utilisons le logiciel de gestion de chèques depuis plus d'un an et nous avons remarqué une amélioration significative dans nos processus de paiement. Le logiciel est facile à utiliser et le support technique est rapide et efficace.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="user/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="Photo du client 3">
                  <h3>Alice Dupont</h3>
                  <h4>Responsable administratif chez LMN SARL</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Nous avons choisi ce logiciel pour sa simplicité et sa fiabilité. Nous n'avons jamais eu de problème avec les paiements de nos chèques depuis que nous l'utilisons. De plus, le support client est très compétent et disponible.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              
            </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-wrap">
                        <div class="testimonial-item">
                          <img src="user/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="Photo du client 5">
                          <h3>Sophie Laurent</h3>
                          <h4>Responsable des finances chez DEF Corp</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Depuis que nous utilisons le logiciel de gestion de chèques, nous avons constaté une réduction significative des erreurs de traitement et une meilleure traçabilité des paiements. Cela a grandement amélioré notre efficacité opérationnelle.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->
            
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
            
              </div>
            </section>
            <!-- End testimonial item -->
    
        <!-- End Testimonials Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="catalogue" class="pricing section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>FORFAITS</h2>
          <p>Notre catalogue offre une gamme de services pour la gestion des chèques, adaptée aux besoins de votre entreprise.</p>
        </div>
    
        <div class="row">
          @foreach ($price as $item)
              
               @if ($item->type=="PREMIUM")
               <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                 <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                   <h3>{{$item->type}}</h3>
                   <h4><sup>$</sup>{{$item->price}}<span> / mois</span></h4>
                   <ul>
                     <li> Gestion de {{$item->proprity}} chèques</li>
                     <li>Export de rapports de gestion personnalisables</li>
                     <li>Accès à la base de données en ligne</li>
                     <li>Intégration avec d'autres systèmes de paiement</li>
                     <li class="na">Gestion des chèques impayés</li>
                   </ul>
                   <div class="btn-wrap">
                     <a href="{{url('paiment_page',$item->id)}}" class="btn-buy">Acheter maintenant</a>
                   </div>
                 </div>
               </div>
                @else
                
               <div class="col-lg-4 col-md-6">
                 <div class="box" data-aos="fade-up" data-aos-delay="100">
                   <h3>{{$item->type}}</h3>
                   <h4><sup>$</sup>{{$item->price}}<span> / mois</span></h4>
                   <ul>
                     <li>Gestion de {{$item->proprity}} chèques</li>
                     <li>Export de rapports de gestion</li>
                     <li>Accès à la base de données en ligne</li>
                     <li class="na">Gestion des chèques sortants</li>
                     <li class="na">Intégration avec d'autres systèmes de paiement</li>
                   </ul>
                   <div class="btn-wrap">
                     <a href="{{url('paiment_page',$item->id)}}" class="btn-buy">Acheter maintenant</a>
                   </div>
                 </div>
               </div>  
                   
               @endif
     
               @endforeach
         
         
             </div>
    
        </div>
    
      </div>
    </section>
    
<!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Questions fréquemment posées</h2>
        </div>
        
        <ul class="faq-list accordion" data-aos="fade-up">
        
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Qu'est-ce que la gestion des chèques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                La gestion des chèques est un processus permettant de gérer toutes les opérations liées aux chèques, telles que l'émission, l'encaissement, le suivi des paiements, etc. Elle vise à assurer un suivi efficace et sécurisé des transactions effectuées par chèque.
              </p>
            </div>
          </li>
        
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Quels sont les avantages de la gestion des chèques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                La gestion des chèques présente plusieurs avantages, notamment :
                <ul>
                  <li>Automatisation des processus liés aux chèques, ce qui permet de gagner du temps et d'optimiser les opérations financières.</li>
                  <li>Amélioration de la sécurité des transactions grâce à la détection des chèques frauduleux.</li>
                  <li>Facilitation du suivi des paiements et des encaissements.</li>
                  <li>Centralisation des informations relatives aux chèques, ce qui facilite la gestion et la prise de décision.</li>
                </ul>
              </p>
            </div>
          </li>
        
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Comment fonctionne la gestion des chèques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                La gestion des chèques implique plusieurs étapes, telles que :
                <ul>
                  <li>Enregistrement des informations relatives aux chèques émis et reçus.</li>
                  <li>Vérification de l'authenticité des chèques et détection des éventuelles fraudes.</li>
                  <li>Encaissement des chèques et suivi des paiements.</li>
                  <li>Archivage des données et génération de rapports.</li>
                </ul>
              </p>
            </div>
          </li>
        
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Quelles sont les fonctionnalités d'un système de gestion des chèques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Un système de gestion des chèques peut offrir différentes fonctionnalités, notamment :
                <ul>
                  <li>Enregistrement et suivi des chèques émis et reçus.</li>
                  <li>Vérification de l'authenticité des chèques et détection des fraudes.</li>
                  <li>Gestion des bénéficiaires et des comptes bancaires associés.</li>
                  <li>Automatisation des processus d'encaissement et de paiement des chèques.</li>
                  <li>Émission de rapports et de statistiques sur les transactions par chèque.</li>
                  <li>Intégration avec d'autres systèmes de gestion financière.</li>
                  <li>Stockage sécurisé des données relatives aux chèques.</li>
                </ul>
              </p>
            </div>
          </li>
        
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Quels sont les avantages d'utiliser un système de gestion des chèques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                L'utilisation d'un système de gestion des chèques présente plusieurs avantages, tels que :
                <ul>
                  <li>Gain de temps et d'efficacité dans le traitement des chèques.</li>
                  <li>Amélioration de la précision et de l'exactitude des données.</li>
                  <li>Réduction des risques de fraudes et de pertes financières.</li>
                  <li>Facilitation du suivi des transactions et de la gestion des comptes.</li>
                  <li>Amélioration de la conformité aux normes et réglementations financières.</li>
                  <li>Optimisation des processus financiers et réduction des coûts.</li>
                </ul>
              </p>
            </div>
          </li>
        
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Comment choisir un système de gestion des chèques adapté à ses besoins ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Lors du choix d'un système de gestion des chèques, il est important de prendre en compte les éléments suivants :
                <ul>
                  <li>Les fonctionnalités offertes par le système et leur adéquation avec vos besoins spécifiques.</li>
                  <li>La convivialité de l'interface utilisateur et la facilité de navigation.</li>
                  <li>La sécurité des données et les mesures de protection mises en place.</li>
                  <li>La compatibilité avec vos systèmes existants et la possibilité d'intégration.</li>
                  <li>Les services de support et de maintenance proposés par le fournisseur du système.</li>
                  <li>Les coûts associés à l'acquisition, à la mise en place et à l'utilisation du système.</li>
                </ul>
              </p>
            </div>
          </li>
        
        </ul>
      </div>
    </section>                
   <!-- End Frequently Asked Questions Section -->

    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Notre objectif est de faciliter la gestion des chèques. Si vous avez des questions, des commentaires ou si vous souhaitez en savoir plus sur notre projet, n'hésitez pas à nous contacter. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
        </div>
    
        <div class="row" data-aos="fade-up" data-aos-delay="100">
    
          <div class="col-lg-6">
    
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Notre Adresse</h3>
                  <p>Agadir hay Elhouda</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Contactez-nous par email</h3>
                  <p>Ourcheck@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Appelez-nous</h3>
                  <p>+*********</p>
                </div>
              </div>
            </div>
    
          </div>
    
          <div class="col-lg-6">
            <form action="{{ url('upload_message') }}" method="POST"  class="php-email-form">
              @csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" placeholder="Votre Nom" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci !</div>
              </div>
                
              <div class="text-center"><button type="submit">Envoyer le Message</button></div>
            </form>
          </div>
    
        </div>
    
      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="user/assets/vendor/aos/aos.js"></script>
  <script src="user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="user/assets/js/main.js"></script>

</body>

</html>