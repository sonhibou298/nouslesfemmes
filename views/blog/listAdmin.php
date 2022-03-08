
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
<!--NavBar Admin-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="#">Navbar</a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" aria-current="page" href="--><?php //$root_path?><!--listAdmin">Home</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //$root_path?><!--listEmployer">Link</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Dropdown-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><hr class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled">Disabled</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="d-flex">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!--NavBar Admin-->
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des Adminstrateurs</h2>
        </div>
        <div class="card-body">
            <a href="http://localhost/PHP/NousLesFemmes/employer/create" class="btn btn-outline-secondary">Ajouter un administrateur</a><br><br>
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
                            <a href="edit.php?id=<?= $apprenants->id?>" class="btn btn-outline-warning">Modifier</a>
                            <a href="delete.php?id=<?= $apprenants->id?>" class="btn btn-outline-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</div>
</body>
</html>