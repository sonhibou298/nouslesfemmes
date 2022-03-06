
<html>
<head>
    <link href="./public/codejs.css" rel="stylesheet">
</head>

<body>
<h2>Organisation Nous les femmes</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="/listAdmin">
            <h1>Administrateur</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>Association Nous les femmes</span>
            <input type="email" placeholder="Email" name="emailAdmin"/>
            <input type="password" placeholder="Mot de passe" name="pwdAdmin" />
            <button>S'Authentifier</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="?page=addAdmin" method="post">
            <h1>Se Connecter</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span></span>
            <input type="email" placeholder="Login" />
            <input type="password" placeholder="Mot de passe" />
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

<footer>
    <p>
        Created with <i class="fa fa-heart"></i> by
        <a target="_blank" href="https://florin-pop.com">Neezy Craft</a> - Read how I created this and how you can join the challenge
        <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
    </p>
</footer>
<script src="./public/style.js"></script>
</body>

</html>