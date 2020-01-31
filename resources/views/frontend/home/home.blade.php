@extends('frontend.main')
@section('title','HRM')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center pl-0 pr-0">
        <img src="{{ asset('frontend/image/plbg-09.jpg') }}" class="img-fluid">
        </div>
    </div>

</div>
<div class="container-fluid" style="background-color: #e9ebee;">
    <div class="container" style="top: 0px; position: relative;">
        <div class="row">
            <div class="mt-2 ml-3 mb-2">
                <h2>Find Job in Cambodia</h2>
            </div>
        </div>
        <form method="get" action="{{ url('search') }}">
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="keyword" name="keyword"
                        placeholder="Enter Keyword">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <select class="form-control" id="function" name="function">
                        <option value="">function</option>
                        @foreach ($function as $functions)
                            <option value="{!! $functions->id !!}">{!! $functions->name !!}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Search</button>
                </div>
            </div>

        </div>
    </form>
    </div>
</div>

<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="latest-wrap">
                <div class="latest-job-title">
                    <h1>LATEST JOBS</h1>
                </div>
                <div class="query-latest-job-body">
                    <div class="row pb-4">
                        @forelse($job as $item)
                        <div class="latest-job-list hv-fade col-sm-6 col-md-6 mt-4">
                            <a href="{!! url('/job/'.$item->job_id) !!}" class="latest-job-block">
                                <span class="latest-job-title"> {!! $item->title !!} </span>
                                <span class="btn-urgent"> URGENT </span>
                                <span class="latest-job-company"> {!! $item->company->company_name !!} </span>
                                <span class="label label-default">{!! $item->function->name !!}
                                </span>
                            </a>
                        </div>
                        @empty
                        <div class="latest-job-list hv-fade col-sm-12 col-md-12 mt-5 mt-5 text-center">
                            <span>No Data</span>
                        </div>
                        @endforelse
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="form-group">
                                <a href="{!! url('/search/') !!}" type="button" class="btn btn-success form-control"> View More Job Announcements </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="browse-job mtop">
                <div class="content-item-public-title">
                    <h2>Browse Jobs </h2>
                </div>
                <div class="row" style="margin: 15px;">
                    @foreach ($function as $functionS)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="job-function" style="padding: 10px;">
                            <a href="{!! url('page/job/function/'.$functionS->id) !!}">
                                <span> {{ $functionS->name }} </span><span>({{ $functionS->jobCount->count() }})</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="browse-job mtop">
                <div class="content-item-public-title">
                    <h2>FEATURED EMPLOYERS</h2>
                </div>
                <div class="row " style="margin: 15px;">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>

                          <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>
                                 <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>

                                 <div class="swiper-slide" style="width: 67px !important;">
                            <div class="featured-employer" style="">
                                <a href="#">
                                    <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                </a>
                            </div>
                          </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 67px !important;">
                                <div class="featured-employer" style="">
                                    <a href="#">
                                        <img src="{{ asset('frontend/image/logo-pacific.jpg') }}" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>


                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
</div>
<!-- footer -->
<div class="clear"></div>
<div class="container-fluid" style="padding: 0;">
<footer class="footer mtop">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <!--headin5_amrc-->
                <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry</p>
                <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                <p><i class="fa fa fa-envelope"></i> info@example.com </p>


            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://webenlance.com">Image Rectoucing</a></li>
                    <li><a href="http://webenlance.com">Clipping Path</a></li>
                    <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
                    <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
                    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://webenlance.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://webenlance.com">Remove Background</a></li>
                    <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
                    <li><a href="http://webenlance.com">Logo Design</a></li>
                    <li><a href="http://webenlance.com">Vectorization</a></li>
                    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://webenlance.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->

                <ul class="footer_ul2_amrc">
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy text of the printing...<a
                                href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy text of the printing...<a
                                href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy text of the printing...<a
                                href="#">https://www.lipsum.com/</a></p>
                    </li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li><a href="http://webenlance.com">Home</a></li>
            <li><a href="http://webenlance.com">About</a></li>
            <li><a href="http://webenlance.com">Services</a></li>
            <li><a href="http://webenlance.com">Pricing</a></li>
            <li><a href="http://webenlance.com">Blog</a></li>
            <li><a href="http://webenlance.com">Contact</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>


        <!--social_footer_ul ends here-->
    </div>

</footer>
</div>
@endsection
@push('css')
{{-- <link rel="stylesheet" href="{{ asset('frontend/OwlCarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/OwlCarousel/owl.theme.default.min.css') }}"> --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <style>
        .swiper-container {
            width: 100%;
            height: 300px;
        }
          .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            height: calc((100% - 100px) / 2);
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
          }
    </style>
@endpush
@push('jsscript')
{{-- <script src="{{ asset('frontend/owlcarousel/owl.carousel.min.js') }}"></script> --}}
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script>
    {{-- $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    }); --}}
    var swiper = new Swiper('.swiper-container', {
        speed: 400,
        autoplay: true,
        slidesPerView: 10,
        slidesPerColumn: 2,
        // Responsive breakpoints
        breakpoints: {
               // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 1,
                slidesPerColumn: 1,

            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 1,
                slidesPerColumn: 1,

            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 1,

            },
            737: {
                slidesPerView: 9,
                spaceBetween: 30,
            }
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      });
</script>

@endpush

