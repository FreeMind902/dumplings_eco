@extends('layouts.frontend.master')

@section('content')
  <div class="container">

    {{--Start Viewport XXL--}}
    <div class="d-none d-lg-block letter-spacing-2">
      @foreach($categories as $category)
        <div class="row justify-content-center ps-5">
          <div class="col-4 ps-5 pb-5 letter-spacing-2">
            <h1 class="text-center font-dreamyland" style="font-size: 72px">
              <b>@if (session('applocale') == 'en'){{$category->label_en}}@else{{$category->label_de}}@endif</b></h1>
            <h5 class="text-white text-center mt-2 pb-2 font-futura"
                style="background:url('/public/images/foodlist/bg_foodlist_header_subline_xxl.png') no-repeat; background-size: 100%; line-height: 24px">@if (session('applocale') == 'en'){{$category->category_information_en}}@else{{$category->category_information_de}}@endif</h5>
            <h5 class="font-weight-600 text-center font-futura">@if (session('applocale') == 'en'){{$category->category_second_information_en}}@else{{$category->category_second_information_de}}@endif</h5>
          </div>
          <div class="col-2">
            @if ($category->label_de == 'NUDELN')
              <img src="{{asset('images/foodlist/logos/noodles.png')}}" alt="">
            @endif
            @if ($category->label_de == 'DUMPLINGS')
              <img src="{{asset('images/foodlist/logos/dumplings.png')}}" alt="">
            @endif
          </div>
        </div>
        <div class="row justify-content-center pb-4 mb-5 font-futura"
             @if ($category->label_de == 'SOßEN') style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top_v1.1.png') no-repeat; background-size: 100%; max-height: 150px"
             @endif
             @if ($category->label_de == 'GETRÄNKE') style="background:url('/public/images/foodlist/drinks_box_xxl_top_v1.0.png') no-repeat; background-size: 100%;"
             @endif
             @if ($category->label_de == 'EXTRAS') style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top_v1.1.png') no-repeat; background-size: 100%;"
            @endif
        >
          @foreach($category->foodlistSubCategories as $subCategory)
            @if ($category->label_de == 'NUDELN')
              @if($subCategory->label_de == "Menü")
                <div class="col-8 mt-3 text-center" style="background:url('/public/images/foodlist/foodlist_box_medium_xxl.png') no-repeat; background-size: 100%; min-height: 250px">
                  <h1 class="ps-3 pt-5" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif @if($subCategory->is_halal)
                      <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="45">
                    @elseif($subCategory->is_vegan)
                      <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
                    @elseif($subCategory->is_veggie)
                      <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">

                    @elseif($subCategory->spicy_level == 1)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @elseif($subCategory->spicy_level == 2)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @elseif($subCategory->spicy_level == 3)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @endif </h1>
                  <h3 class="ps-3 pt-4">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h3>
                </div>
              @else
                <div class="col-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%; min-height: 200px">
                  <h1 class="ps-3 pt-3" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif
                    @if($subCategory->is_halal)
                      <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="45">
                      @if($subCategory->is_vegan)
                        <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
                      @endif
                      @if($subCategory->is_veggie)
                        <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">
                      @endif
                      @if($subCategory->spicy_level == 1)
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      @endif
                      @if($subCategory->spicy_level == 2)
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      @endif
                      @if($subCategory->spicy_level == 3)
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                        <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      @endif
                    @endif
                  </h1>
                  <h4 class="ps-3 pt-2">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
                  <div class="col-12">
                    <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom" style="width: 100%; object-fit: contain;">
                  </div>
                </div>
              @endif
              @foreach($subCategory->foodListEntries as $foodListEntry)
                <div class="{{$foodListEntry->container_size}}">
                  <h2>{{$foodListEntry->label_de}}</h2>
                  <h4 class="pb-5">@if (session('applocale') == 'en'){{$foodListEntry->foodlist_information_en}}@else{{$foodListEntry->foodlist_information_de}}@endif</h4>
                </div>
                @if (isset($foodListEntry->foodlistOptions) && count($foodListEntry->foodlistOptions) > 1)
                  @foreach($foodListEntry->foodlistOptions as $foodlistOption)
                    <div class="row ps-5  @if ($loop->last) pb-5  @endif">
                      <div class="col-12">
                        <h5><i class="font-weight-600">@if (session('applocale') == 'en'){{$foodlistOption->label_en}}@else{{$foodlistOption->label_de}}@endif
                          @if($foodlistOption->is_halal)
                            <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="35">
                          @endif
                          @if($foodlistOption->is_vegan)
                            <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="40">
                          @endif
                          @if($foodlistOption->is_veggie)
                            <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="40">
                          @endif
                          @if($foodlistOption->spicy_level == 1)
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                          @endif
                          @if($foodlistOption->spicy_level == 2)
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                          @endif
                          @if($foodlistOption->spicy_level == 3)
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                            <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                          @endif
                          </i>
                        </h5>
                      </div>
                    </div>
                  @endforeach
                @endif
              @endforeach
            @endif
            @if ($category->label_de == 'DUMPLINGS')
              @if (Str::contains(strtolower($subCategory->label_de), 'small') OR Str::contains(strtolower($subCategory->label_de), 'medium') OR Str::contains(strtolower($subCategory->label_de), 'large'))
                @if ($loop->odd)
                  <div class="col-4 mt-3 pt-5 pe-5 text-center" style="background:url('/public/images/foodlist/foodlist_box_small_a_xxl.png') no-repeat; background-size:80%; min-height: 240px">
                    <h2 class="pe-5" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif</h2>
                    <h4 class="pe-5 pt-4">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
                  </div>
                @else
                  <div class="col-4 mt-4 pt-5 pe-5 text-center" style="background:url('/public/images/foodlist/foodlist_box_small_b_xxl.png') no-repeat; background-size:80%; min-height: 250px">
                    <h2 class="pe-5" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif</h2>
                    <h4 class="pe-5 pt-4">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
                  </div>
                @endif
              @else
                <div class="col-12 mt-3" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%; min-height: 250px">
                  <h1 class="ps-3 pt-4" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif</h1>
                  <h4 class="ps-3 pb-3">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
                  <div class="col-12">
                    <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom" style="width: 100%; object-fit: contain;">
                  </div>
                </div>
              @endif
              @foreach($subCategory->foodListEntries as $foodListEntry)
                <div class="{{$foodListEntry->container_size}}">
                  <h2>@if (session('applocale') == 'en'){{$foodListEntry->label_en}}@else{{$foodListEntry->label_de}}@endif
                    @if($foodListEntry->is_halal)
                      <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="50">
                    @endif
                    @if($foodListEntry->is_vegan)
                      <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
                    @endif
                    @if($foodListEntry->is_veggie)
                      <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">
                    @endif
                    @if($foodListEntry->spicy_level == 1)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @endif
                    @if($foodListEntry->spicy_level == 2)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @endif
                    @if($foodListEntry->spicy_level == 3)
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    @endif
                  </h2>
                  <h4>@if (session('applocale') == 'en'){{$foodListEntry->foodlist_information_en}}@else{{$foodListEntry->foodlist_information_de}}@endif</h4>
                </div>
              @endforeach
            @endif
            @if ($category->label_de == 'GETRÄNKE')
              <div class="col-12 ps-5 pt-4">
                <h1 class="pt-4" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif</h1>
                <h4 class="pt-2 pb-3">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
              </div>
              @foreach($subCategory->foodListEntries as $foodListEntry)
                <div class="row ps-5">
                  <div class="{{$foodListEntry->container_size}} ps-5">
                    <h2 class="ps-3 pt-4" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$foodListEntry->label_en}}@else{{$foodListEntry->label_de}}@endif</h2>
                    <h4 class="ps-3">@if (session('applocale') == 'en'){{$foodListEntry->foodlist_information_en}}@else{{$foodListEntry->foodlist_information_de}}@endif</h4>
                  </div>
                </div>
              @endforeach
            @endif
            @if ($category->label_de == 'SOßEN')
              <div class="col-4 pt-5">
                <h2 class="ps-3" style="text-transform: uppercase;">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif
                  @if($subCategory->is_halal)
                    <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="50">
                  @endif
                  @if($subCategory->is_vegan)
                    <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
                  @endif
                  @if($subCategory->is_veggie)
                    <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">
                  @endif
                  @if($subCategory->spicy_level == 1)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                  @if($subCategory->spicy_level == 2)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                  @if($subCategory->spicy_level == 3)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                </h2>
                <h4 class="ps-3">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
              </div>
            @endif
            @if ($category->label_de == 'EXTRAS')
              <div class=" col-8 pt-5 text-center pe-5">
                <h2 class="pe-3">@if (session('applocale') == 'en'){{$subCategory->label_en}}@else{{$subCategory->label_de}}@endif
                  @if($subCategory->is_halal)
                    <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="50">
                  @endif
                  @if($subCategory->is_vegan)
                    <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
                  @endif
                  @if($subCategory->is_veggie)
                    <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">
                  @endif
                  @if($subCategory->spicy_level == 1)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                  @if($subCategory->spicy_level == 2)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                  @if($subCategory->spicy_level == 3)
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                    <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
                  @endif
                </h2>
                <h4 class="pe-3">@if (session('applocale') == 'en'){{$subCategory->sub_category_information_en}}@else{{$subCategory->sub_category_information_de}}@endif</h4>
              </div>
            @endif
          @endforeach
          @if ($category->label_de == 'GETRÄNKE')
            <div class="col-12" style="margin-top:-400px">
              <img src="{{asset('images/foodlist/drinks_box_xxl_bottom_v1.0.png')}}" alt="header_bottom" width="1312">
            </div>
            <div class="row mt-3">
              <div class="col-12 pb-5">
                <h4 class="float-end pb-3">@if (session('applocale') == 'en'){{$category->footline_en}}@else{{$category->footline_de}}@endif</h4>
              </div>
            </div>
          @endif
        </div>
        @if ($category->label_de == 'SOßEN')
          <div class="col-12">
            <img src="{{asset('images/foodlist/sauces_footer_xxl_v1.1.png')}}" style="margin-left: -12px" alt="header_bottom" width="1320">
          </div>
          <div class="row mt-3">
            <div class="col-12 pt-3 pb-5">
              <h4 class="float-end pb-3 font-futura">@if (session('applocale') == 'en'){{$category->footline_en}}@else{{$category->footline_de}}@endif</h4>
            </div>
          </div>
        @endif

      @if ($category->label_de == 'EXTRAS')
          <div class="col-12">
            <img src="{{asset('images/foodlist/extras_food_infobox_xxl_footer_v1.1.png')}}" style="margin-top: -150px" alt="header_bottom" width="1312">
          </div>
          <div class="row mt-3">
            <div class="col-12 pt-3 pb-5">
              <h4 class="float-end pb-3">@if (session('applocale') == 'en'){{$category->footline_en}}@else{{$category->footline_de}}@endif</h4>
            </div>
          </div>
        @endif


      @endforeach
    </div>
    {{--End Viewport XXL--}}


  </div>

@endsection