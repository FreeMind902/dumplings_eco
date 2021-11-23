@extends('layouts.frontend.master')

@section('content')
  <div class="container">

    {{--HEADER--}}

    {{--Start Viewport SM--}}
    <div class="d-sm-block d-md-none letter-spacing-2">
      <div class="row justify-content-center">
        <div class="col-6 pb-5">
          <img src="{{asset('images/foodlist/headline_noodles_468×120.png')}}" alt="" style=" max-width: 100%; max-height: 100%;">
        </div>
      </div>
      {{--    Start FOODLIST ENTRY--}}
      <div class="container mb-5">

        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_mobil_330x369_top.png') no-repeat; background-size: 100%">
            <div class="row ps-2 pt-2">
              <div class="col-10">
                <h4 class="mb-3" style="text-transform: uppercase;"><b>Rührnudeln mobil</b></h4>
                <p><b><i>Nudeln in würziger Soße gerührt. Serviert mit Karotte, Gurke, Frühlingszwiebeln, Koriander und Erdnüssen .* </i> </b></p>
                <p><b><i>(*außer bei Shanghai Noodles)</i></b></p>
              </div>
            </div>
            <div class="col-10">
              <img src="{{asset('images/foodlist/subheader_headline_noodles_mobil_190x369_bottom.png')}}" alt="header_bottom">
            </div>
          </div>
        </div>

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5">
          <div class="col-7">
            <h6 class="mb-3" style="text-transform: uppercase;"><b>KAY‘S NOODLES</b></h6>

          </div>
          <div class="col-5">
            <h6 class="mb-3"><b>9,00 €</b></h6>

          </div>
        </div>
        <div class="row ps-5">
          <div class="col-11">
            <p><b><i>Paprika | Aubergine | Chili | Knoblauch | Ingwer</i></b></p>
          </div>
        </div>
        {{--    End FOODLIST SUBENTRY--}}

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5 mt-4">
          <div class="col-7">
            <h6 class="mb-3" style="text-transform: uppercase;"><b>GUANGDONG NOODLES</b></h6>

          </div>
          <div class="col-5">
            <h6 class="mb-3"><b>9,00 €</b></h6>

          </div>
        </div>
        <div class="row ps-5">
          <div class="col-11">
            <p><b><i>Schweinefleisch | Bohnenpaste | Ingwer | Knoblauch</i></b></p>
          </div>
        </div>
        {{--    End FOODLIST SUBENTRY--}}

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5 mt-4">
          <div class="col-7">
            <h6 class="mb-6" style="text-transform: uppercase;"><b>SHANGHAI NOODLES</b></h6>

          </div>
          <div class="col-5">
            <h6 class="mb-3"><b>7,00 €</b></h6>

          </div>
        </div>
        <div class="row ps-5">
          <div class="col-11">
            <p><b><i>Frühlingszwiebelöl | Sojasoße | frische Frühlingszwiebeln</i></b></p>
          </div>
        </div>

        <div class="container mt-3">
          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-7">
              <h6><i class="font-weight-600">mit Ei</i></h6>
            </div>
            <div class="col-5">
              <h6 class="font-weight-900">+ 1,00</h6>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-7">
              <h6><i class="font-weight-600">mit Tofu</i></h6>
            </div>
            <div class="col-5">
              <h6 class="font-weight-900">+ 2,00</h6>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-7">
              <h6><i class="font-weight-600">mit Hänchenkeule (H)</i></h6>
            </div>
            <div class="col-5">
              <h6 class="font-weight-900">+ 3,00</h6>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5 pb-3" style="background:url('/public/images/foodlist/subheader_noodles_mobil_257x60_footer.png') no-repeat; background-size: 100%;">
            <div class="col-7">
              <h6><i class="font-weight-600">mit Rindfleisch (H)</i></h6>
            </div>
            <div class="col-5">
              <h6 class="font-weight-900">+ 3,00</h6>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

        </div>
        {{--    End FOODLIST SUBENTRY--}}
      </div>
      {{--    End FOODLIST ENTRY--}}
      {{--    Start FOODLIST ENTRY--}}
      <div class="container mb-5">
        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_mobil_330x369_top.png') no-repeat; background-size: 100%">
            <div class="row ps-2 pt-2">
              <div class="col-11">
                <h4 class="mb-3" style="text-transform: uppercase;"><b> NUDELSUPPE (H)</b></h4>
                <p><b><i>Nudeln in einer kräftigen Hühnerbrühe nach Papas Geheimrezept für 24 Stunden mit 24 verschiedenen Gewürzen gekocht.</i> </b></p>
                {{--                <h5><b><i>für 24 Stunden mit 24 verschiedenen Gewürzen gekocht.</i></b></h5>--}}
              </div>
            </div>
            <img src="{{asset('images/foodlist/subheader_headline_noodles_mobil_190x369_bottom.png')}}" alt="header_bottom">
          </div>
        </div>
        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5">
          <div class="col-7">
            <h6 class="mb-3" style="text-transform: uppercase;"><b>DADDY'S NOODLE SOUP</b></h6>
          </div>
          <div class="col-5">
            <h6 class="mb-3"><b>9,00 €</b></h6>
          </div>
        </div>
        <div class="row ps-5">
          <div class="col-11">
            <p><b><i>Sojasprossen | Chinakohl | Frühlingszwiebel | Koriander</i></b></p>
          </div>
          <div class="container mt-5 pb-5">
            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-3">
              <div class="col-7">
                <h6><i class="font-weight-600">mit Ei</i></h6>
              </div>
              <div class="col-5">
                <h6 class="font-weight-900">+ 1,00</h6>
              </div>
            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-3">
              <div class="col-7">
                <h6><i class="font-weight-600">mit Tofu</i></h6>
              </div>
              <div class="col-5">
                <h6 class="font-weight-900">+ 2,00</h6>
              </div>
            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-3">
              <div class="col-7">
                <h6><i class="font-weight-600">mit Hänchenkeule (H)</i></h6>
              </div>
              <div class="col-5">
                <h6 class="font-weight-900">+ 3,00</h6>
              </div>
            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-3" style="background:url('/public/images/foodlist/subheader_noodles_mobil_257x60_footer.png') no-repeat; background-size: 100%;">
              <div class="col-7">
                <h6><i class="font-weight-600">mit Rindfleisch (H)</i></h6>
              </div>
              <div class="col-5">
                <h6 class="font-weight-900">+ 3,00</h6>
              </div>
            </div>
            {{--      End EXTRAS SUBENTRY--}}

          </div>

        </div>
        {{--    End FOODLIST SUBENTRY--}}
      </div>
      {{--    End FOODLIST ENTRY--}}
      {{--    Start FOODLIST ENTRY--}}
      <div class="container  mb-5">
        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_mobil_330x369_top.png') no-repeat; background-size: 100%">
            <div class="row ps-2 mt-3">
              <div class="col-12">
                <h5 class="mb-3" style="text-transform: uppercase;"><b>MENÜ (H)</b></h5>
              </div>
              <div class="col-12">
                <h5 class="mb-3"><b>+ 4,50€</b></h5>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-12 ms-3">
                <h5><b><i>Upgrade Deine Nudeln zum Menü</i> </b></h5>
                <h5><b><i>inkl. 1 alkoholfreies Getränk</i></b></h5>
              </div>
            </div>
            <img src="{{asset('images/foodlist/subheader_headline_noodles_mobil_190x369_bottom.png')}}" alt="header_bottom">

          </div>
        </div>
      </div>
      {{--    End FOODLIST ENTRY--}}

    </div>
    {{--End Viewport SM--}}

    {{--Start Viewport MD--}}
    <div class="d-none d-md-block d-lg-none letter-spacing-2">
      <div class="row justify-content-center">
        <div class="col-6 pb-5">
          <img src="{{asset('images/foodlist/headline_noodles_468×120.png')}}" alt="" style=" max-width: 100%; max-height: 100%;">
        </div>
      </div>
      {{--    Start FOODLIST ENTRY--}}
      <div class="container mb-5">

        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_md_720x210_top.png') no-repeat; background-size: 100%">
            <div class="row pt-2">
              <div class="col-11 ms-3 mt-3">
                <h4 class="mb-3" style="text-transform: uppercase;"><b>md Rührnudeln {720x210}</b></h4>
                <h5><b><i>Nudeln in würziger Soße gerührt. Serviert mit Karotte, Gurke, Frühlingszwiebeln, Koriander und Erdnüssen .* </i> </b></h5>
                <h5><b><i>(*außer bei Shanghai Noodles)</i></b></h5>
              </div>
            </div>
            <div class="col-10">
              <img src="{{asset('images/foodlist/subheader_headline_noodles_md_680x210_bottom.png')}}" alt="header_bottom">
            </div>
          </div>
        </div>

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5">
          <div class="col-9">
            <h4 class="mb-3" style="text-transform: uppercase;"><b>KAY‘S NOODLES</b></h4>

          </div>
          <div class="col-3">
            <h4 class="mb-3"><b>9,00 €</b></h4>

          </div>
        </div>
        <div class="row ps-5">
          <div class="col-8">
            <h5><b><i>Paprika | Aubergine | Chili | Knoblauch | Ingwer</i></b></h5>
          </div>
        </div>
        {{--    End FOODLIST SUBENTRY--}}

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5 mt-4">
          <div class="col-9">
            <h4 class="mb-3" style="text-transform: uppercase;"><b>GUANGDONG NOODLES</b></h4>

          </div>
          <div class="col-3">
            <h4 class="mb-3"><b>9,00 €</b></h4>

          </div>
        </div>
        <div class="row ps-5">
          <div class="col-8">
            <h5><b><i>Schweinefleisch | Bohnenpaste | Ingwer | Knoblauch</i></b></h5>
          </div>
        </div>
        {{--    End FOODLIST SUBENTRY--}}

        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5 mt-4">
          <div class="col-9">
            <h4 class="mb-6" style="text-transform: uppercase;"><b>SHANGHAI NOODLES</b></h4>

          </div>
          <div class="col-3">
            <h4 class="mb-3"><b>7,00 €</b></h4>

          </div>
        </div>
        <div class="row ps-5">
          <div class=" col-8">
            <h5><b><i>Frühlingszwiebelöl | Sojasoße | frische Frühlingszwiebeln</i></b></h5>
          </div>
        </div>

        <div class="container mt-5 pb-5" style="background:url('/public/images/foodlist/subheader_noodles_md_720x180_footer.png') no-repeat; background-size: 100%;">
          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-6">
              <h5><i class="font-weight-600">mit Ei</i></h5>
            </div>

          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-6">
              <h5><i class="font-weight-600">mit Tofu</i></h5>
            </div>

          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-6">
              <h5><i class="font-weight-600">mit Hänchenkeule (H)</i></h5>
            </div>
            <div class="col-3">
              <h5 class="font-weight-900">+ 3,00</h5>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

          {{--      Start EXTRAS SUBENTRY--}}
          <div class="row ps-5">
            <div class="col-6">
              <h5><i class="font-weight-600">mit Rindfleisch (H)</i></h5>
            </div>
            <div class="col-3">
              <h5 class="font-weight-900">+ 3,00</h5>
            </div>
          </div>
          {{--      End EXTRAS SUBENTRY--}}

        </div>
        {{--    End FOODLIST SUBENTRY--}}
      </div>
      {{--    End FOODLIST ENTRY--}}
      {{--    Start FOODLIST ENTRY--}}
      <div class="container  mb-5">
        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_md_720x210_top.png') no-repeat; background-size: 100%">
            <div class="row pt-2">
              <div class="col-11 ms-3 mt-3">
                <h4 class="mb-3" style="text-transform: uppercase;"><b> NUDELSUPPE (H)</b></h4>
                <h5><b><i>Nudeln in einer kräftigen Hühnerbrühe nach Papas Geheimrezept für 24 Stunden mit 24 verschiedenen Gewürzen gekocht.</i> </b></h5>
                {{--                <h5><b><i>für 24 Stunden mit 24 verschiedenen Gewürzen gekocht.</i></b></h5>--}}
              </div>
            </div>
            <img src="{{asset('images/foodlist/subheader_headline_noodles_md_680x210_bottom.png')}}" alt="header_bottom">
          </div>
        </div>
        {{--    Start FOODLIST SUBENTRY--}}
        <div class="row ps-5">
          <div class="col-10">
            <h4 class="mb-3" style="text-transform: uppercase;"><b>DADDY'S NOODLE SOUP</b></h4>
          </div>

        </div>
        <div class="row ps-5">
          <div class="col-10">
            <h5><b><i>Sojasprossen | Chinakohl | Frühlingszwiebel | Koriander</i></b></h5>
          </div>
          <div class="container mt-5 pb-5" style="background:url('/public/images/foodlist/subheader_noodles_lg_940x180_footer.png') no-repeat; background-size: 100%">
            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-5">
              <div class="col-6">
                <h5><i class="font-weight-600">mit Ei</i></h5>
              </div>

            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-5">
              <div class="col-6">
                <h5><i class="font-weight-600">mit Tofu</i></h5>
              </div>

            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-5">
              <div class="col-6">
                <h5><i class="font-weight-600">mit Hänchenkeule (H)</i></h5>
              </div>

            </div>
            {{--      End EXTRAS SUBENTRY--}}

            {{--      Start EXTRAS SUBENTRY--}}
            <div class="row ps-5">
              <div class="col-6">
                <h5><i class="font-weight-600">mit Rindfleisch (H)</i></h5>
              </div>

            </div>
            {{--      End EXTRAS SUBENTRY--}}

          </div>

        </div>
        {{--    End FOODLIST SUBENTRY--}}
      </div>
      {{--    End FOODLIST ENTRY--}}
      {{--    Start FOODLIST ENTRY--}}
      <div class="container  mb-5">
        <div class="row justify-content-center pb-4">
          <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_md_720x210_top.png') no-repeat; background-size: 100%">
            <div class="row pt-2 ms-3 mt-3">
              <div class="col-5">
                <h4 class="mb-3" style="text-transform: uppercase;"><b>MENÜ (H)</b></h4>
              </div>

            </div>
            <div class="row pt-2">
              <div class="col-12 ms-3">
                <h5><b><i>Upgrade Deine Nudeln zum Menü</i> </b></h5>
                <h5><b><i>inkl. 1 alkoholfreies Getränk</i></b></h5>
              </div>
            </div>
            <img src="{{asset('images/foodlist/subheader_headline_noodles_md_680x210_bottom.png')}}" alt="header_bottom">

          </div>
        </div>
      </div>
      {{--    End FOODLIST ENTRY--}}
    </div>
    {{--End Viewport MD--}}

    {{--Start Viewport LG--}}
    <div class="d-none d-lg-block d-xl-none letter-spacing-2">
      {{--    Start FOODLIST ENTRY--}}

      @foreach($categories as $category)
        <div class="row justify-content-center ps-5">

          <div class="col-6 pb-5 ps-5">
            <h1 class="display-3" style="text-transform: uppercase;"><b>LG {{$category->label_de}}</b></h1>
            <h5 class="font-weight-600">{{$category->category_information_de}}</h5>

          </div>
        </div>
        @foreach($category->foodlistSubCategories as $subCategory)
          <div class="container mb-5">
            <div class="row justify-content-center">
              <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_lg_940x210_top.png') no-repeat; background-size: 100%">
                <div class="row pt-2" style="min-height: 126px">
                  <div class="col-12 ms-3 mt-3">
                    <h4 class="mb-3" style="text-transform: uppercase;"><b>{{$subCategory->label_de}}</b></h4>
                    <h5 class="me-2"><b><i>{{$subCategory->sub_category_information_de}}</i> </b></h5>
                  </div>
                </div>
                <div class="col-10">
                  <img src="{{asset('images/foodlist/subheader_headline_noodles_lg_940x210_bottom.png')}}" alt="header_bottom" width="900">
                </div>
              </div>
            </div>
            @foreach($subCategory->foodListEntries as $foodListEntry)
              {{--    Start FOODLIST SUBENTRY--}}
              @if (isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) < 1)
                <div class="container mt-5 pt-3"
                     style="background:url('/public/images/foodlist/subheader_noodles_lg_940x180_footer.png') no-repeat; background-size: 100%; min-height: 180px; max-width: 860px;">
                  @elseif(isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) > 1)
                    <div class="container pt-3" style="max-width: 860px;">
                      @endif
                      @if (isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) < 1)
                        <div class="row ps-5">
                          @elseif(isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) > 1)
                            <div class="row ps-5">
                              @endif
                              <div class="col-10">
                                <h4 style="text-transform: uppercase;"><b>{{$foodListEntry->label_de}}</b></h4>
                              </div>
                            </div>
                            <div class="row ps-5">
                              <div class="col-10 mb-1">
                                <h5><b><i>{{$foodListEntry->foodlist_information_de}}</i></b></h5>
                              </div>
                            </div>
                        </div>
                        {{--    End FOODLIST SUBENTRY--}}
                        @if (isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) > 1)
                          <div class="container pb-5 mt-5 pt-2"
                               style="background:url('/public/images/foodlist/subheader_noodles_lg_940x180_footer.png') no-repeat; background-size: 100%; max-width: 860px;">
                            @foreach($foodListEntry->foodListExtras as $foodListExtra)
                              {{--      Start EXTRAS SUBENTRY--}}
                              <div class="row ps-5">
                                <div class="col-12">
                                  <h5><i class="font-weight-600">{{$foodListExtra->label_de}}</i></h5>
                                </div>
                              </div>
                              {{--                          End EXTRAS SUBENTRY--}}
                              {{--                  End EXTRAS SUBENTRY--}}
                            @endforeach
                          </div>
                        @endif
                        @endforeach
                        {{--    End FOODLIST SUBENTRY--}}
                    </div>
                    @endforeach
                    {{--    End FOODLIST ENTRY--}}
                    @endforeach


                    {{--                <div class="row justify-content-center">--}}
                    {{--                  <div class="col-4 pb-5">--}}
                    {{--                    <h1 class="letter-spacing-5"><b>NUDELN</b></h1>--}}
                    {{--                    <h5>Täglich frisch und hausgemacht</h5>--}}
                    {{--                    --}}{{--          <img src="{{asset('images/foodlist/headline_noodles_800x205.png')}}" alt="" width="416px">--}}
                    {{--                  </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="container mb-5 letter-spacing-2">--}}

                    {{--                  <div class="row justify-content-center pb-4">--}}
                    {{--                    <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_lg_940x210_top.png') no-repeat; background-size: 100%">--}}
                    {{--                      <div class="row pt-2">--}}
                    {{--                        <div class="col-12 ms-3 mt-3">--}}
                    {{--                          <h4 class="mb-3" style="text-transform: uppercase;"><b>LG RÜHRNUDELN {940x210}</b></h4>--}}
                    {{--                          <h5><b><i>Nudeln in würziger Soße gerührt. Serviert mit Karotte, Gurke,</i> </b></h5>--}}
                    {{--                          <h5><b><i>Frühlingszwiebeln, Koriander und Erdnüssen .* (*außer bei Shanghai Noodles) </i></b></h5>--}}
                    {{--                        </div>--}}
                    {{--                      </div>--}}
                    {{--                      <div class="col-10">--}}
                    {{--                        <img src="{{asset('images/foodlist/subheader_headline_noodles_lg_940x210_bottom.png')}}" alt="header_bottom">--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}
                    {{--                  </div>--}}

                    {{--                  --}}{{--    Start FOODLIST SUBENTRY--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h4 class="mb-3" style="text-transform: uppercase;"><b>KAY‘S NOODLES</b></h4>--}}

                    {{--                    </div>--}}

                    {{--                  </div>--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class="col-8">--}}
                    {{--                      <h5><b><i>Paprika | Aubergine | Chili | Knoblauch | Ingwer</i></b></h5>--}}
                    {{--                    </div>--}}
                    {{--                  </div>--}}
                    {{--                  --}}{{--    End FOODLIST SUBENTRY--}}

                    {{--                  --}}{{--    Start FOODLIST SUBENTRY--}}
                    {{--                  <div class="row ps-5 mt-4">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h4 class="mb-3" style="text-transform: uppercase;"><b>GUANGDONG NOODLES</b></h4>--}}

                    {{--                    </div>--}}

                    {{--                  </div>--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h5><b><i>Schweinefleisch | Bohnenpaste | Ingwer | Knoblauch</i></b></h5>--}}
                    {{--                    </div>--}}
                    {{--                  </div>--}}
                    {{--                  --}}{{--    End FOODLIST SUBENTRY--}}

                    {{--                  --}}{{--    Start FOODLIST SUBENTRY--}}
                    {{--                  <div class="row ps-5 mt-4">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h4 class="mb-6" style="text-transform: uppercase;"><b>SHANGHAI NOODLES</b></h4>--}}

                    {{--                    </div>--}}

                    {{--                  </div>--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class=" col-10">--}}
                    {{--                      <h5><b><i>Frühlingszwiebelöl | Sojasoße | frische Frühlingszwiebeln</i></b></h5>--}}
                    {{--                    </div>--}}
                    {{--                  </div>--}}

                    {{--                  <div class="container mt-5 pb-5" style="background:url('/public/images/foodlist/subheader_noodles_lg_940x180_footer.png') no-repeat; background-size: 100%;">--}}
                    {{--                    --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                    <div class="row ps-5">--}}
                    {{--                      <div class="col-6">--}}
                    {{--                        <h5><i class="font-weight-600">mit Ei</i></h5>--}}
                    {{--                      </div>--}}

                    {{--                    </div>--}}
                    {{--                    --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                    --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                    <div class="row ps-5">--}}
                    {{--                      <div class="col-6">--}}
                    {{--                        <h5><i class="font-weight-600">mit Tofu</i></h5>--}}
                    {{--                      </div>--}}

                    {{--                    </div>--}}
                    {{--                    --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                    --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                    <div class="row ps-5">--}}
                    {{--                      <div class="col-6">--}}
                    {{--                        <h5><i class="font-weight-600">mit Hänchenkeule (H)</i></h5>--}}
                    {{--                      </div>--}}
                    {{--                      <div class="col-3">--}}
                    {{--                        <h5 class="font-weight-900">+ 3,00</h5>--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}
                    {{--                    --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                    --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                    <div class="row ps-5">--}}
                    {{--                      <div class="col-6">--}}
                    {{--                        <h5><i class="font-weight-600">mit Rindfleisch (H)</i></h5>--}}
                    {{--                      </div>--}}
                    {{--                      <div class="col-2">--}}
                    {{--                        <h5 class="font-weight-900">+ 3,00</h5>--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}
                    {{--                    --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                  </div>--}}
                    {{--                  --}}{{--    End FOODLIST SUBENTRY--}}
                    {{--                </div>--}}
                    {{--    End FOODLIST ENTRY--}}
                    {{--    Start FOODLIST ENTRY--}}
                    {{--                <div class="container  mb-5">--}}
                    {{--                  <div class="row justify-content-center pb-4">--}}
                    {{--                    <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xl_1140x150_top.png') no-repeat; background-size: 100%">--}}
                    {{--                      <div class="row pt-2">--}}
                    {{--                        <div class="col-12 ms-3 mt-3">--}}
                    {{--                          <h4 class="mb-3" style="text-transform: uppercase;"><b>{XL} NUDELSUPPE (H) {1140x150}</b></h4>--}}
                    {{--                          <h5><b><i>Nudeln in einer kräftigen Hühnerbrühe nach Papas Geheimrezept</i> </b></h5>--}}
                    {{--                          <h5><b><i>für 24 Stunden mit 24 verschiedenen Gewürzen gekocht.</i></b></h5>--}}
                    {{--                        </div>--}}
                    {{--                      </div>--}}
                    {{--                      <img src="{{asset('images/foodlist/subheader_headline_noodles_lg_940x210_bottom.png')}}" alt="header_bottom">--}}

                    {{--                    </div>--}}
                    {{--                  </div>--}}
                    {{--                  --}}{{--    Start FOODLIST SUBENTRY--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h4 class="mb-3" style="text-transform: uppercase;"><b>DADDY'S NOODLE SOUP</b></h4>--}}
                    {{--                    </div>--}}

                    {{--                  </div>--}}
                    {{--                  <div class="row ps-5">--}}
                    {{--                    <div class="col-10">--}}
                    {{--                      <h5><b><i>Sojasprossen | Chinakohl | Frühlingszwiebel | Koriander</i></b></h5>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="container mt-5 pb-5" style="background:url('/public/images/foodlist/subheader_noodles_lg_940x180_footer.png') no-repeat; background-size: 100%">--}}
                    {{--                      --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                      <div class="row ps-5">--}}
                    {{--                        <div class="col-6">--}}
                    {{--                          <h5><i class="font-weight-600">mit Ei</i></h5>--}}
                    {{--                        </div>--}}

                    {{--                      </div>--}}
                    {{--                      --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                      --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                      <div class="row ps-5">--}}
                    {{--                        <div class="col-6">--}}
                    {{--                          <h5><i class="font-weight-600">mit Tofu</i></h5>--}}
                    {{--                        </div>--}}

                    {{--                      </div>--}}
                    {{--                      --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                      --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                      <div class="row ps-5">--}}
                    {{--                        <div class="col-6">--}}
                    {{--                          <h5><i class="font-weight-600">mit Hänchenkeule (H)</i></h5>--}}
                    {{--                        </div>--}}

                    {{--                      </div>--}}
                    {{--                      --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                      --}}{{--      Start EXTRAS SUBENTRY--}}
                    {{--                      <div class="row ps-5">--}}
                    {{--                        <div class="col-6">--}}
                    {{--                          <h5><i class="font-weight-600">mit Rindfleisch (H)</i></h5>--}}
                    {{--                        </div>--}}

                    {{--                      </div>--}}
                    {{--                      --}}{{--      End EXTRAS SUBENTRY--}}

                    {{--                    </div>--}}

                    {{--                  </div>--}}
                    {{--                  --}}{{--    End FOODLIST SUBENTRY--}}
                    {{--                </div>--}}
                    {{--    End FOODLIST ENTRY--}}
                    {{--    Start FOODLIST ENTRY--}}
                    {{--                <div class="container  mb-5">--}}
                    {{--                  <div class="row justify-content-center pb-4">--}}
                    {{--                    <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xl_1140x150_top.png') no-repeat; background-size: 100%">--}}
                    {{--                      <div class="row pt-2 ms-3 mt-3">--}}
                    {{--                        <div class="col-5">--}}
                    {{--                          <h4 class="mb-3" style="text-transform: uppercase;"><b>MENÜ (H)</b></h4>--}}
                    {{--                        </div>--}}

                    {{--                      </div>--}}
                    {{--                      <div class="row pt-2">--}}
                    {{--                        <div class="col-12 ms-3">--}}
                    {{--                          <h5><b><i>Upgrade Deine Nudeln zum Menü</i> </b></h5>--}}
                    {{--                          <h5><b><i>inkl. 1 alkoholfreies Getränk</i></b></h5>--}}
                    {{--                        </div>--}}
                    {{--                      </div>--}}
                    {{--                      <img src="{{asset('images/foodlist/subheader_headline_noodles_lg_940x210_bottom.png')}}" alt="header_bottom">--}}

                    {{--                    </div>--}}
                    {{--                  </div>--}}
                    {{--                </div>--}}
                    {{--    End FOODLIST ENTRY--}}

                </div>
          </div>
    </div>
    {{--End Viewport LG--}}

    {{--Start Viewport XL--}}
    {{--    Rahmen reafactored, in 2 Teile, GETESTET--}}
    <div class="d-none d-xl-block d-xxl-none letter-spacing-3">
      @foreach($categories as $category)
        <div class="row justify-content-center ps-5">

          <div class="col-6 ps-5">
            <h1 class="display-3" style="text-transform: uppercase;"><b>XL {{$category->label_de}}</b></h1>
            <h5 class="font-weight-600">{{$category->category_information_de}}</h5>

          </div>
        </div>
        @foreach($category->foodlistSubCategories as $subCategory)
          <div class="container mb-5">
            <div class="row justify-content-center pb-4">
              <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%">
                <div class="row pt-2" style="min-height: 126px">
                  <div class="col-12 ms-3 mt-3">
                    <h4 class="mb-3" style="text-transform: uppercase;"><b>{{$subCategory->label_de}}</b></h4>
                    <h5><b><i>{{$subCategory->sub_category_information_de}}</i> </b></h5>
                  </div>
                </div>
                <div class="col-10">
                  <img src="{{asset('images/foodlist/subheader_headline_noodles_xl_1140x150_bottom.png')}}" alt="header_bottom" width="1100">
                </div>
              </div>
            </div>
            @foreach($subCategory->foodListEntries as $foodListEntry)
              {{--    Start FOODLIST SUBENTRY--}}
              <div class="container mt-5 pt-3" @if (count($foodListEntry->foodListExtras) < 1)
              style="background:url('/public/images/foodlist/subheader_noodles_xxl_1320x150_footer.png') no-repeat; background-size: 100%; min-height: 180px;"
                  @endif>
                <div class="row ps-5">
                  <div class="col-10">
                    <h4 class="" style="text-transform: uppercase;"><b>{{$foodListEntry->label_de}}</b></h4>
                  </div>
                </div>
                <div class="row ps-5">
                  <div class="col-8 mb-3">
                    <h5><b><i>{{$foodListEntry->foodlist_information_de}}</i></b></h5>
                  </div>
                </div>
              </div>
              {{--    End FOODLIST SUBENTRY--}}
              @if (isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) > 1)
                <div class="container pb-5" style="background:url('/public/images/foodlist/subheader_noodles_xxl_1320x150_footer.png') no-repeat; background-size: 100%">
                  @foreach($foodListEntry->foodListExtras as $foodListExtra)
                    {{--      Start EXTRAS SUBENTRY--}}
                    <div class="row ps-5">
                      <div class="col-12">
                        <h5><i class="font-weight-600">{{$foodListExtra->label_de}}</i></h5>
                      </div>
                    </div>
                    {{--                          End EXTRAS SUBENTRY--}}
                    {{--                  End EXTRAS SUBENTRY--}}
                  @endforeach
                </div>
              @endif
            @endforeach
            {{--    End FOODLIST SUBENTRY--}}
          </div>
        @endforeach
        {{--    End FOODLIST ENTRY--}}
      @endforeach
    </div>
    {{--End Viewport XL--}}
    {{--Start Viewport XXL--}}
    <div class="d-none d-xxl-block letter-spacing-3">
      @foreach($categories as $category)
        <div class="row justify-content-center">

          <div class="col-4 pb-5">
            <h1 class="display-3" style="text-transform: uppercase;"><b>XXL {{$category->label_de}}</b></h1>
            <h5 class="font-weight-600">{{$category->category_information_de}}</h5>

          </div>
        </div>
        @foreach($category->foodlistSubCategories as $subCategory)
          <div class="container mb-5">
            <div class="row justify-content-center pb-4">
              <div class="col-8 col-md-12" style="background:url('/public/images/foodlist/subheader_headline_noodles_xxl_1320x150_top.png') no-repeat; background-size: 100%">
                <div class="row pt-2" style="min-height: 126px">
                  <div class="col-12 ms-3 mt-3">
                    <h4 class="mb-3" style="text-transform: uppercase;"><b>{{$subCategory->label_de}}</b></h4>
                    <h5><b><i>{{$subCategory->sub_category_information_de}}</i> </b></h5>
                  </div>
                </div>
                <div class="col-10">
                  <img src="{{asset('images/foodlist/subheader_headline_noodles_xxl_1320x150_bottom.png')}}" alt="header_bottom">
                </div>
              </div>
            </div>
            @foreach($subCategory->foodListEntries as $foodListEntry)
              {{--    Start FOODLIST SUBENTRY--}}
              <div class="container mt-5 pt-3" @if (count($foodListEntry->foodListExtras) < 1)
              style="background:url('/public/images/foodlist/subheader_noodles_xxl_1320x150_footer.png') no-repeat; background-size: 100%; min-height: 180px;"
                  @endif>
                <div class="row ps-5">
                  <div class="col-10">
                    <h4 class="" style="text-transform: uppercase;"><b>{{$foodListEntry->label_de}}</b></h4>
                  </div>
                </div>
                <div class="row ps-5">
                  <div class="col-8 mb-3">
                    <h5><b><i>{{$foodListEntry->foodlist_information_de}}</i></b></h5>
                  </div>
                </div>
              </div>
              {{--    End FOODLIST SUBENTRY--}}
              @if (isset($foodListEntry->foodListExtras) && count($foodListEntry->foodListExtras) > 1)
                <div class="container pb-5" style="background:url('/public/images/foodlist/subheader_noodles_xxl_1320x150_footer.png') no-repeat; background-size: 100%">
                  @foreach($foodListEntry->foodListExtras as $foodListExtra)
                    {{--      Start EXTRAS SUBENTRY--}}
                    <div class="row ps-5">
                      <div class="col-12">
                        <h5><i class="font-weight-600">{{$foodListExtra->label_de}}</i></h5>
                      </div>
                    </div>
                    {{--                          End EXTRAS SUBENTRY--}}
                    {{--                  End EXTRAS SUBENTRY--}}
                  @endforeach
                </div>
              @endif
            @endforeach
            {{--    End FOODLIST SUBENTRY--}}
          </div>
        @endforeach
        {{--    End FOODLIST ENTRY--}}
      @endforeach
    </div>
    {{--End Viewport XXL--}}

    {{--HEADER--}}


  </div>

@endsection