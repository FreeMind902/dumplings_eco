@extends('layouts.admin.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">
                
                <h3>Story Übersicht</h3>
              
              </div>
              <div class="col-6">
                
                <a href="{{ route('admin.index') }}">
                  
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
            
            {{--            <h5 class="card-title">Eventuell Beschreibung</h5>--}}
            {{--            <p class="card-text">hinzufügen.</p>--}}
            
            <div class="row mb-3">
              <div class="col-12 mb-3">
                
                <a href="{{ route('admin.story.create') }}" class="text-decoration-none">
                  <button class="btn btn-outline-success" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"/>
                      <line x1="5" y1="12" x2="19" y2="12"/>
                    </svg>
                    
                    Eintrag anlegen
                  </button>
                
                </a>
                
              </div>
            </div>
            
            <div class="row mb-3">
              <hr class="ms-3 panel-hr">
            </div>
            
            <div class="container">
              
              <div class="row">
                @if (isset($stories))
                  @foreach($stories as $story)
                    <div class="col-6 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-6">
                              <h5 class="card-title">{{$story->headline_de}}</h5>
                            </div>
                            
                            <div class="col-6 text-end">
{{--                              @if($story->is_active == '1' )--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-success">--}}
{{--                                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>--}}
{{--                                  <circle cx="12" cy="12" r="3"/>--}}
{{--                                </svg>--}}
{{--                              @else--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off text-danger">--}}
{{--                                  <path--}}
{{--                                    d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>--}}
{{--                                  <line x1="1" y1="1" x2="23" y2="23"/>--}}
{{--                                </svg>--}}
{{--                              @endif--}}
                            </div>
                          
                          </div>
                          <p class="card-text">{{$story->body_de}}</p>
                          <a href="{{ route('admin.story.create',['id' => $story->id]) }}">
                            
                            <button class="btn btn-outline-success" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round" class="feather feather-edit-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                              </svg>
                              
                              Bearbeiten
                            </button>
                          
                          </a>
                          
                          <a class="text-decoration-none float-end" href="{{route('admin.story.remove',['id' => $story->id ])}}">
    
                            <button type="button" class="btn btn-outline-danger ms-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                              </svg>
                              Löschen
                            </button>
  
                          </a>
                          
                        </div>
                      </div>
                    
                    </div>
                  
                  @endforeach
                @endif
              </div>
            
            </div>
          </div>
        
        </div>
      </div>
    
    </div>
@endsection