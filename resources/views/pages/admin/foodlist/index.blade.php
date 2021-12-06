@extends('layouts.admin.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6 mt-2">

                <h3>Übersicht Speisekarte</h3>

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
              <div class="col-12">

                <a href="{{ route('admin.foodlist.create') }}" class="text-decoration-none">
                  <button class="btn btn-outline-success" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"/>
                      <line x1="5" y1="12" x2="19" y2="12"/>
                    </svg>

                    Eintrag anlegen
                  </button>

                </a>
                <a href="{{ route('admin.foodlist.extra.index') }}" class="text-decoration-none">
                  <button class="btn btn-outline-success" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-list">
                      <line x1="8" y1="6" x2="21" y2="6"/>
                      <line x1="8" y1="12" x2="21" y2="12"/>
                      <line x1="8" y1="18" x2="21" y2="18"/>
                      <line x1="3" y1="6" x2="3.01" y2="6"/>
                      <line x1="3" y1="12" x2="3.01" y2="12"/>
                      <line x1="3" y1="18" x2="3.01" y2="18"/>
                    </svg>
                    Option anlegen
                  </button>

                </a>
                <a href="{{ route('admin.foodlist.category.index') }}" class="text-decoration-none">
                  <button class="btn btn-outline-primary" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-menu">
                      <line x1="3" y1="12" x2="21" y2="12"/>
                      <line x1="3" y1="6" x2="21" y2="6"/>
                      <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                    Kategorien
                  </button>

                </a>
                <a href="{{ route('admin.foodlist.sub-category.index') }}" class="text-decoration-none">
                  <button class="btn btn-outline-primary" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-align-left">
                      <line x1="17" y1="10" x2="3" y2="10"/>
                      <line x1="21" y1="6" x2="3" y2="6"/>
                      <line x1="21" y1="14" x2="3" y2="14"/>
                      <line x1="17" y1="18" x2="3" y2="18"/>
                    </svg>
                    Unter Kategorien
                  </button>

                </a>


                {{--                <a href="{{ route('admin.foodlist.sorting.index') }}" class="text-decoration-none">--}}

                {{--                  <button class="btn btn-outline-primary" type="button">--}}
                {{--                    --}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
                {{--                         class="feather feather-list">--}}
                {{--                      <line x1="8" y1="6" x2="21" y2="6"/>--}}
                {{--                      <line x1="8" y1="12" x2="21" y2="12"/>--}}
                {{--                      <line x1="8" y1="18" x2="21" y2="18"/>--}}
                {{--                      <line x1="3" y1="6" x2="3.01" y2="6"/>--}}
                {{--                      <line x1="3" y1="12" x2="3.01" y2="12"/>--}}
                {{--                      <line x1="3" y1="18" x2="3.01" y2="18"/>--}}
                {{--                    </svg>--}}

                {{--                    Speisekartensortierung ändern--}}
                {{--                  </button>--}}
                {{--                --}}
                {{--                </a>--}}
              </div>
            </div>
            {{--                @dd($entries)--}}

            <div class="table-responsive">
              {{--              TODO Datatables wegen sortieren--}}
              <table class="table">
                <thead>
                <tr>
                  {{--                  <th scope="col">Wird angezeigt</th>--}}
                  <th scope="col">Kategorie</th>
                  <th scope="col">Unter Kategorie</th>
                  <th scope="col">Überschrift</th>
                  <th scope="col">Optionen</th>
                  <th scope="col">Aktion</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($foodListEntries))
                  @foreach($foodListEntries as $foodListEntry)
                    <tr>
                      <td class="col">@if(isset($foodListEntry->foodlistSubCategory)){{$foodListEntry->foodlistSubCategory->category->label_de}}@endif</td>
                      <td class="col">@if(isset($foodListEntry->foodlistSubCategory->label_de)){{$foodListEntry->foodlistSubCategory->label_de}}@endif</td>
                      <td class="col">@if(isset($foodListEntry)){{$foodListEntry->label_de}}@endif</td>
                      <td class="col">
                        @if(isset($foodListEntry->foodlistOptions) && count($foodListEntry->foodlistOptions) > 1)

                          @foreach($foodListEntry->foodlistOptions as $foodlistOption)
                            <p class="mb-0">@if(isset($foodlistOption)){{$foodlistOption->label_de}}@endif</p>
                          @endforeach
                          <a href="{{route('admin.foodlist.extra.create')}}" style=" text-decoration-color:green"><p class="text-success">Weitere Option anlegen</p></a>
                        @else

                          <a href="{{route('admin.foodlist.extra.create')}}"  style=" text-decoration-color:green"><p class="text-success">Option anlegen</p></a>
                        @endif
                      </td>
                      <td class="col-3">
                        <a class="text-decoration-none" href="{{route('admin.foodlist.create',['id' => $foodListEntry->id ])}}">
                          <button type="button" class="btn btn-outline-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                            </svg>
                            Bearbeiten
                          </button>
                        </a>
                        <a class="text-decoration-none" href="{{route('admin.foodlist.remove',['id' => $foodListEntry->id ])}}">
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