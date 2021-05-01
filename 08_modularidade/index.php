<?php
    // include "nav1.php";
    // require "nav.php";
    require_once "nav.php";
?>

    <div id="carouselSite" class="carousel slide d-md-block d-none" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/slide-01.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Conheça Itajubá-MG</h1>
                    <p class="lead">A cidade conta com um belo parque municipal, o qual contém um cinema movido á energia renovável, um teatro, pista de Kart e praça de alimentação.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slide-02.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Conheça São Lourenço-MG</h1>
                    <p class="lead">A cidade conta com um belo parque das águas, fazendas, um conglomerado de hotéis e grandes plantações de café nos arredores.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slide-03.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Conheça Itamonte-MG</h1>
                    <p class="lead">A cidade conta com belas paisagens naturais, cervejarias artesanais e opções de estadia em hotéis fazenda.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-11 col-md-12 text-center ml-md-0 ml-2 my-5">
                <h1 class="display-3"><i class="fas fa-bus-alt text-primary" aria-hidden="true"></i>
                    Planeje sua viagem conosco
                </h1>
                <p>Faça seu roteiro para viajar conosco!!!</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 mb-3">
                <nav id="navbarVertical" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item1">Roteiro</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-4" href="#item1-1">Sul de Minas</a>
                            <a class="nav-link ml-4" href="#item1-2">Interior do Rio</a>
                        </nav>
                        <a class="nav-link my-2" href="#item2">Agendamento</a>
                        <a class="nav-link my-2" href="#item3">Pagamento</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-4" href="#item3-1">Cartão</a>
                            <a class="nav-link ml-4" href="#item3-2">Dinheiro</a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-sm-6 col-md-8">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    <h4 id="item1">Roteiro</h4>
                    <p>Escolha entro o Sul de Minas e a região dos lagos do RJ.</p>

                    <h5 id="item1-1">Sul de Minas</h5>
                    <p>Passamos por todas as cidades do circuito das águas/estrada real.</p>

                    <h5 id="item1-2">Interior do Rio</h5>
                    <p>Nosso roteiro abrange as cidades imperiais, Petrópolis e Itaipava estão inclusos no roteiro.</p>

                    <h4 id="item2">Agendamento</h4>
                    <p>Temos a possibilidade de agendamento para as férias escolares de julho ou dezembro.</p>

                    <h4 id="item3">Pagamento</h4>
                    <p>Nossos termos são flexíveis, entre em contato conosco.</p>

                    <h5 id="item3-1">Cartão</h5>
                    <p>Parcelamos em 12x sem juros suas viagens incluindo nossos 2 tipos de pacotes.</p>

                    <h5 id="item3-2">Dinheiro</h5>
                    <p>Possibilitamos 20% para qualquer viagem no pagamento à vista!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-sm-center">
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img top" src="imgs/item-01.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Rotary Micro Ônibus</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6>
                        <p class="card-text">Conheça nossa frota:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Micro Ônibus Mercedes Deluxe</li>
                        <li class="list-group-item">Micro Ônibus Volks D-5000</li>
                        <li class="list-group-item">Micro Ônibus Chevrolet M-Size</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
                            Ver mais
                        </a>
                        <a href="/reservarLugares.html" class="card-link">Reservar Lugares</a>
                    </div>
                    <div class="card-footer text-muted">
                        Disponível em viagens longas
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img top" src="imgs/item-02.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Rotary Van</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Ideal para pequenas escurssões</h6>
                        <p class="card-text">Conheça nossa frota:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Van Mercedes Ago</li>
                        <li class="list-group-item">Van Mercedes X5S</li>
                        <li class="list-group-item">Van Crysler K22 Puma</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
                            Ver mais
                        </a>
                        <a href="/reservarLugares.html" class="card-link">Reservar lugares</a>
                    </div>
                    <div class="card-footer text-muted">
                        Indisponível interestadualmente
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img top" src="imgs/item-03.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Rotary Táxi</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Ideal para translados nos pontos turísticos</h6>
                        <p class="card-text">Conheça nossa frota:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Táxi Volvo Minister</li>
                        <li class="list-group-item">Táxi Chevrolet Prisma</li>
                        <li class="list-group-item">Táxi Fiat Lux</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">
                            Ver mais
                        </a>
                        <a href="/reservarLugares.html" class="card-link">Reservar lugares</a>
                    </div>
                    <div class="card-footer text-muted">
                        Disponível para até quatro pessoas
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4"><i class="fa fa-video-camera text-primary col-12 col-md-1" aria-hidden="true"></i>
                        Faça uma prévia da sua viagem!
                    </h1>

                    <p class="lead mt-4 mt-md-0">
                        Separamos para você alguns dos melhores momentos
                        que você pode viver, você já pode sentir o cheiro do
                        seu destino.
                    </p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">
                                Região dos Lagos (RJ)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">
                                Trecho da Estrada Real (MG)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">
                                Petrópolis (RJ)
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yQP1Z4FzlGA">
                                        </iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-4 mt-md-0">
                                    <p>
                                        Acompanhe este belo passeio pelas praias
                                        recortadas por serras; este vídeo foi
                                        gravado por Drone, e todos os direitos
                                        de imagem não nos pertence.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oMvs6Go--ig">
                                        </iframe>
                                    </div>
                                </div>

                                <div class="col-sm-6 mt-4 mt-md-0">
                                    <p>
                                        Karol Maeda desbrava a Serra da Mantiqueira,
                                        este vídeo passa pelas montanhas e trilhas que
                                        tanto marcam o relevo do nosso querido Sul de
                                        Minas Gerais.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5TQTDnNI2U8">
                                        </iframe>
                                    </div>
                                </div>

                                <div class="col-sm-6 mt-4 mt-md-0">
                                    <p>
                                        Anna Maria Tross nos mostra neste vídeo a cidade
                                        imperial, vista de todos os ângulos e cores, o já
                                        tradicional Mirante e a casa de Santos Dummond são
                                        alguns dos pontos encontrados nessa relíquia histórica.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulary -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-10 text-center my-md-4 mb-4 mt-2 ml-4">
                <h1 class="display-4"><i class="fas fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
                    Entre em contato conosco
                </h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Seu nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputSobrenome">Seu sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui sobrenome">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputEnd">Seu endereço</label>
                            <input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu endereço completo">

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputCidade">Sua cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="Digite aqui sua cidade">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputEst">Seu estado</label>
                            <select id="inputEst" class="form-control">
                                <option selected>Unidades federativas...</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AM</option>
                                <option>AP</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MG</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>PR</option>
                                <option>RJ</option>
                                <option>RO</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>SC</option>
                                <option>SE</option>
                                <option>SP</option>
                                <option>TO</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="inputCEP">Seu CEP</label>
                            <input type="text" class="form-control" id="inputCEP" placeholder="XXXXX-XXX">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Desejo receber novos roteiros no e-mail
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Pintou alguma dúvida?!" data-content="Fale conosco: help@rotaryViagens.com">Ajuda</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
<?php
    require "footer.php"
?>