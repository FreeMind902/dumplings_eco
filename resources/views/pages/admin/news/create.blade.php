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

                <h4>News erstellen</h4>

              </div>
              <div class="col-6">

                <a href="{{ route('admin.news.index') }}">

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

            <form action="{{ route('admin.news.update') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="news[id]" value="@if(isset($newsLocalization)) {{ $newsLocalization->id ?? null }} @endif">

              @csrf
              <div class="row mb-3">
                @if( isset($categories))
                  <div class="col-12 col-md-4">
                    <p class="form-label">Kategorie</p>
                    <select name="news[category_id]" id="news_category_select" class="form-select">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->label}}</option>
                      @endforeach
                    </select>
                  </div>
                @else
                  <div class="col-12 col-md-6">
                    <p class="text-danger">Bitte zuerst <a href="{{route('admin.category.create')}}" class="text-danger"><b>hier</b></a> eine Kategorie erstellen</p>

                  </div>
                @endif
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <p class="form-label">Startdatum</p>
                  <input name="news[start]" type="date" value="@if(isset($newsLocalization)){{ $newsLocalization->start ??  old('news.start') }}@endif">
                </div>
                <div class="col-6">
                  <p class="form-label">Enddatum</p>
                  <input name="news[end]" type="date" value="@if(isset($newsLocalization)){{$newsLocalization->end ?? old('news.end')}}@endif">
                </div>
              </div>

              <div class="row mb-3">
                @if(isset($newsLocalization))
                  @foreach($newsLocalization->localizations as $language => $value)
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
                            <input name="news[labels][{{$localization->iso_code}}][{{$key}}][label]" type="text" class="form-control"
                                   aria-describedby="news-heading"
                                   value="{{$localization->label}}">
                          @else
                            <p class="form-label">Inhalt</p>

                            <textarea id="editor" name="news[labels][{{$localization->iso_code}}][{{$key}}][label]" cols="40"
                                      rows="5">{{$localization->label}}</textarea>
                          @endif
                          <input name="news[labels][{{$localization->iso_code}}][{{$key}}][localization_id]" value="{{$localization->localization_id}}"
                                 aria-describedby="news-heading" type="hidden" class="form-control">
                          <input name="news[labels][{{$localization->iso_code}}][{{$key}}][content_type_id]" value="{{$localization->content_type_id}}"
                                 aria-describedby="news-heading" type="hidden" class="form-control">
                          <input name="news[labels][{{$localization->iso_code}}][{{$key}}][language_id]" value="{{$localization->language_id}}"
                                 aria-describedby="news-heading" type="hidden" class="form-control">
                          <input name="news[labels][{{$localization->iso_code}}][{{$key}}][news_localization_id]" value="{{$localization->id}}"
                                 aria-describedby="news-heading" type="hidden" class="form-control">
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
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" type="text" class="form-control"
                                   aria-describedby="news-heading"
                                   value="">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="news-heading"
                                   value="">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="1">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="{{$language->id}}">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][news_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="">
                          @else
                            <p class="form-label">Inhalt</p>
                            <textarea id="editor" name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" cols="40"
                                      rows="5"></textarea>
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="news-heading"
                                   value="">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="2">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="{{$language->id}}">
                            <input name="news[labels][{{$language->iso_code}}][{{$contentType->label}}][news_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="news-heading"
                                   value="">
                          @endif


                        </div>
                      @endforeach
                    </div>
                  @endforeach

                @endif
              </div>

              {{--              <div class="row mb-3">--}}

              {{--                <div class="col-12">--}}
              {{--                  <p class="form-label">Inhalt</p>--}}
              {{--                  <textarea name="news[content]" id="editor" rows="5" class="form-control">@if(isset($news)){{$news->content ?? old('news.content')}}@endif</textarea>--}}
              {{--                </div>--}}
              {{--              </div>--}}
              <div class="row mb-3">
                <div class="col-12">
                  <p class="form-label">Newsbild hochladen</p>
                  @if (isset($newsLocalization->image_path) AND isset($newsLocalization->image_id))
                    <input type="hidden" name="news[has_image]" placeholder="Choose image" value="1">
                    <input type="hidden" name="news[image_id]" placeholder="Choose image" value="{{$newsLocalization->image_id}}">

                    <img src="{{asset($newsLocalization->image_path)}}" alt="" width="200" height="200">
                    <a href="{{route('admin.image.remove',['id'=>$newsLocalization->image_id])}}">
                      <button type="button" class="btn btn-danger">Bild löschen</button>
                    </a>
                  @else

                    <input type="file" name="news[image]" placeholder="Choose image">

                  @endif
                </div>
              </div>

              <div class="row">

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">@if(isset($news)) Speichern @else Anlegen @endif</button>

                </div>

              </div>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection