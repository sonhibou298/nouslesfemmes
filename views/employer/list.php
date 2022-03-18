
<html>
<head>

    <title>Liste des Administrateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<!--NavBar-->
<?php
include dirname(__DIR__).'/../navbar.php';
?>
<!--EndNavBar-->
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des Employers</h2>
        </div>
<!--        <button type="button" class="btn btn-outline-secondary">Secondary</button>-->
        <div class="card-body">
            <a href="addEmployer" class="btn btn-outline-secondary">Ajouter un employer</a><br><br>
            <table id="myTable" class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Admin</th>

                    <th>Actions</th>
                </tr>
                <?php foreach ($params['employers'] as $employer): ?>
                    <tr>
                        <td><?= $employer->id?></td>
                        <td><?= $employer->nomEmployer?></td>
                        <td><?= $employer->prenomEmployer?></td>
                        <td><?= $employer->email?></td>
                        <td><?= $employer->admin_id?></td>

                        <td>
                            <a href="edit.php?id=<?= $employer->id?>" class="btn btn-outline-warning">Modifier</a>
                            <a onclick="return confirm('Voulez-vous supprimer cet employer')" href="employer/delete/<?= $employer->id?>" class="btn btn-outline-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</div>

</body>

</html>