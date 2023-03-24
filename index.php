<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de carros</title>
    <link rel="shortcut icon"  href="imagens/favicon.png">
</head>
<body class="bg-secondary">
     <header>
         <nav class="navbar navbar-light bg-dark">
             <div class="container-fluid d-flex justify-content-center">
                 <div class="navbar-brand">
                     <img src="imagens/adicionar-carro.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
                 </div>
             </div>
             <div class="container-fluid d-flex justify-content-center">
                 <div class="navbar-brand">
                     <h1 class="text-white">Cadastro de carros</h1>
                 </div>
             </div>
         </nav>
     </header>

     <section class="bg-secondary">
         <div class="container">
             <form action="cadastrar.php" method="POST">
                 <div class="mb-3">
                     <label class="form-label text-white h5 mt-5">Modelo:</label>
                     <input type="text" class="form-control" name="modelo" required placeholder="Digite o modelo do carro. Ex: S10 Executive">
                 </div>
                 <div class="mb-3">
                     <label class="form-label text-white h5 mt-2">Marca:</label>
                     <input type="text" class="form-control" name="marca" required  placeholder="Digite o marca do carro. Ex: Chevrolett">
                 </div>
                 <div class="mb-3">
                     <label class="form-label text-white h5 mt-2">Placa:</label>
                     <input type="text" class="form-control" name="placa" required  placeholder="Digite o placa do carro. Ex: ABC-1B34">
                 </div>
                 <div class="d-flex justify-content-center">
                     <button type="submit" class="btn btn-primary mb-5">
                         <img src="imagens/adicionar.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                         <h5>Cadastrar</h5>
                     </button>
                 </div>
             </form>
         </div>
     </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>