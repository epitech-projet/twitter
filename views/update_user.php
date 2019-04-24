<?php include 'page_redirect.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/style.css"/>
    </head>
    <body>
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
                    <a class="nav-link" href="#">Messages</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" id="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 mr-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="nav-link btn btn-danger text-white" href="../deconnexion.php">Deconnexion</a>
        </div>
    </nav>
        <main class="container">
            <div class="ml-5 mt-4">
                <h1>Update profil</h1>
            </div>
            <div class="ml-5 mt-4">

                <a class="btn btn-success text-white" href="user_profile.php">Return</a>

            </div>


            <div class="border border-dark border-5 p-5 rounded m-5">
                <form method="$_files">
                    <label for="avatar">Avatar
                        <img class="img-circle" src="" alt="" style="width: 150px;">
                    </label>
                    <input type="file" name="avatar" value="$file">
                    <input type="submit" value="Validate" name="submit_avatar" class="btn btn-lg btn-info mt-3">
                </form>
            </div>

             <div class="border border-dark border-5 p-5 rounded m-5">
                <form method="post">
                    <h3>Disable account</h3>
                    <div class="form-group">
                        <div class="btn-group btn-group-toggle" >
                            <label class="btn btn-primary">
                                <input type="radio" name="disable_account" value="1" id="active" autocomplete="off"> Yes
                            </label>
                            <label class="btn btn-danger">
                                <input type="radio" name="disable_account" value="0" id="disable" autocomplete="off"> No
                            </label>
                        </div>
                        <br>
                        <input type="submit" value="Validate" name="submit_disable" class="btn btn-lg btn-info mt-3">
                    </div>
                </form>
            </div>

            <div class="border border-dark border-5 p-5 rounded m-5">
                <h3 class="mb-3">Update informations</h3>
                <form id="update-info" method="post">
                    <div class="form-group">
                        <label for="username_updt">Username (@)</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>

                    <div class="form-group">
                        <label for="display_name_updt">Display name</label>
                        <input type="text" class="form-control" name="display_name_updt" id="display_name_updt">
                    </div>

                    <div class="form-group">
                        <p>Private account</p>
                        <div class="btn-group btn-group-toggle" >
                            <label class="btn btn-primary">
                                <input type="radio" name="private_account" value="1" id="active" autocomplete="off"> Active
                            </label>
                            <label class="btn btn-danger">
                                <input type="radio" name="private_account" value="0" id="disable" autocomplete="off"> Disable
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email_updt">Email</label>
                        <input type="text" class="form-control" name="email_updt" id="email_updt">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="tel" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="bio">Biographie </label>
                        <input type="text" class="form-control" name="bio" id="bio">
                    </div>

                    <div class="form-group">
                        <label for="webside">Website</label>
                        <input type="url" class="form-control" name="website" id="website">
                    </div>

                    <div class="form-group">
                        <label for="localisation">Localisation </label>
                        <input type="text" class="form-control" name="localisation" id="localisation">
                    </div>


                    <input type="submit" value="Validate" name="submit_update_info" class="btn btn-lg btn-info">
                    </form>
                </div>

                <div class="border border-dark border-5 p-5 rounded m-5">
                    <form action="">
                        <h3 class="mb-3">Update password</h3>
                        <div class="form-group">
                            <label for="password_updt">Password</label>
                            <input type="password" class="form-control" name="password_updt" id="password_updt">
                        </div>
                        <div class="form-group">
                            <label for="confirm_pass_updt">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_pass_updt" id="confirm_pass_updt">
                        </div>   
                        <input type="submit" value="Validate" name="submit_update_pass" class="btn btn-lg btn-info" >
                    </form>
                </div>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../assets/scripts/update_info.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>