<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" id="input-nome" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Endereco</label>
                            <div class="col-sm-10">
                                <input type="text" id="input-endereco" class="form-control" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sexo</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" id="input-sexo" value="F" name="sexo"> Feminino 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="M" name="sexo"> Masculino 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="I" name="sexo"> Indefinido 
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btn-enviar" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <script>
            $('#btn-enviar').click(function(){
              if($('#input-nome').val()==''){
                  alert("Preencha o nome");
              }
            })
            
             $('#btn-enviar').click(function(){
              if($('#input-endereco').val()==''){
                  alert("Preencha o endereço");
              }
            })
                       
        </script> 
    </body> 
</html>
