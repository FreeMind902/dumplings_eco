@extends('layouts.admin.master')

@section('additional-js')
  <script>
      $(function () {
          $("[id^=sortable]").sortable();
          $("[id^=sortable]").disableSelection();
      });
  </script>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card ">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">

                <h3>Speisekartensortierung ändern</h3>

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
            <form action="{{route('admin.foodlist.sorting.update')}}" method="POST">
              @csrf
              <div class="row mb-2">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
              </div>
              @foreach($categories as $category)
                <div class="card mb-3">
                  <div class="card-header">
                    <span>
                      {{$category->label}}
                    </span>
                  </div>
                  <ul id="sortable_categories[{{$category->id}}]" class="list-group list-group-flush">
                    @foreach($category->foodlistEntries as $foodlistEntry)
{{--              @dd($categories)--}}
                      <li class="list-group-item">
                        <input type="hidden" name="sorting[{{$category->id}}][]" value="@if(isset($foodlistEntry->id)){{$foodlistEntry->id}}@endif">
                        <div class="row">
                          <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><strong># {{$foodlistEntry->id}}</strong></div>
                          <input type="hidden" name="sorting[{{$category->id}}][]" value="{{$foodlistEntry->id}}">
                          <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                            <p><strong>{{$foodlistEntry->heading->label}}</strong></p>
                            <hr class="panel-hr">
                            <p>{{$foodlistEntry->content->label}}</p>
                          </div>
                          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <img class="rounded-1 float-end" src="{{asset($foodlistEntry->image_path)}}" alt="first pic" width="300" height="160">
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              @endforeach
              <div class="row mb-2">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection