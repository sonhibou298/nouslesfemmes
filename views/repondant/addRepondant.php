<?php
include dirname(__DIR__).'/../navbarEmployer.php';
?>
<html>
<head>
    <title>Ajouter un repondant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter un repondant</h2>
        </div>
        <div class="card-body">
            <a href="addAdmin" class="btn btn-outline-secondary">Ajouter un repondant</a><br><br>
            <form method="POST" action="employer/create">
                <div class="form-group">
                    <label for="nom">Nom Repondant</label>
                    <input type="text" name="nomRepondant" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom Repondant</label>
                    <input type="text" name="prenomRepondant" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Telephone</label>
                    <input type="number" name="telephone" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Courier</label>
                    <input type="email" name="courier" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Profession</label>
                    <input type="email" name="email" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Employer_id</label>
                    <input type="number" name="employer" id="password" class="form-control">
                </div>
                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>