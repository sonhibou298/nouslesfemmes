
<html>
<head>
    <title>Ajouter un employer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter un employer</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="employer/create">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nomEmployer" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenomEmployer" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Administrateur</label>
                    <input type="number" name="admin_id" id="password" class="form-control">
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