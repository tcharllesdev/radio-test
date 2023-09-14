<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Radio box test</title>
</head>
<body>
  <section class="container">
    <h1>Estamos quase lá...</h1>
    <p>Responda às perguntas e consiga uma condição especial</p>
    <a href="read.php">View Users</a>

    <form action="php/create.php" method="post" id="question-form">
      <div id="question1">
        <mark>
          <?php if (isset($_GET['ms'])){
            echo $_GET['ms'];
          } ?>
        </mark>
        <div>
          <label>Gênero</label>
          <input type="radio" name="gender" value="Masculino" checked>
          <label>Masculino</label>

          <input type="radio" name="gender" value="Feminino">
          <label>Feminino</label>
        </div><br>
        <!-- Adicione um botão para avançar para a próxima pergunta -->
        <button type="button" onclick="showQuestion(2)">Próximo</button>
      </div>

      <div id="question2" style="display: none;">
        <!-- Pergunta 2 -->
        <div>
          <label>Sua renda</label>
          <input type="radio" name="renda" value="R$500" checked>
          <label>R$500</label>

          <input type="radio" name="renda" value="R$1000">
          <label>R$1000</label>

          <input type="radio" name="renda" value="R$3000">
          <label>R$3000</label>
        </div><br>
        <!-- Adicione um botão para avançar para a próxima pergunta -->
        <button type="button" onclick="showQuestion(3)">Próximo</button>
      </div>

      <div id="question3" style="display: none;">
        <!-- Pergunta 3 -->
        <div>
          <label>Qual sua principal dor ligada a relacionamentos?</label>
          <input type="radio" name="dor" value="Dependencia">
          <label>Dependencia</label>

          <input type="radio" name="dor" value="Superar relacionamentos" checked>
          <label>Superar relacionamentos</label>

          <input type="radio" name="dor" value="Relacionamento abusivo">
          <label>Viver em um relacionamento abusivo</label>
        </div><br>
        <!-- Adicione um botão para avançar para a próxima pergunta -->
        <button type="button" onclick="showQuestion(4)">Próximo</button>
      </div>

      <div id="question4" style="display: none;">
        <!-- Pergunta 4 -->
        <div>
          <label>Você está pronto para mudar de vida?</label>
          <input type="radio" name="mudar" value="Sim">
          <label>Sim</label>

          <input type="radio" name="mudar" value="Não" checked>
          <label>Não, prefiro continuar sofrendo</label>
        </div><br>
        <!-- Adicione um botão para avançar para a próxima pergunta -->
        <button type="button" onclick="showQuestion(5)">Próximo</button>
      </div>

      <div id="question5" style="display: none;">
        <!-- Pergunta 5 -->
        <div>
          <label>Você faz terapia atualmente?</label>
          <input type="radio" name="terapia" value="Sim">
          <label>Sim</label>

          <input type="radio" name="terapia" value="Não" checked>
          <label>Não</label>
        </div><br>

        <!-- Botão para enviar o formulário -->
        <input type="hidden" name="timestamp" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <button type="submit" value="Create">Enviar</button>
      </div>
    </form>
    </div>
  </section>

  <script>
    function showQuestion(questionNumber) {
      // Esconder todas as perguntas
      for (let i = 1; i <= 5; i++) {
        document.getElementById('question' + i).style.display = 'none';
      }

      // Mostrar a próxima pergunta
      if (questionNumber <= 5) {
        document.getElementById('question' + questionNumber).style.display = 'block';
      }
    } 

  </script>
</body>
</html>
