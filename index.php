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
    <form action="php/create.php" method="post">
      <div>
        <div>
          <label> Gênero</label>
          <input type="radio" name="gender" value="Masculino" checked >
          <label>Masculino</Label>

          <input type="radio" name="gender" value="Feminino">
          <label>Feminino</Label>
        </div><br>

        <div>
          <label> Sua renda</label>
          <input type="radio" name="renda" value="R$500" checked>
          <label>R$500</Label>

          <input type="radio" name="renda" value="R$1000">
          <label>R$1000</Label>

          <input type="radio" name="renda" value="R$3000">
          <label>R$3000</Label>
        </div><br>

        <div>
          <label> Qual sua principal dor ligada a relacionamentos?</label>
          <input type="radio" name="dor" value="Dependencia" >
          <label>Dependencia</Label>

          <input type="radio" name="dor" value="Superar relacionamentos" checked>
          <label>Superar relacionamentos</Label>
          
          <input type="radio" name="dor" value="Relacionamento abusivo">
          <label>Viver em um relacionamento abusivo</Label>
        </div><br>

        <div>
          <label> Você está pronto para mudar de vida?</label>
          <input type="radio" name="mudar" value="Sim" >
          <label>Sim</Label>

          <input type="radio" name="mudar" value="Não" checked>
          <label>Não, prefiro continuar sofrendo</Label>
        </div><br>

        <div>
          <label> Você faz terapia atualmente?</label>
          <input type="radio" name="terapia" value="Sim" checked >
          <label>Sim</Label>

          <input type="radio" name="terapia" value="Não">
          <label>Não</Label>
        </div><br>

        <input type="hidden" name="timestamp" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="submit" value="Create">
        <a href="read.php">View Users</a>
        
        <br><br><mark>
            <?php if (isset($_GET['ms'])){
              echo $_GET['ms'];
            } ?>
        </mark>
      </div>
    </form>
  </section>
  
</body>
</html>
