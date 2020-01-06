<html>

<head>

  <meta charset="utf-8">

  <link rel="stylesheet" href="blog/public/bootstrapaero/css/bootstrap.css">

  <link rel="stylesheet" href="blog/public/personal/personal.css">

  <link rel="stylesheet" href="blog/public/font-awesome-4.7.0/css/font-awesome.css">

  <script src="blog/public/jquery/jquery-3.4.1.js"></script>

</head>

<body style="padding-top:50px;">

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="list-group" style="padding-bottom:15px;">

          <div class="card text-white bg-aeroblack">

            <div class="card-body">

              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <div class="card text-white bg-aeroblack" style="width: 100%;margin-bottom:10px;">

                  <div class="card-body">

                    <img class="user__img" src="blog/public/images/ney2.jpg" alt="" style="width: 3rem; height: 3rem; border-radius: 50%; margin-right: .8rem; float: left;">

                    <div style="margin-top: 0.3rem;">

                      <span style="font-weight: 600; font-size: .9rem; margin-top: .2rem;">Neyelson Alves</span><br>
                      <span style="font-size: .7rem;">neyelson@gmail.com</span>

                    </div>

                  </div>

                </div>

                <a class="nav-link text-white bg-aeroblack <?php if (Route::current()->uri() === '/') { echo 'active'; } ?>" href="/Dashboard_Laravel_BootstrapAero"><i class="fa fa-home"></i> Início</a>
                <a class="nav-link text-white bg-aeroblack <?php if (Route::current()->uri() === 'cadastrar') { echo 'active'; } ?>" href="cadastrar"><i class="fa fa-plus"></i> Cadastrar novo</a>
                <a class="nav-link text-white bg-aeroblack <?php if (Route::current()->uri() === 'ver') { echo 'active'; } ?>" href="ver" ><i class="fa fa-search"></i> Ver cadastros</a>

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

            @yield('conteudo')

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

</body>

</html>