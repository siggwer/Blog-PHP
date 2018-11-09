<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../public//css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.ico"/>

    <!-- Custom fonts for this template -->
    <link href="../public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../public/css/clean-blog.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href=""><img src="../public/img/jerome_id_gris2_60x51.png" class="logo img-circle responsive photnav" alt="">Jérôme Sauvage</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('../public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Blog</h1>
                    <span class="subheading">Passionné d'informatique et plus particulièrement par le développement web, je souhaite intégrer un service informatique à fort potentiel afin de répondre techniquement aux besoins.</span>
                    <br />
                    <a href="https://www.jeromesauvage.fr" class="btn btn-secondary" target="_blank">Visiter mon portfolio</a>
                    <a href="https://www.jeromesauvage.fr/other/cv_jerome_sauvage.pdf" class="btn btn-secondary" target="_blank">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<?= $content ?>

<!-- Pager -->
<div class="col-lg-8 col-md-10 mx-auto clearfix">
    <a class="btn btn-primary float-right" href="/addArticle">Ajouter un article</a>
</div>
<br />

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Blog 2018 | <a href="/administration">Administration</a></p>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../public/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="../public/js/clean-blog.min.js"></script>

</body>

</html>