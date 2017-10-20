<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulário de Catálogo
        </title>
         <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
        <script type="text/javascript" src="public/js/jquery.mask.min.js"/></script>
        <script src="public/js/app.js"></script> 
        <script src="public/js/add.js"></script> 
         <link rel="stylesheet" href="style.css">  

        <script>
        jQuery(function($){
        $("#inputPhone").mask("(00) 00000-0000");
        });
        </script>  
				 <script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>             
        

    </head>
    <body>

 	  <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="public/ccsa.png" width="300" class="d-inline-block align-top" alt=""/>
            </a>
        </div>
    </nav>
        <br/>
        <div class="container" >
            <div class="panel panel-primary"   >

              <div class="panel-heading" style="background-color: #ed5548">Formulário Catálogo</div>
              <div class="panel-body" >
		<?php echo validation_errors(); ?>
                <?php echo form_open('Form'); ?>

                  <div class="form-group"> <!-- name field -->
                      <label class="control-label" for="inputName">Nome</label> 
                      <input class="form-control" data-error="Preencha esse campo." id="inputName" name="nome" placeholder="ex: Joao"  type="text" required />
                      <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group"> <!-- email field -->
                    <label for="inputEmail" class="control-label">Email</label> 
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="ex: joao@gmail.com" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group"> <!-- phone field -->
                    <label for="inputPhone" class="control-label">Telefone</label> 
                    <input type="text" id="inputPhone" class="form-control" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4,5}" required>
                  </div>

                  <div class="form-group"> <!-- cargo field -->
                      <label class="control-label" for="inputCargo">Cargo</label>
                      <input class="form-control" data-error="Preencha esse campo." id="inputCargo" name="cargo" placeholder="ex: Professor"  type="text" required />
                      <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group"> <!-- campo de Objetivo !-->
                      <label class="control-label">Objetivo</label>
                      <div class="checkbox">
                        <label><input type="checkbox" name="tipo[]" value="Pesquisa"> Pesquisa </label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="tipo[]" value="Ensino"> Ensino </label>
                      </div>
                      <div class="checkbox">
                      <label><input type="checkbox" name="tipo[]" value="Extensao"> Extensao </label>
                      </div>
                  </div>              


                  <div class="form-inline" id="formacaoField" > <!-- Formacao field -->
                      <label class="control-label" for="inputFormacao" id="teste">Formação</label><br>
                      <input class="form-control" data-error="Preencha esse campo." id="inputFormacao" onkeyup="somenteNumeros(this)" type="text" required placeholder="Ano Inicio" maxlength="4" size="10" />
                      <input class="form-control" data-error="Preencha esse campo." id="inputFormacao1" type="text" required placeholder="Ano Fim" maxlength="4" size="10" onkeyup="somenteNumeros(this)" />
                      <select class="form-control" id="inputFormacao2">
                        <option>Doutorado</option>
                        <option>Mestrado</option>
                        <option>Graducao</option>
                      </select>
                       <input class="form-control" data-error="Preencha esse campo." id="inputFormacao3" type="text" required placeholder="Curso" />
                      <button type="button" class="btn btn-success btn-sm" id="btn1" onclick="addText()">
                      <span class="glyphicon glyphicon-plus-sign"></span>Adicionar</button>
                      <ul class="list-group" id="list"></ul>
                      <div class="help-block with-errors"></div>
                  </div>

                   <div class="form-inline" id="expField" > <!-- Experiencia field -->
                      <label class="control-label" for="inputExpLocal" id="teste">Experiencia</label><br>
                      <input class="form-control" data-error="Preencha esse campo." id="inputExpLocal" name="inputExpLocal" type="text" required placeholder="Local" />
                       <input class="form-control" data-error="Preencha esse campo." id="inputExpDesde" name="inputExpDesde" onkeyup="somenteNumeros(this)" type="text" required placeholder="Desde(ex: 2015)" maxlength="4" size="15" />
                       <textarea class="form-control" data-error="Preencha esse campo." id="inputExp3" type="text" required placeholder="ATIVIDADES PROFISSIONAIS JÁ DESEMPENHADAS, EM PESQUISA OU EM MILITÂNCIA, PRINCIPALMENTE RELATIVAS AO ITEM ANTERIOR" cols="75" ></textarea>
                      <button type="button" class="btn btn-success btn-sm" id="btn1" onclick="add()">
                      <span class="glyphicon glyphicon-plus-sign"></span>Adicionar</button>
                      <ul class="list-group" id="list1"></ul>
                      <div class="help-block with-errors"></div>
                  </div>


                    <div class="form-group"> <!-- Interesses field -->
                      <label class="control-label" for="inputInteresse">Interesses</label>
                      <textarea class="form-control" data-error="Preencha esse campo." id="inputInteresse" name="interesses" required=""></textarea>
                      <div class="help-block with-errors"></div>
                  </div>

                    <div class="form-group"> <!-- Especialidades field -->
                      <label class="control-label" for="inputEspecialidades">Especialidades</label>
                      <textarea class="form-control" data-error="Preencha esse campo." id="inputEspecialidades" name="inputEspecialidades" required=""></textarea>
                      <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group"> <!-- lattes field -->
                      <label class="control-label" for="inputLattes">Currículo Lattes e/ou ORCID</label> 
                      <input class="form-control" data-error="Preencha esse campo." id="inputLattes" name="curriculo" placeholder="ex: URL"  type="text" required />
                      <div class="help-block with-errors"></div>
                  </div>



                   <div class="form-group">
                      <button class="btn btn-primary" type="submit" style="background-color: #ed5548" >
                          Enviar formulário
                      </button>
                  </div>
                </form>

              </div>
            </div>
        </div>
    </body>
</html>
