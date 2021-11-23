<!doctype html>
<html lang="de" class="h-100">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $pageTitle ?? 'Seitenname' }}</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  @yield('additional-css')

</head>
<body>

@include('elements.admin.navbar')

<div class="content pt-3">
  <div class="admin-content-inside">

    <div class="container">
      <div class="row">

        <div class="col-12 col-md-12">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
        </div>
        <div class="col-12 col-md-12">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

        </div>

      </div>
    </div>

    @yield('content')

  </div>
</div>
{{--@include('elements.admin.footer')--}}

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
@yield('additional-js')

</body>
</html>
