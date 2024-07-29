@extends('frontend.layout.app')
@section('title')
Home
@endsection
@section('content')
    <!-- head  -->
    <header class="head1 pb-3">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container mx-auto mt-5  py-3" >
        <div class="row justify-content-center align-items-center hero-content">
                        <div class="col-lg-6  py-4 text-hero">
                            <h1 class="  " style="color: #e7e9ee;">
                                Maîtrisez la Cybersécurité, Façonnez Votre Avenir !</h1>
                                <p class="mt-3 para-hero">
                                    Découvrez nos parcours de formation en
                                    <span class="highlight">cybersécurité</span> et préparez-vous à exceller dans le monde numérique !
                                    Bénéficiez d'un
                                    <span class="highlight">accompagnement personnalisé</span> pour obtenir des
                                    <span class="highlight">certifications</span> mondialement reconnues et devenir un expert en sécurité en ligne !
                                </p>

                            <button class="btn text-white " style="background-color:#2e2ea3;">Obtenez votre guide gratuit
                            </button>
                        </div>
                        <div class="col-lg-1  "></div>
                        <div class="col-lg-4  m-0 ">
                            <form action="{{ route('contact.store') }}" method="POST" class="row m-0 g-3  text-dark glass-form">
                                @csrf
                                <div class="col-lg-12   p-1 align-content-center " style=" background-color:#2e2ea3a8 ;">
                                    <h5 class="text-white text-center p-2"> Inscrivez-vous dès maintenant !</h5>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="f_name" placeholder="Prénom" id="f_name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="l_name" placeholder="Nom" id="l_name" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" name="WHATSAPP" id="WHATSAPP" placeholder="numéro de téléphone" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email@xyz.com" required>
                                </div>
                                <!-- Add other input fields as necessary -->
                                <div class="col-12 mb-2 ">
                                    <button class="btn text-white" style="background-color: #2e2ea3;" type="submit">Soumettre le Formulaire</button>
                                </div>

                            </form>

                        </div>
            </div>
        </div>
    </div>
</header>
<!--offer start-->
<section class="container mt-5 ">
    <h4 class="text-center ">Chez Rynad GuardNet, on vous propose plus de 40 certifications mondialement reconnues et un coaching personnalisé pour faire avancer votre carrière.</h4>

         <div class="row py-4">
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class="fa fa-thin fa-laptop-code text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Apprendre à votre propre rythme</h5>
                    <p class="text-center">Profitez d'un accès flexible aux cours et aux ressources pour apprendre selon
                        votre emploi du temps.</p>
                </div>
            </div>
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class=" fa fa-light fa-expand-arrows-alt text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Maximiser les opportunités</h5>
                    <p class="text-center">Passez autant de certifications que vous le souhaitez pendant la période d'abonnement.</p>
                </div>
            </div>
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class=" fas fa-sharp fa-thin fa-project-diagram text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Adapter le parcours</h5>
                    <p class="text-center">Réévaluez et ajustez votre plan de
                        formation en fonction de vos progrès et de vos besoins changeants.</p>
                </div>
            </div>
         </div>
</section>
<!--offer end-->
<!--certificates start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 suppliers">
          <img src="{{ asset('frontend/img/suppliers.png') }}" class="img-fluid imgsup" alt="security certificates" >
        </div>

    </div>

</div>
<!--certificates end-->

    <!-- Fact Start -->
    <div class="container-fluid py-5 mt-5 statistac">
        <div class="container pt-5 statistiques text-center">
            <div class="row">
                <div class="col-lg-3 wow fadeIn stat " data-wow-delay="0.1s">
                    <div class="d-flex counter text-center   annees">
                        <h1 class="me-2 ms-3 text-white  counter-value">7</h1><span><h1 class="text-white ">ANNÉES</h1></span> <br>
                    </div>
                    <div class=" w-75">
                       <h5 class="text-white mt-1"> D'EXPERTISE ET DE COMPÉTENCES ÉPROUVÉES.</h5>
                    </div>

                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".3s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">ENGAGEMENT ET SUIVI CONTINUS POUR GARANTIR VOTRE RÉUSSITE.</h5>
                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".5s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">PROGRAMME PERSONNALISABLE SELON VOS BESOINS ET VOS OBJECTIFS.</h5>
                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".7s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">ENGAGEMENT ET SUIVI CONTINUS POUR GARANTIR VOTRE RÉUSSITE.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- About Start -->
    <div class="container-fluid py-5 my-2">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('frontend/img/bootcamp.jpg') }}" class="img-fluid w-50 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('frontend/img/online_conference.jpg') }}" class="img-fluid w-75 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h1 class="mb-4">
                        Explorez nos activités et découvrez tout ce que nous avons à vous offrir !</h1>
                    <h4>Explorez nos événements captivants en cybersécurité pour renforcer vos compétences avec des experts mondiaux.
                    </h4>
                    <a href="" class="btn p-4 mt-3 text-white" style="background-color: #2e2ea3;">DÉCOUVREZ NOS ÉVÉNEMENTS</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h1>Dernières nouveautés du blog</h1>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($blogs as $blog)
                <div class="col-lg-6 col-xl-4 wow fadeIn"  data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded" >
                        <img src="{{ Storage::url($blog->image) }}" class="img-fluid w-100 rounded-top" alt="">
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn  px-3 rounded-pill my-auto" style="background-color: #2e2ea3;">
                                <a href="{{ route('Blogdetails',['id'=>$blog->id,'main_title'=>$blog->main_title]) }}" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn  px-4 py-3 rounded-pill " style="background-color: #2e2ea3;">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3" ></i></p>
                                </div>
                                <?php
                                $url=route('Blogdetails', $blog->id);
                                $text = route('Blogdetails', $blog->id);
                                ?>
                                <div class="blog-icon-2">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($url) }}&title={{ urlencode($blog->main_title) }}&summary={{ urlencode($blog->Introduction) }}&source={{ urlencode('Rynad GuardNet') }}" target="_blank" class="btn me-1"><i class="fab fa-linkedin-in text-white"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->main_title) }}&url={{ urlencode($url) }}&via={{ urlencode('RynadGuardNet') }}" target="_blank" class="btn me-1"><i class="fa-brands fa-x-twitter text-white"></i></a>
                                    <a href="https://wa.me/?text={{ urlencode($text) }}" target="_blank"class="btn me-1"><i class="fab fa-whatsapp text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{ asset('frontend/img/admin1.png') }}" class="img-fluid rounded-circle border border-4 border-white mb-3"
                                alt="" >
                            <h5 class="">By Rynad GuardNet</h5>
                            <span class=""style="color: #2e2ea3;">{{ $blog->created_at }} </span>
                            <p class="py-2">{{ $blog->main_title }}</p>
                        </div>
                        <div
                            class="blog-coment d-flex justify-content-between px-4 py-2 border  rounded-bottom" style="background-color:#2e2ea3 ;">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 "style="color: #ffffff;"></i>0
                                    Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 "style="color: #ffffff;"></i>0
                                    Comments</small></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
