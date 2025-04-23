@extends('layouts.frontendMaster')

@section('title', 'Blogs')

@section('content')

<!--===== BLOG HEADER STARTS=======-->
<div class="welcomeabout-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcomeaboiut2 text-center">
                <h1 class="font-lora font-60 lineh-64 weight-500 color margin-b24">Our Blogs</h1>
                <p class="font-20 weight-500 font-ks lineh-20 color"><a href="{{ url('/') }}" class="color">Home</a> <span><i class="fa-solid fa-angle-right"></i></span> Blogs</p>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG HEADER END=======-->

<!--===== BLOG SECTION STARTS=======-->
<div class="cloginner-3-sevtion-area section-padding5">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog1-boxarea">
                    <div class="blog1-img">
                        <img src="{{ asset('uploads/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                    </div>
                    <div class="blog1-padding">
                        <div class="blog1-text">
                            <img src="{{ asset('assets/images/icons/vector1.png') }}" alt="">
                            <a href="#" class="color-29">
                                <p class="font-ks font-16 weight-600 color-29 lineh-26">{{ date('d M Y', strtotime($blog->date)) }}</p>
                            </a>
                        </div>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="font-lora font-20 lineh-30 weight-600 color-29 margin-b d-inline-block link-hover">
                            {{ $blog->title }}
                        </a>
                        <p class="font-16 font-ks lineh-26 weight-500 color-26 margin-b">
                            {!! Str::limit(strip_tags($blog->details), 80, '...') !!}
                        </p>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="font-ks font-16 lineh-16 color-29 weight-700 d-inline-block laearnmore2 bloginnerhover">
                            Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 text-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
<!--===== BLOG SECTION END=======-->

@endsection

