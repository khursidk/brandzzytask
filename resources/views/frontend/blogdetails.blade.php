@extends('layouts.frontendMaster')

@section('title', 'Dashboard')

@section('content')

<!--===== WElCOME STARTS=======-->
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 color margin-b24">{{ $blog->title }}</h1>
                <p class="font-20 weight-500 font-ks lineh-20 color"><a href="/" class="color">Home</a><span><i class="fa-solid fa-angle-right"></i></span>Blog Details</p>
            </div>
        </div>
    </div>
</div>
<!--===== WElCOME END=======-->

<!--===== BLOGLEFT STARTS=======-->
<div class="blogleft-section-area section-padding5">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="blogleftinner3-area p-0">
                    <img src="{{ asset('uploads/' . $blog->image) }}" alt="" class="w-100 innerimg">

                    <div class="afteralex-area">
                        <div class="alex">
                            <img src="assets/images/sectionimg/alex1.png" alt="">
                            <a href="#" class="color-29">
                                <p class="font-ks font-16 lineh-24 weight-600 color-29">{{ $blog->written_by }} </p>
                            </a>
                        </div>
                        <div class="alex">
                            <img src="assets/images/icons/daterane.png" alt="">
                            <a href="#" class="font-16 lineh-16 font-ks weight-600 color-29">{{ date('d M Y', strtotime($blog->date)) }}</a>
                        </div>
                        <div class="alex">
                            <img src="assets/images/icons/tag1.png" alt="">
                            <a href="#" class="color-29">
                                <p class="font-ks font-16 lineh-24 weight-600 color-29">Business Evaluation</p>
                            </a>
                        </div>


                    </div>



                    <div class="peragraph-pera peragraeabg">
                        <p class="font-16 font-ks font-16 lineh-26 weight-500 color ts">{{ $blog->title }}</p>
                    </div>
                    <div class=" align-items-center">
                        <div class="mt-4 blog-details-content">
                            {!! $blog->details !!}
                        </div>


                    </div>

                    <div class="border30 borderpadding"></div>
                    

                    

                 

                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOGLEFT  END=======-->

<!--===== BLOGLEFT BLOG STARTS=======-->
 
<!--===== BLOGLEFT BLOG END=======-->


<!--===== CTA STARST=======-->
<div class="cta5-section-area section-padding4">
    <img src="assets/images/elementor/elementor72.png" alt="" class="elementors72">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta5-auhtor6-area">
                    <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get expert Law advice on criminal strategies</h1>
                    <p class="font-ks font-16 lineh-26 weight-500 color-21">We believe that informed clients make better Law decisions. As part of our service, we'll provide educational resources and workshops to help.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="cta5-btn5-sexction">
                    <a href="/contact" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Get Law Advice <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    <a href="/contact" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/elementor/elementor72.png" alt="" class="elementors73">
</div>
@endsection