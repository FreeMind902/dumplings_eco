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

                <h4>Unter Kategorie erstellen</h4>

              </div>
              <div class="col-6">

                <a href="{{ route('admin.foodlist.category.index') }}">

                  <button class="btn btn-outline-info float-end mt-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round"
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

            <form action="{{ route('admin.foodlist.sub-category.update') }}" method="post">
              @csrf
              <input type="hidden" name="id" value="@if(!empty($subCategory)){{$subCategory->id}}@endif">
              @if(isset($categories) && count($categories) > 1)
                <div class="row mb-3">
                  <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($foodlistEntry)) Speichern @else Anlegen @endif</button>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="form-label" for="foodlist_category" style="font-size: 20px">Unter Kategorie</label>
                  <div class="col-12 col-md-4">
                    <select name="foodlist_categories_id" id="foodlist_category" class="form-select">
                      @foreach($categories as $category)
                        @if (isset($category))
                          <option value="{{$category->id}}" @if (isset($foodlistEntry->subCategory) && $foodlistEntry->subCategory->id == $category->id)
                          selected
                              @endif>{{$category->label_de}}</option>

                        @endif

                      @endforeach
                    </select>
                  </div>
                </div>

              @else
                <div class="row">
                  <p class="text-danger">Bitte zuerst <a href="{{route('admin.foodlist.category.create')}}" class="text-danger"><b>hier</b></a> eine Kategorie erstellen</p>
                </div>
              @endif
              <div class="row mb-3">
                <div class="col-12 col-md-6 mb-3">
                  <h5 class="form-label">Deutsch</h5>
                  <hr class="panel-hr">
                  <div class="col-10">
                    <label for="german_label" class="pb-2">Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="german_label" name="label_de" type="text" class="form-control" value="@if(isset($subCategory)){{$subCategory->label_de}}@else{{old('label_de')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="german_info" class="pb-2">Informationstext</label>
                  </div>
                  <div class="col-10">
                      <textarea name="sub_category_information_de" id="english_info" cols="30"
                                rows="10">@if(isset($subCategory)){{$subCategory->sub_category_information_de}}@else{{old('sub_category_information_de')}}@endif</textarea>
                  </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <h5 class="form-label">Englisch</h5>
                  <hr class="panel-hr">
                  <div class="col-10">
                    <label for="english_label" class="pb-2">Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="english_label" name="label_en" type="text" class="form-control" value="@if(isset($subCategory)){{$subCategory->label_en}}@else{{old('label_en')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="english_info" class="pb-2">Informationstext</label>
                  </div>
                  <div class="col-10">
                      <textarea name="sub_category_information_en" id="english_info" cols="30"
                                rows="10">@if(isset($subCategory)){{$subCategory->sub_category_information_en}}@else{{old('sub_category_information_en')}}@endif</textarea>

                  </div>
                </div>
              </div>

              @if(isset($categories) && count($categories) > 1)
                <div class="row mb-3">
                  <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($foodlistEntry)) Speichern @else Anlegen @endif</button>
                  </div>
                </div>
              @else
                <div class="row">
                  <p class="text-danger">Bitte zuerst <a href="{{route('admin.foodlist.category.create')}}" class="text-danger"><b>hier</b></a> eine Kategorie erstellen</p>
                </div>
              @endif
            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection
