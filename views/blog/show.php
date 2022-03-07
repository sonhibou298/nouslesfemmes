<html>
<head>
    <title>Liste des Administrateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des Adminstrateurs</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>

                    <th>Actions</th>
                </tr>
                    <tr>
                        <td><?= $params['admin']->idAdmin ?></td>
                        <td><?=  $params['admin']->nomAdmin?> </td>
                        <td><?=  $params['admin']->prenomAdmin?> </td>
                        <td><?=$params['admin']->emailAdmin?></td>

                        <td>
                            <a href="edit.php?id=<?= $apprenants->id?>" class="btn btn-primary">Modifier</a>
                            <a href="delete.php?id=<?= $apprenants->id?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>