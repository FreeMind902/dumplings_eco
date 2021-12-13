@extends('layouts.frontend.master')




@section('content')

  {{--HEADER--}}

  {{--Start Viewport SM--}}

  {{--End Viewport SM--}}

  {{--Start Viewport XXL--}}
  <div class="letter-spacing-5">
    <div class="container mb-5">
      <div class="row justify-content-center pb-4">
        <div class="col-12 col-sm-6 pb-5" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3">
                <b>
                  XXL Mit Bus & Bahn
                </b>
              </h4>
              <h5 class="me-2">
                <b>
                  <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation
                  </i>
                </b>
              </h5>
            </div>
          </div>
          <div class="col-11">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" style="width: 100%">
          </div>
        </div>
        <div class="col-12 col-sm-6 pb-4" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3">
                <b>
                  Mit PKW
                </b>
              </h4>
              <h5 class="me-2">
                <b>
                  <i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation
                  </i>
                </b>
              </h5>
            </div>
          </div>
          <div class="col-11">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" style="width: 100%">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row pb-5 pe-3 ps-3" style="background:url('/images/foodlist/subheader_headline_noodles_xxl_1320x150_top_v1.1.png') no-repeat; background-size: 100%">
          <div class="col-12  pt-3">
            <div style="max-width:100%;overflow:hidden;color:red;width:1280px;height:420px;">
              <div id="gmapcanvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Berlin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
          <div class="col-12 pt-2">
            <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom" style="width: 100%">
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--End Viewport XXL--}}





@endsection