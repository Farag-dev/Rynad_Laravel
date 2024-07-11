@extends('frontend.layout.app')
@section('title')
Blog
@endsection
@section('content')

 <!-- Blog Start -->
 <div class="container-fluid blog py-5 my-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Dernières nouveautés du blog</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="{{ asset('frontend/img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3  text-white rounded"
                        style="top: -28px; right: 20px; background-color:#2e2ea3a8 ;">La Cybersécurité</span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3"
                        style="margin-top: -75px;">
                        <div class="blog-icon btn  px-3 rounded-pill my-auto" style="background-color: #2e2ea3;">
                            <a href="" class="btn text-white">Read More</a>
                        </div>
                        <div class="blog-btn-icon btn  px-4 py-3 rounded-pill " style="background-color: #2e2ea3;">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3" ></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="{{ asset('frontend/img/admin1.png') }}" class="img-fluid rounded-circle border border-4 border-white mb-3"
                            alt="" >
                        <h5 class="">By Rynad GuardNet</h5>
                        <span class=""style="color: #2e2ea3;">24 March 2023</span>
                        <p class="py-2">La Cybersécurité : Un Enjeu Crucial dans le Monde Numérique Actuel</p>
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
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection
