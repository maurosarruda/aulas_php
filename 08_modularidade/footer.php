
        <!-- Footer-->
        <div class="row">
            <div class="col-sm-12 mb-3">
                <hr>
            </div>
            <div class="col-sm-4">
                <h3 class="text-center">Idealizadores</h3>
                <p class="text-center mt-md-5 mt-3">
                    Guilherme S. Borges
                </p>
                <p class="text-center">
                    Ricardo V. Sanches
                </p>
            </div>

            <div class="col-sm-4">
                <h3 class="text-center">Menu</h3>
                <div class="list-group text-center">
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">
                        Perfil
                    </a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">
                        Serviços
                    </a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">
                        Depoimentos
                    </a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">
                        Contatos
                    </a>
                </div>
            </div>

            <div class="col-sm-4 mt-md-0 mt-4">
                <h3 class="text-center">Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a class="btn btn-outline-warning" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-5 bg-primary pb-2">
        <hr>
        <blockquote class="blockquote text-center text-light">
            <p class="mb-0"><em>"-Viajar não é algo em que você é bom. É algo que você faz. Como respirar."</p>
            <footer class="blockquote-footer text-white">Forman,<cite tittle="titulo">Gayle</cite></footer>
        </blockquote>
    </div>

    <!--Modal-->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ver mais</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class=row>
                            <div class="col-6">
                                <h5>Contrato</h5>
                                <p>Os transportes são limitados pela localidade, atente-se ao plano assinado!</p>
                            </div>
                            <div class="col-6">
                                <h5>Ligue para nós:</h5>
                                <p>(35) 99999-0103</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-header">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery,Popper.js, then Bootstrap JS ... all called from our source/-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>
</body>
</html>