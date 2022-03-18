
<html>
<head>
    <title>Liste des Administrateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
include dirname(__DIR__).'/../navbarEmployer.php';
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des repondants</h2>
        </div>
        <div class="card-body">
            <a href="addRepondant" class="btn btn-outline-secondary">Ajouter un repondant</a><br><br>
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nom du repondant</th>
                    <th>Prenom du repondant</th>
                    <th>Telephone</th>
                    <th>Couriier</th>
                    <th>Profession</th>
                    <th>Employer</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($params['repondant'] as $rep): ?>
                    <tr>
                        <td><?= $rep->idRepondant?></td>
                        <td><?= $rep->nomRepondant?></td>
                        <td><?= $rep->prenomRepondant?></td>
                        <td><?= $rep->telephone?></td>
                        <td><?= $rep->courier?></td>
                        <td><?= $rep->profession?></td>
                        <td><?= $rep->employer_id?></td>

                        <td>
                            <a href="edit.php?id=<?= $rep->idRepondant?>" class="btn btn-outline-warning">Modifier</a>
                            <a href="delete.php?id=<?= $rep->idRepondant?>" class="btn btn-outline-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</div>
</body>
</html>