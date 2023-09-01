<?php $estudantes = $_REQUEST['estudantes']; ?>
<!-- Estilizar tabela em bootstrap style, -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
  <div class="container mx-auto d-flex row justify-content-center align-items">
    <img class="w-50" src="/aula4/img/img_girl.png" alt="Imagem em dimensões três por quatro de menina bebê com flores no cabelo, a imagem está localizada ne parte superior da página, além de estar centralizada horizontalmente. A menina está com uma feição serena, seus olhos estão fechados e seu rosto aponta para baixo em perspectiva de perfil. A atmosfera que circunda o rosto da menina é feita de cores frias com uma luz dourada acima de sua cabeça e outra diretamente em seu rosto.">
    <hr class="border-0">
    <h1 class="text-center bg-white rounded p-2">Tabela de estudantes</h2>
    <hr class="d-none">
    <br>
    <a href="/aula4/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar</a>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($estudantes as $key => $estudanteAtual) { ?>
          <tr>
            <td><?php echo $estudanteAtual["nome"]; ?></td>
            <td><?php echo $estudanteAtual["idade"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>