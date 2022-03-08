
<html>
<head>
    <title>Ajouter un employer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter un administrateur</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="./Controller/EmployerController.php">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nomAdmin" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenomAdmin" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">email</label>
                    <input type="email" name="emailAdmin" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Mot de passe</label>
                    <input type="password" name="passwordAdmin" id="password" class="form-control">
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