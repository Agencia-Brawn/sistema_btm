@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Painel de Controle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Topo 1
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form action="{{route('topo1')}}" method="post">
                                        @csrf
                                        <div class="container row">
                                            <div class="col">
                                                <input name="telefone" value="{{$telefone}}" type="text" class="form-control" placeholder="Telefone">
                                            </div>
                                            <div class="col">
                                            <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control" placeholder="WhatsApp">
                                            </div>
                                        </div>

                                        <div class="container row">
                                            <div class="col">
                                            <input name="email" value="{{$email}}" type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                            <div class="col">
                                            <input name="instagram" value="{{$instagram}}" type="text" class="form-control" placeholder="Instagram">
                                            </div>
                                        </div>

                                        <div class="container row">
                                            <div class="col">
                                            <input name="facebook" value="{{$facebook}}" type="text" class="form-control" placeholder="Facebook">
                                            </div>
                                            <div class="col">
                                            <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                            </div>
                                        </div>

                                        <div style="text-align: center; margin-top: 20px;"> 
                                            <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Slide
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <!-- INPUTS -->
                            <div class="card-body">
                                    <form action="{{route('slide')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="container row">
                                            <div class="col">
                                                <input name="slide1" type="file" class="form-control" placeholder="Slide">
                                            </div>
                                            <div class="col">
                                                <img style="width: 30%" src="{{Storage::url($slide1)}}" alt="">
                                            </div>
                                        </div>

                                        <div class="container row">
                                            <div class="col">
                                               <input name="slide2"  type="file" class="form-control" placeholder="Slide">
                                            </div>

                                            <div class="col">
                                            <img style="width: 30%" src="{{Storage::url($slide2)}}" alt="">
                                            </div>
                                        </div>

                                        <div class="container row">
                                            <div class="col">
                                                <input name="slide3"  type="file" class="form-control" placeholder="Slide">
                                            </div>

                                            <div class="col">
                                                <img style="width: 30%" src="{{Storage::url($slide3)}}" alt="">
                                            </div>
                                        </div>

                                        <div style="text-align: center; margin-top: 20px;"> 
                                            <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Áreas de Atuação
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                        <form action="{{route('topo1')}}" method="post">
                                            @csrf
                                            <div class="container row">
                                                <div class="col">
                                                    <input name="telefone" value="{{$telefone}}" type="text" class="form-control" placeholder="Telefone">
                                                </div>
                                                <div class="col">
                                                <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control" placeholder="WhatsApp">
                                                </div>
                                            </div>

                                            <div class="container row">
                                                <div class="col">
                                                <input name="email" value="{{$email}}" type="text" class="form-control" placeholder="E-mail">
                                                </div>
                                                <div class="col">
                                                <input name="instagram" value="{{$instagram}}" type="text" class="form-control" placeholder="Instagram">
                                                </div>
                                            </div>

                                            <div class="container row">
                                                <div class="col">
                                                <input name="facebook" value="{{$facebook}}" type="text" class="form-control" placeholder="Facebook">
                                                </div>
                                                <div class="col">
                                                <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                                </div>
                                            </div>

                                            <div style="text-align: center; margin-top: 20px;"> 
                                                <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
