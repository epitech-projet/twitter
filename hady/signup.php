<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen"  href="bootstrap.css" />
    </head>
    <body class="tweet-logo">
        <main class="container">

            <section class="mt-5">
                <h1>S'inscrire à tweet academy</h1>
                <form action="#" method="post">

                    <div class="form-group">
                        <label for="username">Username @</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                        
                    <div class="form-group">
                        <label for="display_name">Nom</label>
                        <input type="text" class="form-control" name="display_name" id="display_name">
                    </div>

                    <div class="form-group">
                        <label for="date_birth">Date de naissance</label>
                        <input type="date" class="form-control" name="date_birth" id="date_birth">
                    </div>
                    
                    <div class="form-group">
                        <label for="avatar_url">Avatar (optionel)</label>
                        <input type="url" class="form-control" name="avatar_url" id="avatar_url">
                    </div>

                    <div class="form-group">
                        <label for="banner">Banner (optionel)</label>
                        <input type="url" class="form-control" name="banner" id="banner">
                    </div>

                    <div class="form-group">
                        <label for="website">Site internet (optionel)</label>
                        <input type="url" class="form-control" name="website" id="website">
                    </div>

                    <div class="form-group">
                        <label for="email">Email (obligatoire)</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="pass">Mot de passe (obligatoire)</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>    
                </form>

            </section>
        </main>
    </body>
</html>