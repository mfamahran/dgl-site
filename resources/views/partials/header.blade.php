{{--
  header.blade.php
  Header partial file
 * Copyright 2018 DAGAMELEAGUE
 ____    ___  __
(  _ \  / __)(  )
 )(_) )( (_-. )(__  / _/ _ \ '_/ -_)_/ _/ _ \ '  \
(____/  \___/(____) \__\___/_| \___(_)__\___/_|_|_|

  @author XEQTIONR

--}}
    {{--<nav class="navbar">--}}
      {{--<h1>What what</h1>--}}
    {{--</nav>--}}
    <div class="row dgl-nav-title justify-content-center">
      {{--<div class="col title">--}}
        {{--<span class="">ĐAGAMELEAGUE </span>--}}
      {{--</div>--}}
      <div class="title d-none d-md-flex">
        <h6 class="d-inline-block font-white text-center">DAGAMELEAGUE</h6>
      </div>

      <div class="logo py-3 my-0">
          <img src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="90px">
      </div>
      <div class="title-right  d-none d-md-flex">
          {{--<h1 class="d-inline-block font-white text-center">DGL</h1>--}}
      </div>
    </div>
    <nav class="navbar navbar-dgl navbar-expand-lg">
      <button class="navbar-toggler lightgray-border my-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="justify-content-center d-none d-lg-inline-block ml-5 py-2"  style="min-width: 100px;">
      <a class=" mx-auto pl-md-5 pr-5" href="/">
        <img class="small-logo mb-1 pb-0 py-xl-0 ml-auto mr-0" src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="35" class="d-block" alt="">
        {{--<span class="d-none d-xl-inline-block navbar-text vertical-align-center dagameleague-small">ĐAGAMELEAGUE</span>--}}
      </a>
      </div>
      <a class="small-logo d-lg-none mx-auto  pr-6" href="/">
        <img src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="35" class="d-block d-md-inline-block align-text-bottom" alt="">

      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav py-2 mx-auto" style="width: 70%;">
          <li class="nav-item active">
            <a href="/news" class="nav-link" href="#">news<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/tournaments" class="nav-link" href="#">tournaments</a>
          </li>
          <li class="nav-item">
            <a href="/matches" class="nav-link" href="#">matches</a>
          </li>
          <li class="nav-item">
            <a href="/teams" class="nav-link" href="#">teams</a>
          </li>
          <li class="nav-item">
            <a href="/players" class="nav-link" href="#">players</a>
          </li>
          <li class="nav-item">
            <a href="/media" class="nav-link" href="#">media</a>
          </li>
          <li class="nav-item dropdown">
            <a href="/about" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
            <div class="dropdown-menu back-color-purple mx-md-1" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('about')}}">About DGL</a>
              {{--<div class="dropdown-divider"></div>--}}
              <a class="dropdown-item" href="{{route('about-dateam')}}">About DaTeaM</a>
            </div>
          </li>

        </ul>
        @if(Auth::guest())
          <span class="">
            <a href="{{  route('login')  }}" class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
              sign in
            </a>
          </span>
          <span class="">
            <a href="{{  route('register')  }}" class="nav-link">
              <i class="fas fa-user-plus"></i>
              register
            </a>
          </span>
        @else
          <span class="">
            <a href="{{  route('settings')  }}" class="nav-link">
              <i class="fas fa-cog"></i>
              settings
            </a>
          </span>
          <span class="nav-link">
          <a href="{{ route('logout') }}" class="nav-link"
             onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            sign out
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </span>
        @endif
      </div>
      <script>
        $(document).ready(function(){
            var margin = parseFloat($(".dgl-nav-title").height());
            $(".navbar-dgl").css("margin-top", margin - $(window).scrollTop());
            $(window).scroll(function(){
                    var scroll = $(window).scrollTop();
                    if(scroll>=0)
                      // console.log("scroll: " + scroll);
                    if(scroll>=0 && scroll<200)
                    {
                        $(".navbar-dgl").css("margin-top", margin - scroll);
                        $(".small-logo").slideUp();
                        // console.log('sideup');
                    }
                    else {
                        $(".navbar-dgl").css("margin-top", "0");
                        $(".small-logo").slideDown();
                        // console.log('slidedown');
                    }
            });
        });

      </script>
      {{--<script>--}}
            {{--var scroll = 0;--}}
            {{--$(window).scroll(function(){--}}
                {{--if((0.00001 *$(window).scrollTop())<0.0025)--}}
                {{--{--}}
                    {{--// console.log("scrolled: " + 0.00001 * $(window).scrollTop());--}}
                    {{--$(".navbar").css('background-color', 'rgba(39,44,56,' + 1 / (0.01 * $(window).scrollTop()) + ')');--}}
                {{--}--}}
                {{--// else{--}}
                {{--//     $(".navbar").css('background-color', 'rgba(39,44,56,1)');--}}
                {{--// }--}}
                {{--// scroll = $(window).scrollTop();--}}
            {{--});--}}

            {{--$(".navbar-toggler-icon").click(function(){--}}
                {{--$(".navbar-dgl").css('background-color', 'rgba(39,44,56,1)');--}}
            {{--});--}}

      {{--</script>--}}
    </nav>
  {{--</div>--}}
{{--</div>--}}