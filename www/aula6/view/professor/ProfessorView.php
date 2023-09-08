<?php $professores = $_REQUEST['professores']; ?>
<!-- Estilizar tabela em bootstrap style, -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Meu Site</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
              </li>      
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  <div class="container mx-auto d-flex row justify-content-center align-items">
    <img class="w-50" src="/aula4/img/img_girl.png" alt="Imagem em dimensões três por quatro de menina bebê com flores no cabelo, a imagem está localizada ne parte superior da página, além de estar centralizada horizontalmente. A menina está com uma feição serena, seus olhos estão fechados e seu rosto aponta para baixo em perspectiva de perfil. A atmosfera que circunda o rosto da menina é feita de cores frias com uma luz dourada acima de sua cabeça e outra diretamente em seu rosto.">
    <hr class="border-0">
    <h1 class="text-center bg-white rounded p-2">Tabela de Professores</h2>
    <hr class="d-none">
    <br>
    <a href="/aula4/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar</a>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($professores as $key => $professorAtual) { ?>
          <tr>
            <td><?php echo $professorAtual["nome"]; ?></td>
            <td><?php echo $professorAtual["idade"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>