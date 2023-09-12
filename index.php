<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio box test</title>
</head>
<body>
  <h1>Teste radio buttons</h1>
  
  <form action="php/create.php" method="post">
    <fieldset>
      <legend>Create</legend><br>
      <mark>
          <?php if (isset($_GET['ms'])){
            echo $_GET['ms'];
          } ?>
      </mark>
      <div>
        <label> Name</label>
        <input type="text" name="name">
      </div><br>

      <div>
        <label> Gender</label>
        <input type="radio" name="gender" value="Male" checked >
        <label>Male</Label>

        <input type="radio" name="gender" value="Female">
        <label>Female</Label>
      </div><br>

      <div>
        <input type="checkbox" name="programmer">
        <label>Are you a programmer?</label>
      </div><br>
      <input type="submit" value="Create">
      <a href="read.php">View Users</a>

    </fieldset>
  </form>
  
</body>
</html>