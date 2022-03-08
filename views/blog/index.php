<html>
<head>
    <link href="./public/codejs.css" rel="stylesheet">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
</head>

<body>
<?php $root_path =  \Router\Router::$ROOT_PATH;?>
<h2>Organisation Nous les femmes</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="<?php  $root_path?>login" method="post">
            <h1>Administrateur</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>Association Nous les femmes</span>
            <input type="email" placeholder="Email" name="emailAdmin"/>
            <input type="password" placeholder="Mot de passe" name="pwdAdmin" />
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">Email ou mot de passe incorrect</div>
            <?php endif ?>
            <button>S'Authentifier</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="loginEm" method="post">
            <h1>Se Connecter</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span></span>
            <input type="email" placeholder="Login" name="email" />
            <input type="password" placeholder="Mot de passe" name="password" />

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">Email ou mot de passe incorrect</div>
            <?php endif ?>

            <a href="#">Mot de passe oublié?</a>
            <button>Se Connecter</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Espace Empoyé</h1>
                <p>Page de connection dédiée aux employers</p>
                <button class="ghost" id="signIn">Se Connecter</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Espace Admin</h1>
                <p>Espace dédiée aux administrateurs</p>
                <button class="ghost" id="signUp">S'Authentifier</button>
            </div>
        </div>
    </div>
</div>


<script src="./public/style.js"></script>
</body>

</html>