@extends('masters.masterapp')

@section('content')

<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <div class="list-group" style="padding-bottom:15px;">

        <div class="card text-white bg-aeroblack">

          <div class="card-body">

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

              <div class="card text-white bg-aeroblack" style="width: 100%;margin-bottom:10px;">

                <div class="card-body">

                  <img class="user__img" src="{{ asset('public/images/user1.jpg') }}" alt="" style="width: 3rem; height: 3rem; border-radius: 50%; margin-right: .8rem; float: left;">

                  <div style="float: left; margin-top: .2rem;">

                    <div style="font-weight: 600; font-size: .9rem;">


                      <?php

                      $nfdashboard = Auth::user()->name; 
                      $nfdashboard = explode(' ', $nfdashboard, 3);
                      echo $nfdashboard[0].' '.$nfdashboard[1];


                      ?>
                      


                    </div>



                    <div style="font-size: .7rem;">{{ Auth::user()->email }}</div>

                  </div>

                </div>

              </div>

              <a class="nav-link text-white bg-aeroblack <?php if (Route::current()->uri() === 'dashboard') { echo 'active'; } ?>" href="dashboard"><i class="fa fa-bars" aria-hidden="true"></i> Início</a>

              <a class="nav-link text-white bg-aeroblack" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                {{ __('Logout') }}
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div id="conteudo" class="col-lg-9">

     <div class="tab-content" id="v-pills-tabContent">

      <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <ul class="nav nav-tabs ">

          <li class="nav-item">
            <a class="nav-link bg-aeroblack active " href="<?php if (Route::current()->uri() === '/') {echo '/Dashboard_Laravel_BootstrapAero'; } else { echo Route::current()->uri(); } ?>"><?php if (Route::current()->uri() === '/') { echo 'Início'; } else { echo ucwords(Route::current()->uri()); } ?></a>
          </li>

        </ul>

        <div class="card text-white bg-aeroblack" style="width: 100%;  border-top-left-radius: 0px;">

          <div class="card-body">

            @yield('contentdashboard')

          </div>

        </div>

      </div>

    </div>

    <br>
    <span class="text-white"><center>{{ date('Y') }} - github.com/Neyelson</center></span>
    <br>

  </div>

</div>

</div>

@endsection


