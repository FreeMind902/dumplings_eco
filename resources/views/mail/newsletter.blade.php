<!doctype html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Newsletter Wanna Eat</title>
</head>
<body>
<img src="{{asset('images/logo/Logoweb_quer.png')}}" alt="">
<h1 class="font-dreamyland letter-spacing-2 fontsize-3" style="">NEWSLETTER</h1>
<h4 class="font-futura letter-spacing-2">{{$newsletter->headline_de?? 'TEST HEADLINE'}}</h4>
<p class="font-futura">{{$newsletter->body_de ?? 'TEST BODY'}}</p>
<br>
<br>
<p>Bleibt gesund !</p>
<br>
<br>
<p>Herzliche Grüße euer Wanna Eat Team</p>
<br>
<br>
<p>Website: https://wanna-eat.de</p>
<p>E-Mail: info@wanna-eat.de</p>
<br>
<br>
<p>HINWEIS: Dieser Newsletter kann per Email deaktiviert werden. Dazu einfach den Text "Ich möchte keinen Newsletter mehr erhalten!" an info@wanna-eat.de.</p>
</body>
</html>