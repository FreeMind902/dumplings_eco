@extends('layouts.admin.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">

                <h3>Newsletter-Übersicht</h3>

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
            <a href="{{ route('admin.newsletter.create') }}">

              <button class="btn btn-outline-success" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"/>
                  <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>

                Newsletter hinzufügen
              </button>

            </a>
            <div class="table-responsive">
              {{--              TODO Datatables wegen sortieren--}}
              <table class="table">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kategorie</th>
                  <th scope="col">Betreff</th>
                  <th scope="col">Zuletzt versendet</th>
                  <th scope="col">Aktionen</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($newsletters))
                  @foreach($newsletters as $newsletter)
                    <div class="row">
                      <tr>
                        <td class="col">{{$newsletter->id}}</td>
                        <td class="col">{{$newsletter->localizations->heading->category_label}}</td>
                        <td class="col">{{$newsletter->localizations->heading->label}}</td>
                        <td class="col">{{$newsletter->last_send ?? ' Nie'}}</td>
                        <td class="col-3">
                          <a class="text-decoration-none" href="{{route('admin.newsletter.create',['id' => $newsletter->id])}}">
                            <button type="button" class="btn btn-outline-info">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                              </svg>
                              Bearbeiten
                            </button>
                          </a>
                          <a class="text-decoration-none" href="{{route('admin.newsletter.remove',['id' => $newsletter->id])}}">
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
                    </div>

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