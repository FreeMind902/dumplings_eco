@extends('layouts.admin.master')

@section('additional-css')
@endsection
@section('additional-js')
  <script>

      // SUNEDITOR.create('editorDe', {
      //     minWidth: 500,
      //     height: '200',
      //     maxWidth: null,
      //     defaultStyle: "font-size:16px; font-family: var(--bs-font-sans-serif);"
      // });
      // SUNEDITOR.create('editorEn', {
      //     minWidth: 500,
      //     height: '200',
      //     maxWidth: null,
      //     defaultStyle: "font-size:16px; font-family: var(--bs-font-sans-serif);",
      // });

  </script>
@endsection

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 h-100">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">
                <h4>Speisekarteneintrag anlegen</h4>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.foodlist.index') }}">
                  <button class="btn btn-outline-info float-end mt-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-corner-up-left">
                      <polyline points="9 14 4 9 9 4"/>
                      <path d="M20 20v-7a4 4 0 0 0-4-4H4"/>
                    </svg>
                    Zurück
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form name="compForm" action="{{ route('admin.foodlist.update') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="@if(isset($foodListEntry)) {{ $foodListEntry->id ?? null }} @endif">
              @csrf
              @if(isset($subCategories) && count($subCategories) > 1)
                <div class="row mb-3 pt-3">
                  <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($foodListEntry)) Speichern @else Anlegen @endif</button>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="form-label" for="foodlist_category" style="font-size: 20px">Unter Kategorie</label>
                  <div class="col-12 col-md-4">
                    <select name="foodlist_sub_categories_id" id="foodlist_category" class="form-select">
                      @foreach($subCategories as $subCategory)
                          <option value="{{$subCategory->id}}" @if (isset($foodListEntry->foodlistSubCategory) && $foodListEntry->foodlistSubCategory->id == $subCategory->id)
                          selected
                              @endif>{{$subCategory->label_de}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              @else
                <div class="row">
                  <p class="text-danger">Bitte zuerst <a href="{{route('admin.foodlist.sub-category.create')}}" class="text-danger"><b>hier</b></a> eine Unter Kategorie erstellen</p>
                </div>
              @endif
              <div class="row pt-3 mb-3">
                {{--                IS_ACTIVE--}}
                {{--                <div class="col-4">--}}
                {{--                  <div class="form-check">--}}
                {{--                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"--}}
                {{--                           @if (isset($foodListEntry) && $foodListEntry->is_active == 1)  checked @endif >--}}
                {{--                    <label class="form-check-label" for="flexCheckDefault">--}}
                {{--                      in Speisekarte anzeigen--}}
                {{--                    </label>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                <div class="col-2">
                  <div class="form-check">
                    <input name="is_halal" class="form-check-input" type="checkbox" value="1"
                           @if (isset($foodListEntry) && $foodListEntry->is_halal == 1)  checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="" width="48">
                    </label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-check">
                    <input name="is_vegan" class="form-check-input" type="checkbox" value="1"
                           @if (isset($foodListEntry) && $foodListEntry->is_vegan == 1)  checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="" width="50">
                    </label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-check">
                    <input name="is_veggie" class="form-check-input" type="checkbox" value="1"
                           @if (isset($foodListEntry) && $foodListEntry->is_veggie == 1)  checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="" width="50">
                    </label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-check">
                    <input name="is_spicy" class="form-check-input" type="checkbox" value="1"
                           @if (isset($foodListEntry) && $foodListEntry->is_spicy == 1)  checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="" height="52">
                    </label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group row">
                    {{--                    <input name="is_active" class="form-check-input" type="checkbox" value="1"--}}
                    {{--                           @if (isset($foodListEntry) && $foodListEntry->spicy_level == 1)  checked @endif >--}}
                    {{--                    <label class="form-check-label" for="spicy_level">Chillis</label>--}}
                    {{--                    <input id="spicy_level" class="form-check-input" type="number" max="3" min="0" size="1">--}}

                    <div class="form-group form-check-inline">
                      <label class="form-check-label" for="inlineCheckbox1">Chillis</label>
                      <input name="spicy_level" class="form-control" type="number" max="3" min="0" size="1" placeholder="0"
                             value=" @if (isset($foodListEntry) && isset($foodListEntry->spicy_level) ) {{$foodListEntry->spicy_level}} @endif">
                    </div>
                  </div>

                </div>
              </div>

              <div class="row mb-3">
                <div class="col-6 mb-3">
                  <h5 class="form-label">Deutsch</h5>
                  <hr class="panel-hr">
                  <div class="col-10">
                    <label for="german_label" class="pb-2">Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="german_label" name="label_de" type="text" class="form-control" value="@if(isset($foodListEntry)){{$foodListEntry->label_de}}@else{{old('label_de')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="german_info" class="pb-2">Speiseinformationen</label>
                  </div>
                  <div class="col-12">
                    <textarea id="editorDe" rows="8" cols="50"
                              name="foodlist_information_de"> @if(isset($foodListEntry)){{$foodListEntry->foodlist_information_de}}@else{{old('foodlist_information_de') ?? 'Bitte Text eingeben'}}@endif </textarea>

                  </div>

                </div>
                <div class="col-6 mb-3">
                  <h5 class="form-label">Englisch</h5>
                  <hr class="panel-hr">
                  <div class="col-10">
                    <label for="english_label" class="pb-2">Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="english_label" name="label_en" type="text" class="form-control" value="@if(isset($foodListEntry)){{$foodListEntry->label_en}}@else{{old('label_en')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="english_info" class="pb-2">Speiseinformationen</label>
                  </div>
                  <div class="col-12">
                    <textarea id="editorEn" rows="8" cols="50"
                              name="foodlist_information_en">@if(isset($foodListEntry)){{$foodListEntry->foodlist_information_en}}@else{{old('foodlist_information_en') ?? 'Bitte Text eingeben'}}@endif</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="form-label" for="container_size" style="font-size: 20px">Wie soll der Eintrag angezeigt werden ? </label>
                  <div class="col-12 col-md-4">
                    <select name="container_size" id="container_size" class="form-select">
                      <option value="col-6" @if (isset($foodListEntry) && $foodListEntry->container_size == 'col-6') selected @endif>halbe Seitenbreite</option>
                      <option value="col-12" @if (isset($foodListEntry) && $foodListEntry->container_size == 'col-12') selected @endif>ganze Seitenbreite</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    @if(isset($subCategories) && count($subCategories) > 1)
                      <div class="row mb-3">
                        <div class="col-12">
                          <button type="submit" class="btn btn-outline-primary">@if(isset($foodListEntry)) Speichern @else Anlegen @endif</button>
                        </div>
                      </div>
                    @else
                      <div class="row">
                        <p class="text-danger">Bitte zuerst <a href="{{route('admin.foodlist.create')}}" class="text-danger"><b>hier</b></a> eine Unter Kategorie erstellen</p>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection