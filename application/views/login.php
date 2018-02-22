<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
<body>
  <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../ccsa.png" width="300" class="d-inline-block align-top" alt=""/>
            </a>
        </div>
    </nav>
    <div class="container"> 
        <div style="margin-top: 20px"></div>
        <div class="row">
            <div class="col-md-12">
                <h3>Resultados da avaliação das bases de pesquisa</h3><hr>
            </div>
        </div>
        <div style="margin-top: 20px"></div>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Form/login'); ?>
      <div class="form-group">
        <label for="username">Usuário:</label>
        <input type="text" class="form-control" id="username" name="username" required>
        <span class="text-danger"><?php echo form_error('username'); ?></span>
      </div>
      <div class="form-group">
        <label for="pwd">Senha:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
        <span class="text-danger"><?php echo form_error('password'); ?></span>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
  </div>
  </div>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>

