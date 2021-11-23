@extends('layouts.admin.master')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-body">

            <div class="row justify-content-around">

              <div class="col-md-12">

                <div class="card border-light mb-3">
                  <div class="card-header">
                    <h4>Newsletter</h4>
                  </div>
                  <div class="card-body bg-light">
                    <a class="text-decoration-none" href="{{ route('admin.newsletter.index') }}">
                      <button class="btn btn-outline-info" type="button">Anzeigen</button>
                    </a>
                    <a class="text-decoration-none" href="{{ route('admin.newsletter.create') }}">
                      <button class="btn btn-outline-success" type="button">Anlegen</button>
                    </a>
                  </div>
                </div>

              </div>

            </div>

            <div class="row justify-content-around">

              <div class="col-md-12">

                <div class="card border-light mb-3">
                  <div class="card-header">
                    <h4>Abonennten</h4>
                  </div>
                  <div class="card-body bg-light">
                    <a class="text-decoration-none" href="{{ route('admin.subscriber.index') }}">
                      <button class="btn btn-outline-info" type="button">Anzeigen</button>
                    </a>
                    <a class="text-decoration-none" href="{{ route('admin.subscriber.create') }}">
                      <button class="btn btn-outline-success" type="button">Anlegen</button>
                    </a>
                  </div>
                </div>

              </div>

            </div>

            <div class="row justify-content-around">

              <div class="col-md-12">

                <div class="card border-light mb-3">
                  <div class="card-header">
                    <h4>Speisekarte</h4>
                  </div>
                  <div class="card-body bg-light">
                    <a class="text-decoration-none" href="{{ route('admin.foodlist.index') }}">
                      <button class="btn btn-outline-info" type="button">Anzeigen</button>
                    </a>
{{--                    <a class="text-decoration-none" href="{{ route('admin.foodlist.create') }}">--}}
{{--                      <button class="btn btn-outline-success" type="button">Anlegen</button>--}}
{{--                    </a>--}}
{{--                    <a class="text-decoration-none" href="{{ route('admin.foodlist.sorting.index') }}">--}}
{{--                      <button class="btn btn-outline-primary" type="button">Sortierung</button>--}}
{{--                    </a>--}}
                  </div>
                </div>

              </div>

            </div>

            <div class="row justify-content-around">

              <div class="col-md-12">

                <div class="card border-light mb-3">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body bg-light">
                    <a class="text-decoration-none" href="{{ route('admin.news.index') }}">
                      <button class="btn btn-outline-info" type="button">Anzeigen</button>
                    </a>
                    <a class="text-decoration-none" href="{{ route('admin.news.create') }}">
                      <button class="btn btn-outline-success" type="button">Anlegen</button>
                    </a>
                  </div>
                </div>

              </div>

            </div>


            <div class="row justify-content-around">

              <div class="col-md-12">

                <div class="card border-light mb-3">
                  <div class="card-header">
                    <h4>Story</h4>
                  </div>
                  <div class="card-body bg-light">
                    <a href="{{ route('admin.story.index') }}">
                      <button class="btn btn-outline-info" type="button">Anzeigen</button>
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection