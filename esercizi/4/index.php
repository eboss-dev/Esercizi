<?php
if(isset($_POST['submit'])){
  if(isset($_POST["name"], $_POST["surname"], $_POST["email"], 
    $_POST["city"])){
    /*invia dati al server */
    /* altri check potrebbero essere fatti con delle utility es. per mail */
    /* si potrebbe aggiungere anche un campo password e fare in modo che la 
    la complessità sia rispettata*/
  } else {
    /* messagio errore generico omissione campi */ 
  }
}
?>
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emanuele Boscari">
    <title>Form registrazione</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form name="formRegistrazione" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <img class="mb-4" src="logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Form</h1>
        <div class="bg-danger"><?php if(isset ($msg)) echo $msg;?></div>
        <div class="form-floating">
          <input type="text" class="form-control" name="cf" required>
          <label for="floatingInput">Codice Fiscale</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" name="name" required>
          <label for="floatingInput">Nome</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" name="surname" required>
          <label for="floatingInput">Cognome</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" name="email" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="city" required>
          <label for="floatingInput">Città</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrati</button>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>