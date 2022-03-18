
<html>
<head>
    <title>Liste des Administrateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
include dirname(__DIR__).'/../navbar.php';
$root_path =  \Router\Router::$ROOT_PATH;
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des Adminstrateurs</h2>
        </div>
        <div class="card-body">
            <a href="addAdmin" class="btn btn-outline-secondary">Ajouter un administrateur</a><br><br>
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>

                    <th>Actions</th>
                </tr>
                <?php foreach ($params['admins'] as $admin): ?>
                    <tr>
                        <td><?= $admin->idAdmin?></td>
                        <td><?= $admin->nomAdmin?></td>
                        <td><?= $admin->prenomAdmin?></td>
                        <td><?= $admin->emailAdmin?></td>

                        <td>
                            <a href="edit.php?id=<?= $admin->id?>" class="btn btn-outline-warning">Modifier</a>
                            <a onclick=" return confirm('Voulez-vous supprimer cet administrateur')" href="admin/delete/<?=$admin->idAdmin?>" class="btn btn-outline-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</div>
</body>
</html>