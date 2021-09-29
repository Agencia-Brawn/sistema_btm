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