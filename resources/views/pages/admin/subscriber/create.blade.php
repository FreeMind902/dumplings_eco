@extends('layouts.admin.master')

@section('additional-css')

@endsection
@section('additional-js')
  <script>
      $(document).ready(function () {
          let template = $('#hidden-template').html();
          let count = 1
          $('#add_subrscriber_field_button').click(function () {

              if (count < 5) {
                  $('#add_subrscriber_field_button').disabled = false
                  $('#subrscriber_form').prepend(template);
                  count++;
              } else if (count >= 5) {
                  $('#add_subrscriber_field_button').addClass('btn-outline-light')
                  $('#add_subrscriber_field_button').removeClass('btn-outline-success')
              }

              console.log("Anzahl Felder" + count);
          });

      });

  </script>
@endsection

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 h-100">
        <div class="card">
          <div class="card-header">
            <div class="row">

              <div class="col-6 mt-2">
                <h4>Abonnent anlegen</h4>
              </div>
              <div class="col-6">

                <a href="{{ route('admin.subscriber.index') }}">

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
            <form action="{{ route('admin.subscriber.update') }}" method="post">
              @csrf
              <input type="hidden" name="id" value="@if(isset($subscriber)) {{ $subscriber->id ?? null }} @endif">

              <div class="row mb-2">
                <div class="col-6">
                  <a href="">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($subscriber)) Speichern @else Anlegen @endif</button>
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <div class="form-check">
                    <input name="receives_newsletter" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                           @if (isset($subscriber) && $subscriber->receives_newsletter == 1) checked @endif >
                    <label class="form-check-label" for="flexCheckDefault">Erhält Newsletter
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12">
                  <p class="form-label">Sprache des Abonennten (In dieser Sprache wird der Newsletter versendet)</p>
                </div>
                <div class="col-4">
                  <select name="language_iso_code" id="newsletter_category_select" class="form-select">
                    <option value="de">Deutsch</option>
                    <option value="en">Englisch</option>
                  </select>
                </div>
              </div>
              <div id="subrscriber_form" class="row mb-3">
                <div class="col-12 col-md-6">
                  <p class="form-label">Name</p>
                  <input name="name" value="{{ $subscriber->name ?? old('subscriber.name') ?? null}}" type="text" class="form-control"
                         aria-describedby="subscriber-name">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12 col-md-8">
                  <p class="form-label">Email-Adresse</p>
                  <input name="email" value="{{ $subscriber->email ?? old('subscriber.email') ?? null}}" type="text" class="form-control"
                         aria-describedby="subscribers-email">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-6">
                  <a href="">
                    <button type="submit" class="btn btn-outline-primary">@if(isset($subscriber)) Speichern @else Anlegen @endif</button>
                  </a>
                </div>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection