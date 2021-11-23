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
                <h4>Newsletter senden</h4>
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
            <form action="{{ route('admin.newsletter.send') }}" method="post">
              @csrf
              <input type="hidden" name="newsletter[id]" value="@if (!empty($newsletter)) {{ $newsletter->id }} @endif">
{{--                            @dump($newsletters)--}}
{{--                            @dump($subcribers)--}}
              <div class="row mb-3">
                <div class="col-12">
                  <button type="submit" class="btn btn-success">Senden</button>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-12 col-md-4">
                  <select name="send_newsletter[category_id]" id="newsletter_select" class="form-select">
                    @if( isset($newsletters) )
                      @foreach($newsletters as $newsletter)
{{--                        @dump($newsletter)--}}
{{--                        @dump($newsletter->localizations->heading->label)--}}
                        <option value="{{$newsletter->id}}">{{$newsletter->localizations->heading->label}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-12">
                  <hr class="panel-hr">
                
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-12 col-md-12">
                  
                  @if(isset($subcribers))
                    @foreach($subcribers as $subscriber)
                      <div class="row">
                        <input name="subscriber[id]" class="form-check-input" type="hidden" value="{{$subscriber->id}}">
                        <div class="col-1">
                          <div class="form-check">
                            <input name="subscriber[is_active]" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                                   @if($subscriber->is_active == 1) checked @endif >
                          </div>
                        </div>
                        <div class="col-2">
                          <p>{{$subscriber->name}}</p>
                        </div>
                        {{--                          <div class="col-1">--}}
                        {{--                            <p>|</p>--}}
                        {{--                          </div>--}}
                        <div class="col-3">
                          <p>{{$subscriber->email}}</p>
                        </div>
                      </div>
                    @endforeach
                  @endif
                
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-2">
                  <button type="submit" class="btn btn-success">Senden</button>
                </div>
              </div>
            
            </form>
          
          </div>
        </div>
      
      </div>
    
    </div>
  </div>
@endsection