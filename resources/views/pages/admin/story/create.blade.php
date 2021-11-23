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
{{--            @dump($storyLocalizations->is_active)--}}
            <form action="{{ route('admin.story.update') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="story[id]" value="@if(isset($storyLocalizations)){{$storyLocalizations->id}}@endif">
              <div class="row mb-3">
                <div class="col-12">
                  <div class="form-check">
                    <input name="story[is_active]" class="form-check-input" type="checkbox" value="1"
                           @if (isset($storyLocalizations) && $storyLocalizations->is_active == 1) checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">
                      auf Startseite anzeigen
                    </label>
                  </div>
                </div>

              </div>

              <div class="row mb-3">
                @if(isset($storyLocalizations))
                  @foreach($storyLocalizations->localizations as $language => $value)
                    {{--                    @dump($language)--}}
                    {{--                    @dump($value)--}}
                    <div class="col-12 col-md-6 mb-3">
                      <h5 class="form-label">{{$language}}</h5>

                      @foreach($value as $key => $localization)
                        <div class="col-12 mb-3">
                          {{--                          @dump($key)--}}
                          {{--                          @dump($localization)--}}
                          @if($key == 'heading')
                            <p class="form-label">Betreff</p>
                            <input name="story[labels][{{$localization->iso_code}}][{{$key}}][label]" type="text" class="form-control"
                                   aria-describedby="story-heading"
                                   value="{{$localization->label}}">
                          @else
                            <p class="form-label">Inhalt</p>

                            <textarea id="editor" name="story[labels][{{$localization->iso_code}}][{{$key}}][label]" cols="40"
                                      rows="5">{{$localization->label}}</textarea>
                          @endif
                          <input name="story[labels][{{$localization->iso_code}}][{{$key}}][localization_id]" value="{{$localization->localization_id}}"
                                 aria-describedby="story-heading" type="hidden" class="form-control">
                          <input name="story[labels][{{$localization->iso_code}}][{{$key}}][content_type_id]" value="{{$localization->content_type_id}}"
                                 aria-describedby="story-heading" type="hidden" class="form-control">
                          <input name="story[labels][{{$localization->iso_code}}][{{$key}}][language_id]" value="{{$localization->language_id}}"
                                 aria-describedby="story-heading" type="hidden" class="form-control">
                          <input name="story[labels][{{$localization->iso_code}}][{{$key}}][story_localization_id]" value="{{$localization->id}}"
                                 aria-describedby="story-heading" type="hidden" class="form-control">
                        </div>
                      @endforeach
                    </div>

                  @endforeach
                @elseif(isset($languages))
                  @foreach($languages as $language)
                    {{--                    @dump($language)--}}
                    <div class="col-12 col-md-6 mb-3">
                      <h5 class="form-label">{{$language->label}}</h5>
                      @foreach($language->content_types as  $contentType)
                        {{--                                                                      @dump($contentType->label)--}}
                        {{--                                                                      @dump($contentType)--}}
                        <div class="col-12 mb-3">
                          @if($contentType->label == 'heading')
                            <p class="form-label">Betreff</p>
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" type="text" class="form-control"
                                   aria-describedby="story-heading"
                                   value="">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="story-heading"
                                   value="">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="1">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="{{$language->id}}">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][story_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="">
                          @else
                            <p class="form-label">Inhalt</p>
                            <textarea id="editor" name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" cols="40"
                                      rows="5"></textarea>
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="story-heading"
                                   value="">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="2">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="{{$language->id}}">
                            <input name="story[labels][{{$language->iso_code}}][{{$contentType->label}}][story_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="story-heading"
                                   value="">
                          @endif


                        </div>
                      @endforeach
                    </div>
                  @endforeach

                @endif
              </div>


              {{--              <div class="row mb-3">--}}
              {{--                --}}
              {{--                <div class="col-12">--}}
              {{--                  <p class="form-label">Name</p>--}}
              {{--                  <input name="story[heading]" type="text" class="form-control" aria-describedby="story-content"--}}
              {{--                         value="@if(isset($story)){{$story->heading ?? old('story.heading')}} @endif">--}}
              {{--                </div>--}}
              {{--              --}}
              {{--              </div>--}}
              {{--              --}}
              {{--              <div class="row mb-3">--}}
              {{--                --}}
              {{--                <div class="col-12">--}}
              {{--                  <p class="form-label">Inhalt</p>--}}
              {{--                  <textarea name="story[content]" id="editor" rows="5" class="form-control">@if(isset($story)){{$story->content ?? old('story.content')}}@endif</textarea>--}}
              {{--                </div>--}}
              {{--              --}}
              {{--              </div>--}}

              <div class="row mb-3">
                <div class="col-12">
                  <p class="form-label">Story Hintergrundbild hochladen</p>
                  @if (isset($storyLocalizations->image_path) AND isset($storyLocalizations->image_id))
                    <input type="hidden" name="story[has_image]" placeholder="Choose image" value="1">
                    <input type="hidden" name="story[image_id]" placeholder="Choose image" value="{{$storyLocalizations->image_id}}">

                    <img src="{{asset($storyLocalizations->image_path)}}" alt="" width="200" height="200">
                    <a href="{{route('admin.image.remove',['id'=>$storyLocalizations->image_id])}}">
                      <button type="button" class="btn btn-danger">Bild löschen</button>
                    </a>
                  @else

                    <input type="file" name="story[image]" placeholder="Choose image">

                  @endif
                </div>
              </div>

              <div class="row">

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">@if(isset($storyLocalizations)) Speichern @else Anlegen @endif</button>
                </div>

              </div>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection