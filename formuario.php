<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<br>
  <center><div class="card" style="width: 25rem;">
    <div class="badge badge-primary text-wrap" style="width: 25rem;" >
    <label class="font-italic"> REGISTRESE</label>
      </div>

      <div class="card-body">

        <form action='insertar.php' method='POST'>

          <label for="exampleInputEmail1">Ingrese su nombre </label>
      <input type="text" class="form-control" name="cnombre" aria-describedby="emailHelp">
  <br />

  <label for="exampleInputEmail1">Ingrese su correo</label>
      <input type="text" class="form-control" name="correo" aria-describedby="emailHelp">
  <br />

  <label for="exampleInputEmail1">Ingrese su clave</label>
      <input type="text" class="form-control" name="calave" aria-describedby="emailHelp">
  <br />
  <button type="submit" class="btn btn-outline-success" value='Insertar'>Registrar</button>

        </form>

        </div>
</div></center>

<?php


  $mysqli = new mysqli("localhost", "root", "", "BD");
  if ($mysqli->connect_errno) {
      echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

 

?>