@extends('layouts.frontend.master')




@section('content')

  {{--HEADER--}}

  {{--Start Viewport SM--}}
  <div class="d-sm-block d-md-none letter-spacing-2">

    <div class="container mb-5">

      <div class="row justify-content-center pb-4">
        <div class="col-10 col-md-12" style="background:url('/images/foodlist/subheader_headline_noodles_mobil_330x369_top.png') no-repeat; background-size: 100%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit Bus & Bahn MOBIL</b></h4>
              <h5 class="me-3"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
        </div>
        <div class="col-10">
          <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="260">
        </div>
      </div>
      <div class="row justify-content-center pb-4">
        <div class="col-10 col-md-12" style="background:url('/images/foodlist/subheader_headline_noodles_mobil_330x369_top.png') no-repeat; background-size: 100%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit Bus & Bahn MOBIL</b></h4>
              <h5 class="me-3"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
        </div>
        <div class="col-10">
          <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="260">
        </div>
      </div>
    </div>

  </div>
  {{--End Viewport SM--}}

  {{--Start Viewport MD--}}
  <div class="d-none d-md-block d-lg-none letter-spacing-2">
    <div class="container mb-5">

      <div class="row justify-content-center pb-4">
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>MD Mit Bus & Bahn</b></h4>
              <h5 class="me-3"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="320">
          </div>
        </div>
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit PKW</b></h4>
              <h5 class="me-3"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="320">
          </div>
        </div>
      </div>

      {{--    Start GOOGLE MAP--}}

      <div class="container mt-5">

        <div class="row pe-3 pb-5" style="background:url('/images/approach/approach_map_footer_xxl_1320x560.png') no-repeat; background-size: 100%">
          <div class="col-12">
            <div style="max-width:100%;overflow:hidden;color:red;width:1280px;height:280px;" class="pb-3">
              <div id="gmapcanvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Berlin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
      {{--    End GOOGLE MAP--}}
    </div>
  </div>
  {{--End Viewport MD--}}

  {{--Start Viewport LG--}}
  <div class="d-none d-lg-block d-xl-none letter-spacing-3">
    <div class="container mb-5">

      <div class="row justify-content-center pb-4">
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>LG Mit Bus & Bahn</b></h4>
              <h5 class="me-2"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="430">
          </div>
        </div>
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit PKW</b></h4>
              <h5 class="me-2"><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="430">
          </div>
        </div>
      </div>

      {{--    Start GOOGLE MAP--}}

      <div class="container mt-5">

        <div class="row pe-3 pb-5" style="background:url('/images/approach/approach_map_footer_xxl_1320x560.png') no-repeat; background-size: 100%">
          <div class="col-12">
            <div style="max-width:100%;overflow:hidden;color:red;width:1280px;height:380px;" class="pb-3">
              <div id="gmapcanvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Berlin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>


      </div>
      {{--    End GOOGLE MAP--}}
    </div>
  </div>
  {{--End Viewport LG--}}

  {{--Start Viewport XL--}}
  <div class="d-none d-xl-block d-xxl-none letter-spacing-5">
    <div class="container mb-5">
      <div class="row justify-content-center pb-4">
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>XL Mit Bus & Bahn</b></h4>
              <h5><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="520">
          </div>
        </div>
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit  PKW</b></h4>
              <h5><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="520">
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row pe-3 pb-5" style="background:url('/images/approach/approach_map_footer_xxl_1320x500.png') no-repeat; background-size: 100%">
          <div class="col-12">
            <div style="max-width:100%;overflow:hidden;color:red;width:1280px;height:380px;" class="pb-3">
              <div id="gmapcanvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Berlin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{--    End GOOGLE MAP--}}
    </div>
  </div>
  {{--End Viewport XL--}}

  {{--Start Viewport XXL--}}
  <div class="d-none d-xxl-block letter-spacing-5">
    <div class="container mb-5">
      <div class="row justify-content-center pb-4">
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>XXL Mit Bus & Bahn</b></h4>
              <h5><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="580">
          </div>
        </div>
        <div class="col-6 col-md-6" style="background:url('/images/approach/approach_frame_layout_xxl_650x158_top.png') no-repeat; background-size: 95%">
          <div class="row ps-2 pt-2">
            <div class="col-12">
              <h4 class="mb-3"><b>Mit PKW</b></h4>
              <h5><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation </i> </b></h5>
            </div>
          </div>
          <div class="col-10">
            <img src="{{asset('images/approach/approach_frame_layout_xxl_650x158_bottom.png')}}" alt="header_bottom" width="580">
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row pb-5 pe-3" style="background:url('/images/approach/approach_map_footer_xxl_1320x500.png') no-repeat; background-size: 100%">
          <div class="col-12">
            <div style="max-width:100%;overflow:hidden;color:red;width:1280px;height:420px;">
              <div id="gmapcanvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Berlin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--End Viewport XXL--}}





@endsection