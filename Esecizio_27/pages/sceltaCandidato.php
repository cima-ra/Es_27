<!DOCTYPE html>
<html>

<head>
  <title>Scelta Lista</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/style.css">

  <?php

  //Così poso usare il DB sensa implementarlo qui
  include "db.php";

  ?>

</head>

<body>

  <br>

  <div class="alert alert-primary" role="alert">
    <h2>Selezione del Candidato</h2>
  </div>

  <?php

    $query = "SELECT * FROM candidati WHERE candidati.id_lista = $_POST[list]";

    $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

  ?>


  <div class="card text-center">
    <div class="card-header">
      <h4 class="card-title">La seconda fase del voto prevede la selezione del candidato.</h4>
    </div>
    <div class="card-body">
      <h5 class="card-title">Scelga il candidato a cui assegnare il Suo voto dal'elenco a comparsa qui sotto</h5>
      <p class="card-text">
        appena selezionato il candidato, le verrà proposta la conferma definitiva del voto.
      </p>
    </div>
    <div class="card-footer text-muted">

      <form action="" method="POST">
        <br>
        <select id="list" name="list" class="form-select" aria-label="Default select example">
          <option selected>Seleziona candidato</option>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='$row[id_candidato]'>", "$row[nome]", " ", "$row[cognome]", "</option>";
          }
          ?>
        </select>

        <br>
        <input class="btn btn-primary" type="submit" value="Invia">
        <br>
      </form>
    </div>
  </div>


</body>

</html>