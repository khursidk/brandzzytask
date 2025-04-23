@extends('layouts.frontendMaster')

@section('title', 'Dashboard')

@section('content')


 
<div class="welcome-eightsection-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="welcome8-header" data-aos="fade-left" data-aos-duration="1000">
          <span class="font-ks font-16 weight-600 lineh-26 services8 colorspan margin-b20 d-inline-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore eveniet amet eius dolores doloribus fugiat eum, porro id ipsum laudantium officia nostrum? Cum, harum et sit sequi veniam alias magni.</span>
          
        </div>
      </div>
      <div class="col-lg-6">
        
      </div>
    </div>
  </div>
  <img src="../html.fleexstudio.com/consult/assets/images/elementor/elementor49.png" alt="" class="elementors7 aniamtion-key-1">
</div>
 

 
 
 

 
<!--===== BLOG SECTION STARTS=======-->
<div class="blog8-section-area section-padding8">
    <img src="{{ asset('assets/images/elementor/elementor51.png') }}" alt="" class="elemenotrs16">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="blog-7-header text-center margin-b60">
                    <span class="about8 font-ks font-16 lineh-16 color39 weight-500 margin-b20 d-inline-block">Our Blogs</span>
                    <h1 class="font-lora font-44 weight-600 lineh-52 color39 margin-b20">Our Latest News & Blog</h1>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="{{ 800 + ($loop->index * 200) }}">
                    <div class="blog1-boxarea blog7boxarea">
                        <div class="blog1-img">
                            <img src="{{ asset('uploads/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog1-padding blog8area">
                            <div class="blog1-text">
                                <img src="{{ asset('assets/images/icons/vector1.png') }}" alt="" class="ts">
                                <a href="#" class="color-h7">
                                    <p class="font-ks font-16 weight-500 color-h7 lineh-26 ts">{{ date('d M Y', strtotime($blog->date)) }}</p>
                                </a>
                            </div>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="font-lora font-24 lineh-30 weight-500 color-h7 margin-b d-inline-block link-hover ts">
                                {{ $blog->title }}
                            </a>
                            <p class="font-16 font-ks lineh-26 weight-500 color-hp1 margin-b ts">
                                {!! Str::limit(strip_tags($blog->details), 80, '...') !!}
                            </p>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="font-ks font-16 lineh-16 color-h8 weight-700 d-inline-block laearnmore2 ts">
                                Learn More <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 text-center mt-4">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/elementor/elemenotor54.png') }}" alt="" class="elementors15">
</div>
<!--===== BLOG SECTION END=======-->

<!--===== BLIOG END=======-->

 

 
@endsection