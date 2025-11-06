<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <title>Test formulaire PDO</title>
</head>

<body class="bg-dark">
<header>
    <div class="container">
        <h1 class="text-light">Test formulaire PDO</h1>
    </div>
</header>
<main>
    <form action="traitement.php"  method="post">
        <div class="form-group">
            <label for="nom" class="form-label text-light">Ton nom : </label>
            <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label text-light">Email address</label>
            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label text-light">Ton sujet : </label>
            <input type="text" class="form-control" id="sujet" name="sujet" aria-describedby="nomHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label text-light">Ton texte : </label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
<footer>
    <div class="container-fluid">
        <div class="row text-center text-bg-dark">
            <div class="col">Créé par Xavier en 2025</div>
        </div>
    </div>
</footer>
</body>

</html>

<?php
