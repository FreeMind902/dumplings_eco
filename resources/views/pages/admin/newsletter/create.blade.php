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
                <h4>Newsletter anlegen</h4>
              </div>
              <div class="col-6">

                <a href="{{ route('admin.newsletter.index') }}">

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

            <form action="{{ route('admin.newsletter.update') }}" method="post">
              <input type="hidden" name="newsletter[id]" value="@if(isset($newsletterLocalizations)){{$newsletterLocalizations->id}} @else @endif">

              @csrf
              <div class="row mb-3">
                @if( isset($categories))
                  <div class="col-12 col-md-4">
                    <p class="form-label">Kategorie</p>
                    <select name="newsletter[category_id]" id="newsletter_category_select" class="form-select">
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
                @if(isset($newsletterLocalizations))
                  @foreach($newsletterLocalizations->localizations as $language => $value)
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
                            <input name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][label]" type="text" class="form-control"
                                   aria-describedby="newsletter-heading"
                                   value="{{$localization->label}}">
                          @else
                            <p class="form-label">Inhalt</p>

                            <textarea id="editor" name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][label]" cols="40"
                                      rows="5">{{$localization->label}}</textarea>
                          @endif
                          <input name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][localization_id]" value="{{$localization->localization_id}}"
                                 aria-describedby="newsletter-heading" type="hidden" class="form-control">
                          <input name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][content_type_id]" value="{{$localization->content_type_id}}"
                                 aria-describedby="newsletter-heading" type="hidden" class="form-control">
                          <input name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][language_id]" value="{{$localization->language_id}}"
                                 aria-describedby="newsletter-heading" type="hidden" class="form-control">
                          <input name="newsletter[labels][{{$localization->iso_code}}][{{$key}}][newsletter_localization_id]" value="{{$localization->id}}"
                                 aria-describedby="newsletter-heading" type="hidden" class="form-control">
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
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" type="text" class="form-control"
                                   aria-describedby="newsletter-heading"
                                   value="">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="newsletter-heading"
                                   value="">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="1">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="{{$language->id}}">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][newsletter_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="">
                          @else
                            <p class="form-label">Inhalt</p>
                            <textarea id="editor" name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][label]" cols="40"
                                      rows="5"></textarea>
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][localization_id]" type="hidden"
                                   class="form-control"
                                   aria-describedby="newsletter-heading"
                                   value="">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][content_type_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="2">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][language_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="{{$language->id}}">
                            <input name="newsletter[labels][{{$language->iso_code}}][{{$contentType->label}}][newsletter_localization_id]" type="hidden"
                                   class="form-control" aria-describedby="newsletter-heading"
                                   value="">
                          @endif


                        </div>
                      @endforeach
                    </div>
                  @endforeach

                @endif
              </div>

              <div class="row mb-2 mt-2">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary">@if(isset($newsletter)) Speichern @else Anlegen @endif</button>

                </div>

              </div>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
@endsection