@extends('layouts.app')

@section('content')


  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scroll-wrapper scrollbar-inner" style="position: relative;">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
          <a class="navbar-brand">
            <img id="img-inicio-1" src="assets/img/logo-transparente.png" class="navbar-brand-img" alt="...">
          </a>
        </div>
        <div class="navbar-inner">
          <!-- Collapse -->

          <div class="collapse navbar-collapse" id="sidenav-collapse-main">

            <!-- MENU LATERAL -->
            <ul class="navbar-nav">
                
              <li class="nav-item dropdown" >
                <a class="nav-link" href="home">
                <i class='bx bxs-message-alt-edit'></i>
                  <span class="nav-link-text"> Informações</span>
                </a>
                
              </li>

              <li class="nav-item">
                <a class="nav-link active" >
                <i class='bx bxs-user' ></i>
                  <span class="nav-link-text">Suporte</span>
                </a>
              </li>

            </ul>     

          </div>

        </div>
      </div>
  </nav>
        

  <div class="container" id="informacoes">
        <div class="row justify-content-center">

            <div class="col-lg-11 col-md-11" style="margin-left: 250px;">

                <div class="col-lg-6 col-7" style="padding-left: 0px;">
                    <h6 class="h2  text-black   d-inline-block mb-0">Escolha a melhor forma de contato com o suporte</h6>
                </div>

                <div class="col-lg-12 mt-5">
                  <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-3">
                        <div class="card card-stats">
                          <div class="card-body">
                            <div class="row">
                                <div class="col">
                                  <h5  class="card-title text-uppercase text-muted mb-0">Contato 1</h5>
                                  <span class="h3 font-weight-bold mb-0">WhatsApp</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                      <i class="ni ni-active-40"></i>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>      
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-3">
                        <div class="card card-stats">
                          <div class="card-body">
                            <div class="row">
                                <div class="col">
                                  <h5  class="card-title text-uppercase text-muted mb-0">Contato 2</h5>
                                  <span class="h3 font-weight-bold mb-0">E-mail</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                      <i class="ni ni-active-40"></i>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>      
                    </div>



                  </div>
                </div>
          
                <footer class="footer pt-0">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-12">
                            <div class="copyright text-rigth  text-lg-rigth  text-muted">
                                © 2021
                                <a  href="https://agenciabrawn.com.br" class="font-weight-bold ml-1" target="_blank">
                                Agência Brawn
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>

                </div>

            </div>

        </div>
        
  </div>

 

@endsection