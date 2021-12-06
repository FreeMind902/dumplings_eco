@extends('layouts.frontend.master')

@section('content')

  {{--HEADER--}}



  {{--Start Viewport XXL--}}
  <div class="d-none d-md-block">
    @if (isset($news))
      @foreach($news as $newsItem)
        <div class="container mb-5 letter-spacing-5">
          <div class="row pb-4">
            <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%">
              <div class="row pt-2">
                <div class="col-8 ms-2 pt-3 pb-4">
                  <h1 class="display-3 mb-5 ms-3" style="font-family: 'DreamyLand', sans-serif;"><b>@if (session('applocale') == 'en'){{$newsItem->headline_en}}@else{{$newsItem->headline_de}}@endif</b></h1>
                  <h5 class="ms-3 " style="font-family: 'Futura', sans-serif;"><b><i>@if (session('applocale') == 'en'){{$newsItem->body_en}}@else{{$newsItem->body_de}}@endif</i> </b></h5>
                </div>
                <div class="col-3 pt-3 pb-4 me-1 d-none d-lg-block">
                  <img src="{{$newsItem->image_path}}" alt="header_bottom" style="max-width: 400px;">
                </div>

              </div>
              <div class="col-12">
                <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom" style="width: 100%; object-fit: contain;">
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
    @if (isset($news))

      <div class="container mt-1 mb-5">
        <div class="row pe-2">
          <div class="col-12 ps-3 pt-3" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%">
            <div id="carouselExampleCaptions" class="ps-3 pe-3 carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                @foreach($stories as $story)
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" @if($loop->first) class="active" @endif aria-current="true"
                          aria-label="Slide 1"></button>

                @endforeach
              </div>
              <div class="carousel-inner">
                @foreach($stories as $story)
                  <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{$story->image_path}}" class="d-block w-100" alt="story_image" width="800" height="600">
                    <div class="carousel-caption">
                      <h1 class="display-3 letter-spacing-5 text-stroke-white mb-4" style="font-family: 'DreamyLand', sans-serif; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">@if (session('applocale') == 'en'){{$story->headline_en}}@else{{$story->headline_de}}@endif</h1>
                      <h5 class="letter-spacing-3 text-stroke-white" style="font-family: 'Futura', sans-serif; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">@if (session('applocale') == 'en'){{$story->body_en}}@else{{$story->body_de}}@endif{{$story->body_de}}</h5>
                    </div>
                  </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom" width="1230" style="width: 100%; object-fit: contain;">
          </div>
        </div>
      </div>

    @endif


  </div>
  {{--End Viewport XXL--}}

@endsection