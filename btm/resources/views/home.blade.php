@extends('layouts.app')

@section('content')

    <!-- <nav class="col-xl-1 col-lg-2 sidenav navbar navbar-vertical menu-lateral  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scroll-wrapper scrollbar-inner" style="position: relative;">

        <div class="sidenav-header  align-items-center">
                <a class="navbar-brand">
                <img id="img-inicio-1" src="assets/img/logo-transparente.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">

                <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown" >
                        <a class="nav-link active" href="/home">
                        <i class='bx bxs-message-alt-edit'></i>
                            <span class="nav-link-text"> Informações</span>
                        </a>
                        
                        </li>

                    </ul>     
                    

                </div>

            </div>
        </div>
    </nav> -->


    <div class="col-xl-12 col-lg-12 col-md-12 container ml-5 pr-5" id="informacoes">
        <div class="row justify-content-center">

            <div class="coluna-painel">

                <div class="col-lg-6 col-12" style="padding-left: 0px;">
                    <h6 class="h2 text-black d-inline-block mb-0" >Painel de Informações</h6>
                    <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                        </ol>
                    </nav> -->
                </div>
          
                <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Menu Topo</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Menu</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Slide</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">Rodapé Slide</a>
                            </li>

                            <li class="nav-item">
                                <a  class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Quem Somos</a>
                            </li>

                            <li class="nav-item">
                                <a style="background-color: #1111;" class="nav-link  mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-6-tab" data-toggle="modal" data-target="#exampleModal" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="false" >
                                    Áreas de Atuação
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">Associados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-8-tab" data-toggle="tab" href="#tabs-icons-text-8" role="tab" aria-controls="tabs-icons-text-8" aria-selected="false">Receita</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-9-tab" data-toggle="tab" href="#tabs-icons-text-9" role="tab" aria-controls="tabs-icons-text-9" aria-selected="false">Rodapé</a>
                            </li>
                        </ul>
                </div>

                <!-- MODAL -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <h1>EM CONSTRUÇÃO</h1>
                        </div>
                        <div class="modal-footer" style="margin: auto;">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL -->
                
                <!-- TABELA DE INFO -->
                    <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">

                                    <!-- PAINEL 1 -->
                                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <form action="{{route('topo1')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Telefone</label>
                                                    <input name="telefone" value="{{$telefone}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">WhatsApp</label>
                                                    <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">E-mail</label>
                                                    <input name="email" value="{{$email}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link do Instagram</label>
                                                    <input name="instagram" value="{{$instagram}}" type="text" class="form-control">
                                                </div>
                                                
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link do Facebook</label>
                                                    <input name="facebook" value="{{$facebook}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6" style="margin-bottom: 30px;">
                                                    <label class="form-control-label" for="basic-url">Sistema Boleto</label>
                                                    <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                                </div>

                                                <button class="btn btn-icon btn-primary" style="margin: auto;" type="subimt">
                                                    <span class="btn-inner--text">Atualizar</span>
                                                </button>

                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 2 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Menu 1</label>
                                                    <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Menu 2</label>
                                                    <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Menu 3</label>
                                                    <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Menu 4</label>
                                                    <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                                </div>

                                                <div class="description col-md-6" >
                                                    <label class="form-control-label" for="basic-url">Logo Menu</label>
                                                    <input name="logo1" type="file" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <img style="width: 30%; margin-top: 15px; "  src="{{Storage::url($logo1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 210px <br> Altura: 140px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 3 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <form action="{{route('slide')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Slide 1</label>
                                                    <input name="slide1" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 750px <br> Altura: 360px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Imagem Fundo</label>
                                                    <input name="slide2" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide2)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 1900px <br> Altura: 600px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Slide 3</label>
                                                    <input name="slide3" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide3)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 630px <br> Altura: 350px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                    <input name="slide4"  type="text" class="form-control" value="{{$slide4}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                    <input name="slide5"  type="text" class="form-control" value="{{$slide5}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                    <input name="slide6"  type="text" class="form-control" value="{{$slide6}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 4</label>
                                                    <input name="slide7"  type="text" class="form-control" value="{{$slide7}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 5</label>
                                                    <input name="slide8"  type="text" class="form-control" value="{{$slide8}}">
                                                </div>

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 4 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                        <form action="{{route('rodapeslide')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição 1</label>
                                                    <input name="rodapeslide4" value="{{$rodapeslide4}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição 2</label>
                                                    <input name="rodapeslide5"  type="text" class="form-control" value="{{$rodapeslide5}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 2</label>
                                                    <input name="rodapeslide2" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide2)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição 3</label>
                                                    <input name="rodapeslide6"  type="text" class="form-control" value="{{$rodapeslide6}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 3</label>
                                                    <input name="rodapeslide3" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide3)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>
                                
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 5 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                                        <form action="{{route('menu')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                            
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Imagem</label>
                                                    <input name="menu1" type="file" class="form-control" placeholder="Logo">
                                                </div>

                                                <div class="description col-md-6">
                                                    <img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($menu1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 2000px <br> Altura: 1300px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                    <input style="margin-bottom: 20px;" name="menu2" value="{{$menu2}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                    <input style="margin-bottom: 20px;" name="menu3" value="{{$menu3}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Texto</label>
                                                    <input style="margin-bottom: 20px;" name="menu4" value="{{$menu4}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Botão</label>
                                                    <input style="margin-bottom: 20px;" name="menu5" value="{{$menu5}}" type="text" class="form-control" >
                                                </div>
                    
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 6 -->
                                    <!-- <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
                                        <div class="row">
                                            <div class="description col-md-6">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>

                                            <div class="description col-md-6">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>

                                            <div class="description col-md-6" style="margin-top: 30px;">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>

                                            <div class="description col-md-6" style="margin-top: 30px;">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>
                                            
                                            <div class="description col-md-6" style="margin-top: 30px;">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>

                                            <div class="description col-md-6" style="margin-top: 30px; margin-bottom: 30px;">
                                            <input type="text" class="form-control" placeholder="Default input">
                                            </div>

                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                    </div> -->

                                    <!-- PAINEL 7 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-7-tab">
                                        <form action="{{route('associados')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título 1:</label>
                                                    <input name="associados13" value="{{$associados13}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título 1.2:</label>
                                                    <input name="associados14" value="{{$associados14}}" type="text" class="form-control">
                                                </div>


                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 1</label>
                                                    <input style="margin-top: 20px"  name="associados1" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 2</label>
                                                    <input style="margin-top: 20px"  name="associados2" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados2)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 3</label>
                                                    <input style="margin-top: 20px"  name="associados3" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados3)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 4</label>
                                                    <input style="margin-top: 20px"  name="associados4" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados4)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 5</label>
                                                    <input style="margin-top: 20px"  name="associados5" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados5)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 6</label>
                                                    <input style="margin-top: 20px"  name="associados6" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados6)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 7</label>
                                                    <input style="margin-top: 20px"  name="associados7" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados7)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 8</label>
                                                    <input style="margin-top: 20px"  name="associados8" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados8)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 9</label>
                                                    <input style="margin-top: 20px"  name="associados9" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados9)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 10</label>
                                                    <input style="margin-top: 20px"  name="associados10" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados10)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 11</label>
                                                    <input style="margin-top: 20px"  name="associados11" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados11)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 12</label>
                                                    <input style="margin-top: 20px"  name="associados12" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados12)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>
                                                

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 8 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-8" role="tabpanel" aria-labelledby="tabs-icons-text-8-tab">
                                        <form action="{{route('receita')}}" enctype="multipart/form-data" method="post">
                                            <div class="row">
                                                @csrf

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                    <input style="margin-bottom: 20px;" name="receita1" value="{{$receita1}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 1.2</label>
                                                    <input style="margin-bottom: 20px;" name="receita2" value="{{$receita2}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                    <input style="margin-bottom: 20px;" name="receita3" value="{{$receita3}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 2.1</label>
                                                    <input style="margin-bottom: 20px;" name="receita4" value="{{$receita4}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Texto</label>
                                                    <input style="margin-bottom: 20px;" name="receita5" value="{{$receita5}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                    <input style="margin-bottom: 20px;" name="receita6" value="{{$receita6}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 4</label>
                                                    <input style="margin-bottom: 20px;" name="receita7" value="{{$receita7}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Botão</label>
                                                    <input style="margin-bottom: 20px;" name="receita8" value="{{$receita8}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Imagem</label>
                                                    <input style="margin-top: 20px"  name="receita9" type="file" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <img style="width: 40%; margin-top: 15px;"  src="{{Storage::url($receita9)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 440px <br> Altura: 300px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>
                                            
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- PAINEL 9 -->
                                    <div class="tab-pane fade" id="tabs-icons-text-9" role="tabpanel" aria-labelledby="tabs-icons-text-9-tab">
                                        <form action="{{route('footer')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="alert alert-default text-center" role="alert">
                                                <h2 class="text-white">Lembrete</h2>
                                                <p>Para desativar um link basta deixar o campo vazio</p>
                                            </div>
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Facebook</label> 
                                                    {!!$footer1 == '' ? 
                                                        '<input class="ml-2 mr-3 form-check-input" type="radio" name="facebook" value="option1" disabled>
                                                        <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                        '<input class="ml-2 mr-3 form-check-input" type="radio" name="facebook" value="option1" checked >
                                                         <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}     
                                                    <input style="margin-bottom: 20px;" name="footer1" value="{{$footer1}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Instagram</label>
                                                    {!!$footer2 == '' ? 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="instagram" value="option1" disabled>
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="instagram" value="option1" checked >
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}  
                                                    <input style="margin-bottom: 20px;" name="footer2" value="{{$footer2}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Twitter</label>
                                                    {!!$footer3 == '' ? 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="twitter" value="option1" disabled>
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="twitter" value="option1" checked >
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}  
                                                    <input style="margin-bottom: 20px;" name="footer3" value="{{$footer3}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Skype</label>
                                                    {!!$footer4 == '' ? 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="skype" value="option1" disabled>
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="skype" value="option1" checked >
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}  
                                                    <input style="margin-bottom: 20px;" name="footer4" value="{{$footer4}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link LinkedIn</label>
                                                    {!!$footer5 == '' ? 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="linkedin" value="option1" disabled>
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="linkedin" value="option1" checked >
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}  
                                                    <input style="margin-bottom: 20px;" name="footer5" value="{{$footer5}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link YouTube</label>
                                                    {!!$footer6 == '' ? 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="youtube" value="option1" disabled>
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                            '<input class="ml-2 mr-3 form-check-input" type="radio" name="youtube" value="option1" checked >
                                                            <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}  
                                                    <input style="margin-bottom: 20px;" name="footer6" value="{{$footer6}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Cnpj</label>
                                                    <input style="margin-bottom: 20px;" name="footer7" value="{{$footer7}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                    <input style="margin-bottom: 20px;" name="footer8" value="{{$footer8}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                    <input style="margin-bottom: 20px;" name="footer9" value="{{$footer9}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                    <input style="margin-bottom: 20px;" name="footer10" value="{{$footer10}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 4</label>
                                                    <input style="margin-bottom: 20px;" name="footer11" value="{{$footer11}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Titulo 5</label>
                                                    <input style="margin-bottom: 20px;" name="footer12" value="{{$footer12}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Logo do Rodapé</label>
                                                    <input style=""  name="footer13" type="file" class="form-control">
                                                </div>                                           

                                                <div class="description col-md-6">
                                                    <img style="background: black; width: 40%; margin-top: 15px;"  src="{{Storage::url($footer13)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 200px <br> Altura: 120px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div>
                                            
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    </div>
                <!-- END TABELA DE INFO -->
     
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


@endsection