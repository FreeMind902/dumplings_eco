<!doctype html>
<html lang="de" class="h-100">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $pageTitle ?? 'Wanna Eat' }}</title>
  <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
</head>
<body>

<div class="content">
  @include('elements.frontend.navbar')
  <div class="content-inside">
    
    <div class="row">
      
      <div class="col-12 col-md-8 offset-md-2">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
      </div>
      <div class="col-12 col-md-8 offset-md-2">
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
    @yield('content')
  
  </div>
</div>
@include('elements.frontend.footer')

<script type="text/javascript" src="{{asset('/bootstrap/js/bootstrap.bundle.js')}}"></script>
@yield('additional-js')

</body>
</html>