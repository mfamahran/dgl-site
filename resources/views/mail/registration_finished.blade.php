{{--@extends('layouts.email')--}}
{{--@section('content')--}}
<body style="font-family: Helvetica, Sans-Serif">

<div class="row" style="width: 100%;
    display: flex;
    justify-content: center;">
  <div class="col" style="
    width: 500px">
    <img class="logo"
         style="display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;"
         src="{{URL::asset('storage/DGLcolorLogo.png')}}"  alt="DaGameLeague Logo">
    {{--<img src="{{URL::asset('storage/banner-email.png')}}" width="100%">--}}
    {{--<h2 class="text-center">ĐAGAMELEAGUE</h2>--}}
  </div>
  {{--<hr>--}}
</div>
  <div class="row" style="width: 100%;
      display: flex;
      justify-content: center;
      min-height: 600px">
    <div class="col" style="width: 500px;">
      <div style="margin: 10px">
        <h2>Hey {{$gamer->alias}},</h2>
        <p>You successfully registered for tournament</p>
        <p style="font-weight: bold">{{$tournament->name}}</p>
        <p>For team :</p>
        <p style="font-weight: bold">{{$team->name}}</p>
        <img src="{{config('app.url','http://localhost:8000')}}{{$team->logo_size1}}"
             style="display: block; margin : 10px auto;" width="100" height="100">

        <p>Now its time to make sure you and all your teammates join our Discord channel.
          All moderation and match refereeing is done through discord. This is mandatory for
          all players.</p>

        <p style="font-weight: bold">Our Discord Server</p>
        <a href="https://discord.gg/jsq68nE">https://discord.gg/jsq68nE</a>

        <p style="font-weight: bold;">Happy Gaming</p>

        <br>
        <span style="font-size: 9px;">Please do not reply to this email. Any questions/comments should be sent to
          <a href="mailto:admin@dglcore.com"style="font-weight: bold;">admin@dglcore.com</span>
        </span>
        <hr>
      </div>
    </div>
  </div>
</body>
{{--@endsection--}}