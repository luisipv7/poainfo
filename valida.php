<!doctype html>
<html lang="pt-br">
<?php

$endereco = $_POST['evento'];


//echo 'Endereço enviado:'.$endereco;



?>

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
</head>

<body class="text-center" id="fundo">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.html">INFOPOA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        </nav>
    </header>
    <form class="form-signin" action="valida.php" method="POST">
        <!--<img class="mb-4" src="" href="" alt="" width="72" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal" id="blacktext">Endereço enviado:</h1>
        <label for="input" class="sr-only"></label>
        <input type="text" name="evento" class="form-control" value="<?php echo $endereco;?>">
        <div class="checkbox mb-3">
            <label>
         
        </label>
        </div>
        <p class="mt-5 mb-3 text-muted"></p>
    </form>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script lang="javascript">
    </script>
   </body>

</html>