<!doctype html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Newsletter Wanna Ear</title>
</head>
<body>
{{--TODO Email Design--}}
{{--@dd($newsletter)--}}
<h1>{{$newsletter->headline_de?? 'TEST HEADLINE'}}</h1>
<p>{{$newsletter->body_de ?? 'TEST BODY'}}</p>
</body>
</html>