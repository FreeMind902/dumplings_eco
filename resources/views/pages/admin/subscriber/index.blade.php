@extends('layouts.admin.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">

                <h3>Abonennten Übersicht</h3>

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

            {{--            <h5 class="card-title">Special title treatment</h5>--}}
            {{--            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
            <div class="row">
              <div class="col-6">
                <a href="{{ route('admin.subscriber.create') }}">
                  <button class="btn btn-outline-success" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"/>
                      <line x1="5" y1="12" x2="19" y2="12"/>
                    </svg>
                    Abonennt hinzufügen
                  </button>
                </a>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.newsletter.send') }}">
                  <button class="btn btn-outline-primary float-end" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-send">
                      <line x1="22" y1="2" x2="11" y2="13"/>
                      <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                    </svg>
                    Newsletter senden
                  </button>
                </a>
              </div>
            </div>
            <div class="table-responsive">
              {{--              TODO Datatables wegen sortieren--}}
              <table class="table">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Erhält Newsletter</th>
                  <th scope="col">Email</th>
                  <th scope="col">Name</th>
                  <th scope="col">Aktion</th>
                </tr>
                </thead>
                <tbody>

                @if (isset($subscribers))
                  @foreach($subscribers as $subscriber)
                    <tr>
                      <td class="col">{{$subscriber->id}}</td>
                      <td>
                        <a href="#">

                          <div class="form-check  @if($subscriber->receives_newsletter == '1' ) text-success @else text-danger @endif ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                              <circle cx="12" cy="7" r="4"/>
                            </svg>
                            {{--                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" @if($subscriber->is_active == '1' ) checked @endif disabled>--}}
                          </div>

                        </a>
                      </td>
                      <td class="col">{{$subscriber->name}}</td>
                      <td class="col">{{$subscriber->email}}</td>
                      <td class="col-3">
                        <a class="text-decoration-none" href="{{route('admin.subscriber.create',['id' => $subscriber->id])}}">
                          <button type="button" class="btn btn-outline-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                            </svg>
                            Bearbeiten
                          </button>
                        </a>
                        <a class="text-decoration-none" href="{{route('admin.subscriber.remove',['id' => $subscriber->id])}}">
                          <button type="button" class="btn btn-outline-danger ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                              <line x1="18" y1="6" x2="6" y2="18"/>
                              <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                            Löschen
                          </button>
                        </a>

                      </td>

                    </tr>
                  @endforeach
                @endif

                </tbody>
              </table>

            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
@endsection