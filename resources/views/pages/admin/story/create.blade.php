@extends('layouts.admin.master')

@section('additional-css')
@endsection
@section('additional-js')


@endsection

@section('content')


  <div class="container">
    <div class="row justify-content-center">

      <div class="col-12 h-100">
        <div class="card">
          <div class="card-header">

            <div class="row">
              <div class="col-6 mt-2">

                <h4>Story @if(empty($story)) anlegen @else bearbeiten @endif </h4>

              </div>

              {{--              @dd($story)--}}


              <div class="col-6">
                <a href="{{ route('admin.story.index') }}">
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
            {{--            @dump($stories->is_active)--}}
            <form action="{{ route('admin.story.update') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="@if(isset($story)){{$story->id}}@endif">
              <div class="row mb-3">
                <div class="col-12">
                  <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1"
                           @if (isset($stories) && $stories->is_active == 1) checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      auf Startseite anzeigen
                    </label>
                  </div>
                </div>

              </div>

              <div class="row mb-3">
                  <div class="row mb-3">
                    <div class="col-6 mb-3">
                      <h5 class="form-label">Deutsch</h5>
                      <hr class="panel-hr">
                      <div class="col-10">
                        <label for="german_label" class="pb-2">Überschrift</label>
                      </div>
                      <div class="col-10">
                        <input id="german_label" name="headline_de" type="text" class="form-control" value="@if(isset($story)){{$story->headline_de}}@else{{old('headline_de')}}@endif">
                      </div>
                      <div class="col-10 pt-3">
                        <label for="german_info" class="pb-2">Storyinformationen</label>
                      </div>
                      <div class="col-12">
                    <textarea id="editorDe" rows="8" cols="50"
                              name="body_de"> @if(isset($story)){{$story->body_de}}@else{{old('body_de') ?? 'Bitte Text eingeben'}}@endif </textarea>

                      </div>

                    </div>
                    <div class="col-6 mb-3">
                      <h5 class="form-label">Englisch</h5>
                      <hr class="panel-hr">
                      <div class="col-10">
                        <label for="english_label" class="pb-2">Überschrift</label>
                      </div>
                      <div class="col-10">
                        <input id="english_label" name="headline_en" type="text" class="form-control" value="@if(isset($story)){{$story->headline_en}}@else{{old('headline_en')}}@endif">
                      </div>
                      <div class="col-10 pt-3">
                        <label for="english_info" class="pb-2">Storyinformationen</label>
                      </div>
                      <div class="col-12">
                    <textarea id="editorEn" rows="8" cols="50"
                              name="body_en">@if(isset($story)){{$story->body_en}}@else{{old('body_en') ?? 'Bitte Text eingeben'}}@endif</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12">
                      <p class="form-label">Story Hintergrundbild hochladen</p>
                      @if(isset($story->image_path))
                        <input type="hidden" name="has_image" placeholder="Choose image" value="1">

                        <img src="{{asset($story->image_path)}}" alt="" width="200" height="200">
                        <a href="{{route('admin.news.image.remove',['id'=>$story->id])}}">
                          <button type="button" class="btn btn-danger">Bild löschen</button>
                        </a>
                      @else

                        <input type="file" name="image" placeholder="Choose image">

                      @endif
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">@if(isset($stories)) Speichern @else Anlegen @endif</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection