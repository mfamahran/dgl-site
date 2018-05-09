<!--
 * Copyright 2018 DAGAMELEAGUE

 ____    ___  __
(  _ \  / __)(  )
 )(_) )( (_-. )(__  / _/ _ \ '_/ -_)_/ _/ _ \ '  \
(____/  \___/(____) \__\___/_| \___(_)__\___/_|_|_|

  @author XEQTIONR
  @template atournament
-->
@extends('layouts.main')

@section('body-section')

  <div class="row justify-content-center banner-background">
    <div class="col col-lg-9  px-0 mt-5">
      {{--Dynamic background URL--}}
      <div class="jumbotron-fluid jumbotron-atournament" style="background:linear-gradient(rgba(239,159,60,.4),rgba(239,159,60,.2)),url('/storage/dota-1.png');">
        <div class="row tournament-name-row pt-5 justify-content-center" style="">
          <div class="col-12">
            <h1 class="display-4 text-center">{{$tournament->name}}</h1>
          </div>
          <hr class="my-4">
        </div>
        <div class="aspacer">

        </div>
        <div class="row">
          <div class="col">
            <h2 class="text-center">National First Division DOTA 2 Tournament</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="lead text-center"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center sub-menu back-color-dark">
    <div class="col col-lg-9 nav-container" >
      <nav class="nav justify-content-center">
        <a class="nav-link active" id="navOverview" href="#overviewRow">Overview</a>
        <a class="nav-link" id="navInfo" href="#infoRow">Information</a>
        <a class="nav-link" id="navTeams" href="#teamsRow">Teams</a>
        <a class="nav-link" id="navRules" href="#rulesRow">Rules</a>
        <a class="nav-link" id="navRegistration" href="#registerRow">Registration</a>
      </nav>
    </div>
  </div>
  <div class="row justify-content-center back-color-dark">
    <div class="col-12 col-lg-9 my-0" style="">
      <div class="row mt-4">
        <div class="col-12 col-md-9 main-slot">

          <script>
              $( document ).ready(function(){
                  $('.tournament-row').hide();
                  $('.tournament-row-overview').show();

                  $('#navOverview').click(function () {
                      $('.tournament-row').hide();
                      $('.tournament-row-overview').show();
                  });

                  $('#navInfo').click(function () {
                      $('.tournament-row').hide();
                      $('.info-row').show();

                  });
                  $('#navTeams').click(function () {
                      $('.tournament-row').hide();
                      $('.tournament-row-teams').show();
                  });
                  $('#navRules').click(function () {
                      $('.tournament-row').hide();
                      $('.tournament-row-rules').show();
                  });
                  $('#navRegistration').click(function () {
                      $('.tournament-row').hide();
                      $('.register-row').show();
                  });
              });
          </script>
          @include('tournaments.tournament_overview')
          @include('tournaments.tournament_info')
          @include('tournaments.tournament_rules')
          @include('tournaments.tournament_teams')
          @include('tournaments.register')

        </div>
        <div class="col-12 col-md-3">
          <div class="sidebar-header mt-4">
            <h5>Next Match</h5>
          </div>
          <div class="row justify-content-center mt-4">

            <div class="col-5">
              <div class="card team-logo-300-trans">
                <img class="card-img-top" src="{{URL::asset('storage/team-8.png')}}" alt="Card image cap">
              </div>
            </div>
            <div class="col-2 pt-4">
              <h6 class="font-primary-color text-center">vs</h6>
            </div>
            <div class="col-5">
              <div class="card team-logo-300-trans">
                <img class="card-img-top" src="{{URL::asset('storage/team-2.png')}}" alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-5" style="">
              <h5 class="text-center font-white">OT</h5>
            </div>
            <div class="col-2" style="border: 1px dashed white;">
            </div>
            <div class="col-5" style="">
              <h5 class="text-center font-white">RC</h5>
            </div>
          </div>
          <div class="sidebar-header mt-4">
            <h5>Standings</h5>
          </div>
          <div class="row justify-content-center mt-4">
            <div class="col-11">
              <table class="table table-sm table-dark">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Team</th>
                  <th scope="col">Played</th>
                  <th scope="col">Points</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>5</td>
                  <td>15</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>5</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>5</td>
                  <td>10</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      {{--<div style="height: 50vh;">--}}

      {{--</div>--}}
    </div>
  </div>
@endsection