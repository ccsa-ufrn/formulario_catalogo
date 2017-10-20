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
		<h3>Formulário submetido com sucesso!</h3>
              </div>
            </div>
        </div>
    </body>
</html>
