<?php require_once '../start.php';
 include 'page_redirect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <title>My_Twitter</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Twitter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="user_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Messages</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mb-2" id="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class=" nav-link btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="nav-link btn btn-danger text-white" href="../deconnexion.php">Deconnexion</a>
        </div>
    </nav>
</header>
<main class="container">
    <div class="row">
    <div class="col-xl-4 mt-4">
            <!-- Box User 1 -->
            <div id="tweet_box">
                <div class="card bg-light border-secondary mb-2" style="max-width: 35rem;">
                    <div class="card-header">
                    <img class="rounded mr-3" width=50px height="50px" src="<?= $_SESSION['avatar']?>" alt="avatar" style="float:left;">
                    <a class="nav-link btn btn btn-outline-success ml-2" href="#" style="float: right;">Follow</a>
                    <a href="" class="text-secondary"><h5 class="card-title"><?= $_SESSION['display_name']?></h5></a>
                    <h6 class="card-subtitle mb-2 text-muted">@<?= $_SESSION['username']?></h6>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 mt-4">
             <!-- Box User 2 -->
             <div id="tweet_box">
                <div class="card bg-light border-secondary mb-2" style="max-width: 35rem;">
                    <div class="card-header">
                    <img class="rounded mr-3" width=50px height="50px" src="<?= $_SESSION['avatar']?>" alt="avatar" style="float:left;">
                    <a class="nav-link btn btn btn-outline-success ml-2" href="#" style="float: right;">Follow</a>
                    <a href="" class="text-secondary"><h5 class="card-title"><?= $_SESSION['display_name']?></h5></a>
                    <h6 class="card-subtitle mb-2 text-muted">@<?= $_SESSION['username']?></h6>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-xl-4 mt-4">
             <!-- Box User 3 -->
             <div id="tweet_box">
                <div class="card bg-light border-secondary mb-2" style="max-width: 35rem;">
                    <div class="card-header">
                    <img class="rounded mr-3" width=50px height="50px" src="<?= $_SESSION['avatar']?>" alt="avatar" style="float:left;">
                    <a class="nav-link btn btn btn-outline-success ml-2" href="#" style="float: right;">Follow</a>
                    <a href="" class="text-secondary"><h5 class="card-title"><?= $_SESSION['display_name']?></h5></a>
                    <h6 class="card-subtitle mb-2 text-muted">@<?= $_SESSION['username']?></h6>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
