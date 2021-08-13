                <!-- LAYOUT ANTIGO -->
                <div class="card">
                        <div class="card-header">Início</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="accordion" id="accordionExample">

                                <!-- TOPO 1 -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            TOPO 1
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
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

                                <!-- MENU -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            MENU
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row" style="margin-bottom: 30px;">
                                                        <div class="col">
                                                            <input name="logo1" type="file" class="form-control" placeholder="Logo">
                                                        </div>
                                                        <div class="col">
                                                            <!-- editar -->
                                                                <img style="width: 30%" src="{{Storage::url($logo1)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <!-- 2 MENU -->
                                                    <div class="container row" style="margin-bottom: 30px;">
                                                        <div class="col">
                                                            <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                                        </div>
                                                        <div class="col">
                                                            <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                                        </div>
                                                    </div>

                                                    <!-- 2 MENU -->
                                                    <div class="container row">
                                                        <div class="col">
                                                            <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                                        </div>
                                                        <div class="col">
                                                            <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                                        </div>
                                                    </div>


                                                    <div style="text-align: center; margin-top: 20px;"> 
                                                        <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            
                                <!-- SLIDE -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                            SLIDE
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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

                                </div>

                                <!-- RODAPE SLIDE -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                            RODAPÉ SLIDE
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('rodapeslide')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row">
                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide1" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; width: 30%" src="{{Storage::url($rodapeslide1)}}" alt="">
                                                        </div>

                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide2" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; width: 30%" src="{{Storage::url($rodapeslide2)}}" alt="">
                                                        </div>

                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide3" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; text-align: center; width: 30% " src="{{Storage::url($rodapeslide3)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="container row" style="margin-top: 30px">
                                                        <div class="col">
                                                            <input name="rodapeslide4" value="{{$rodapeslide4}}" type="text" class="form-control">
                                                        </div>

                                                        <div class="col">
                                                            <input name="rodapeslide5" value="{{$rodapeslide5}}" type="text" class="form-control">
                                                        </div>

                                                        <div class="col">
                                                            <input name="rodapeslide6" value="{{$rodapeslide6}}" type="text" class="form-control">
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

                <div class="card" style="margin-top: 50px;  ">
                        <div class="card-header">Secções do Menu</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="accordion" id="accordionExample">

                                <!-- QUEM SOMOS -->
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            QUEM SOMOS
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('menu')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="menu1" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($menu1)}}" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="menu2" value="{{$menu2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu3" value="{{$menu3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu4" value="{{$menu4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu5" value="{{$menu5}}" type="text" class="form-control" >
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- AREAS DE ATUAÇÃO -->
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        ÁREAS DE ATUAÇÃO
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">

                                    <div class="card-body">
                                            <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row" style="margin-bottom: 30px;">
                                                    <div class="col">
                                                        <input name="logo1" type="file" class="form-control" placeholder="Logo">
                                                    </div>
                                                    <div class="col">
                                                            <img style="width: 30%" src="{{Storage::url($logo1)}}" alt="">
                                                    </div>
                                                </div>

                                                <div class="container row" style="margin-bottom: 30px;">
                                                    <div class="col">
                                                        <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                                    </div>
                                                    <div class="col">
                                                        <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                                    </div>
                                                </div>

                                                <div class="container row">
                                                    <div class="col">
                                                        <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                                    </div>
                                                    <div class="col">
                                                        <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                                    </div>
                                                </div>


                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- ASSOCIADOS -->
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            ASSOCIADOS
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('associados')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row" >
                                                        <div class="col-lg-6" >
                                                            <input style="margin-top: 20px"  name="associados1" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados2" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados3" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados4" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados5" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados6" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados7" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados8" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados9" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados10" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados11" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados12" type="file" class="form-control">

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados1)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados2)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados3)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados4)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados5)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados6)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados7)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados8)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados9)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados10)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados11)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados12)}}" alt=""> <br>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <input style="margin-top: 20px; margin-bottom: 20px;" name="associados13" value="{{$associados13}}" type="text" class="form-control" >
                                                            <input style="margin-bottom: 20px;" name="associados14" value="{{$associados14}}" type="text" class="form-control" >
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

                                <!-- RECEITA BTM -->
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                            RECEITAS BTM
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('receita')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="receita1" value="{{$receita1}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita2" value="{{$receita2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita3" value="{{$receita3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita4" value="{{$receita4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita5" value="{{$receita5}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita6" value="{{$receita6}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita7" value="{{$receita7}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita8" value="{{$receita8}}" type="text" class="form-control" >
                                                    </div>

                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="receita9" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($receita9)}}" alt="">
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- FOOTER -->
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            BARRA DE CONTATO (FOOTER)
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('footer')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="footer1" value="{{$footer1}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer2" value="{{$footer2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer3" value="{{$footer3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer4" value="{{$footer4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer5" value="{{$footer5}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer6" value="{{$footer6}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer7" value="{{$footer7}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer8" value="{{$footer8}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer9" value="{{$footer9}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer10" value="{{$footer10}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer11" value="{{$footer11}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer12" value="{{$footer12}}" type="text" class="form-control" >

                                                    </div>

                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="footer13" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($footer13)}}" alt="">
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
                <!-- LAYOUT ANTIGO -->