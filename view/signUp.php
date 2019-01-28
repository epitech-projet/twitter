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
                <h1>S'inscrire à Tweet Academy</h1>

                <div id="rien"><p></p></div>

                <form method="post">
                    <div class="form-group">
                        <label for="username">Username @ *</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                        
                    <div class="form-group">
                        <label for="display_name">Nom * </label>
                        <input type="text" class="form-control" name="display_name" id="display_name">
                    </div>

                    <div class="form-group">
                        <label for="date_birth">Date de naissance *</label>
                        <input type="date" class="form-control" name="date_birth" id="date_birth">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>

                     <div class="form-group">
                        <label for="pass">Mot de passe *</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>   

                     <div class="form-group">
                        <label for="confirm_pass">Confirmation du mot de passe *</label>
                        <input type="password" class="form-control" name="confirm_pass" id="confirm_pass">
                    </div>   
                    <input type="submit" value="Valider" name="submit_register" class="btn btn-lg btn-info" > 
                </form>
            </section>
        </main>
    </body>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../js/signup.js"></script>
</html>