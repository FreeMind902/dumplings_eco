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

                <h4>Speisekarten Kategorie erstellen</h4>

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

            <form action="{{ route('admin.foodlist.category.update') }}" method="post" enctype="multipart/form-data">
              <div class="row pb-3">
                <div class="col-12">
                  <button type="submit" class="btn btn-outline-primary">@if(isset($category)) Speichern @else Anlegen @endif</button>
                </div>
              </div>
              @csrf
              <input type="hidden" name="id" value="@if(!empty($category)){{$category->id}}@endif">
              <div class="row mb-3">
                <div class="col-12 col-md-4">
                  <label class="form-label" for="context_type">Bereich</label>
                  <select name="context_type_de" id="context_type" class="form-select">
                    <option value="Speisekarte" @if(isset($category) && $category->context_label_de == 'Speisekarte')selected @endif>Speisekarte</option>
                    <option value="Newsletter" @if(isset($category) && $category->context_label_de == 'Newsletter')selected @endif>Newsletter</option>
                    <option value="News" @if(isset($category) && $category->context_label_de == 'News')selected @endif>News</option>
                  </select>
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
                    <input id="german_label" name="label_de" type="text" class="form-control" value="@if(isset($category)){{$category->label_de}}@else{{old('label_de')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="german_info" class="pb-2">Zweite Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="german_info" name="category_information_de" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_information_de}}@else{{old('category_information_de')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="german_info" class="pb-2">Dritte Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="german_info" name="category_second_information_de" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_second_information_de}}@else{{old('category_second_information_de')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="german_footline_info" class="pb-2">Sternchentext</label>
                  </div>
                  <div class="col-10">
                    <input id="german_footline_info" name="footline_de" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_second_information_de}}@else{{old('category_second_information_de')}}@endif">
                  </div>
                </div>

                <div class="col-12 col-md-6 mb-3">
                  <h5 class="form-label">Englisch</h5>
                  <hr class="panel-hr">
                  <div class="col-10">
                    <label for="english_label" class="pb-2">Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="english_label" name="label_en" type="text" class="form-control" value="@if(isset($category)){{$category->label_en}}@else{{old('label_en')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="english_info" class="pb-2">Zweite Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="english_info" name="category_information_en" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_information_en}}@else{{old('category_information_en')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="english_info" class="pb-2">Dritte Überschrift</label>
                  </div>
                  <div class="col-10">
                    <input id="english_info" name="category_second_information_en" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_second_information_en}}@else{{old('category_second_information_en')}}@endif">
                  </div>
                  <div class="col-10 pt-3">
                    <label for="english_footline_info" class="pb-2">Sternchentext</label>
                  </div>
                  <div class="col-10">
                    <input id="english_footline_info" name="footline_en" type="text" class="form-control"
                           value="@if(isset($category)){{$category->category_second_information_en}}@else{{old('category_second_information_en')}}@endif">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-outline-primary">
                    @if(isset($category))
                      Speichern
                    @else
                      Anlegen
                    @endif
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection
