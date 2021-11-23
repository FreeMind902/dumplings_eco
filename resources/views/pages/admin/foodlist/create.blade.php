@extends('layouts.admin.master')

@section('additional-css')
@endsection
@section('additional-js')
@endsection

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 h-100">
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
            <form action="{{ route('admin.foodlist.update') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="@if(isset($foodListEntry)) {{ $foodListEntry->id ?? null }} @endif">
              @csrf
              @if(isset($subCategories) && count($subCategories) > 1)
                <div class="row mb-3">
                  <label class="form-label" for="foodlist_category" style="font-size: 20px">Unter Kategorie</label>
                  <div class="col-12 col-md-4">
                    <select name="foodlist_sub_categories_id" id="foodlist_category" class="form-select">
                      @foreach($subCategories as $subCategory)
                        @if (isset($subCategories))
                          <option value="{{$subCategory->id}}" @if (isset($foodListEntry->subCategory) && $foodListEntry->subCategory->id == $subCategory->id)
                          selected
                              @endif>{{$subCategory->label_de}}</option>

                        @endif

                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($foodListEntry)) Speichern @else Anlegen @endif</button>
                  </div>
                </div>
              @else
                <div class="row">
                  <p class="text-danger">Bitte zuerst <a href="{{route('admin.foodlist.sub-category.create')}}" class="text-danger"><b>hier</b></a> eine Unter Kategorie erstellen</p>
                </div>
              @endif
              <div class="row mb-3">
                <div class="col-12">
                  <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                           @if (isset($foodlistLocalizations) && $foodlistLocalizations->is_active == 1)  checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      in Speisekarte anzeigen
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12 col-md-6 mb-3">
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
                  <div class="col-10">
                    <textarea name="foodlist_information_de" id="english_info" cols="30"
                              rows="10">@if(isset($foodListEntry)){{$foodListEntry->foodlist_information_de}}@else{{old('foodlist_information_de')}}@endif</textarea>
                  </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
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
                  <div class="col-10">
                    <textarea name="foodlist_information_en" id="english_info" cols="30"
                              rows="10">@if(isset($foodListEntry)){{$foodListEntry->foodlist_information_en}}@else{{old('foodlist_information_en')}}@endif</textarea>
                  </div>
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
            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection