<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Rynad GuardNet | @yield("title")</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="la Cybersécurité , La certification CISSP , Le PMP est une certification , La certification Project+
    La certification Network+ , La certification CompTIA Security+ , La certification CCFP , la certification CFCE ,
    La certification CISSP-ISSMP , La certification CISSP-ISSAP , La certification CISSP ,  la certification CBSP ,
    La certification LPIC-1 , La certification LPIC-2 , Le CEH , Le CISM , La certification CISA ,  la certification CCSP
    , la certification Cisco CyberOps" name="keywords">

    <meta content="Découvrez nos parcours de formation en cybersécurité et préparez-vous à exceller dans le
    monde numérique ! Bénéficiez d'un accompagnement personnalisé pour obtenir des
    certifications mondialement reconnues et devenir un expert en sécurité en ligne !" name="description">

    <link rel="shortcut icon" href="{{ asset('frontend/img/rynadLOGO2.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- <script>
        window.location.href = "/comingsoon.html";
    </script> -->
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->

    <div class="container-fluid m-0 navbar-dark  text-dark bg-white navbarr fixed-top ">
        <div class="container  ">
            <nav class="navbar navbar-dark navbar-expand-lg py-0 ">
                <a href="{{ route('home') }}" class="navbar-brand d-flex">
                    <img src="{{ asset('frontend/img/rynadLOGO2.png') }}" width="50px" height="50px" alt="">
                    <h4 class="text-dark fw-bold d-block ms-1 align-content-center h-50 my-auto">Rynad GuardNet</h4>
                </a>
                <button type="button" class="navbar-toggler  me-0"  data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span style="background-color: #022053; border-radius: 5px;" class="navbar-toggler-icon p-4 "></span>
                </button>
                <div class="collapse navbar-collapse  " style="float: right;" id="navbarCollapse">
                    <div class="navbar-nav ms-auto  p-0 ">
                        <a href="{{ route('home') }}" class="nav-item nav-link active text-secondary">Accueil</a>
                        <a href="{{ route('Blog') }}" class="nav-item nav-link">Blog</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield("content")

   <!-- Footer Start -->
   <div class="container-fluid footer wow fadeIn" data-wow-delay=".3s">
    <div class="container foot pt-5 pb-4">
        <div class="row g-5">

            <div class="col-lg-3 col-md-6">
                <div class="mt-4 d-flex flex-column short-link">
                    <a href="{{ route('home') }}" class="mb-2 text-white"><i class="fas fa-angle-right me-2" style="color:#5066a3ba;"></i>Accueil</a>
                    <a href="{{ route('Blog') }}" class="mb-2 text-white"><i class="fas fa-angle-right me-2" style="color:#5066a3ba;"></i>Blog</a>
                    <a href="{{ route('contact') }}" class="mb-2 text-white"><i class="fas fa-angle-right me-2" style="color:#5066a3ba;"></i>Contact</a>
                    <a href="{{ route('confidentialité') }}" class="mb-2 text-white"><i class="fas fa-angle-right me-2" style="color:#5066a3ba;"></i>Politique de confidentialité</a>
                    <a href="{{ route('Remboursement') }}" class="mb-2 text-white"><i class="fas fa-angle-right me-2" style="color:#5066a3ba;"></i>Politique de Remboursement</a>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 ">

                <div class="text-white mt-4 d-flex flex-column contact-link mt-2">
                    <a href="#" class="pb-3 text-white border-bottom border-primary"><i class="fas fa-map-marker-alt me-2" style="color:#5066a3ba;"></i> ETG 3 APPT 3, BD MASSIRA, N 6 Rue 6 Octobre, Casablanca 20250</a>
                    <a href="#" class="py-3 text-white border-bottom border-primary"><i class="fas fa-phone-alt me-2" style="color:#5066a3ba;"></i>+212 700 111 518</a>
                    <a href="mailto:connect@rynadguardnet.com" class="py-3 text-white border-bottom border-primary"><i class="fas fa-envelope me-2" style="color:#5066a3ba;"></i> connect@rynadguardnet.com</a>
                </div>

                <div class="d-flex icons hightech-link mt-2">
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fa fa-envelope" style="color:#5066a3ba;"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram" style="color:#5066a3ba;"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in" style="color:#5066a3ba;"></i></a>
                </div>

            </div>
            <div class="col-lg-5 col-md-6">
                <div class="contact-detail position-relative p-3">
                    <div class="text-center text-white mb-3">
                        <h4 class="mb-3 text-white" style="z-index: 10;">Recevez en priorité nos actualités, offres spéciales et contenus exclusifs !</h4>
                        <div class="row g-3">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8 wow fadeIn">
                                <form action="{{ route('contact.store') }}" method="Post">
                                    @csrf
                                <div class="p-3 rounded contact-form">
                                    <div class="mb-3">
                                        <input type="email" name="email" id="email" class="form-control border-0 py-2" placeholder="Votre Email">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn text-white py-2 px-4"  style="background-color: #2e2ea3;">Envoyer un message</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="text-white"><a href="#" style="color:#5066a3ba;"><i class="fas fa-copyright me-2" style="color:#5066a3ba;"></i>Rynad GuardNet</a>, All rights reserved {{ date('Y') }}.</span>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn  btn-square rounded-circle back-to-top" style="background-color:#2e2ea3;"><i
        class="fa fa-arrow-up text-white"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
