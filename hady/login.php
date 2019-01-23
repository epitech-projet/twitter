<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8" />
      <title>Connexion</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container">
         <main class="m-5">
            <section class="border border-dark border-5 p-5 rounded">
               <h2>Se connecter</h2><span><img src="img/twitte.png" alt="logo-twitte" sizes=" "></span>
               <div class="m-2">
                  <div class="mb-1">
                     <form action="#" method="post">
                        <div class="form-group">
                           <label for="Login">Email</label><br>
                           <input class="form-control" type="email" name="Login" id="Login" placeholder="exemple@tweet.com" required> 
                        </div>
                        <div class="form-group">
                           <label for="password">Mot de passe</label><br>
                           <input class="form-control" type="password" name="password" id="password" placeholder="Entrer votre mot de passe" required>     
                        </div>
                        <button type="submit" name="form_connect" class="btn btn-lg btn-info">se connecter</button>
                     </form>
                  </div>
               </div>
               <div class="mt-3">
                  <p>
                      Nouveau sur Twitter ? 
                      <a href="signup.php"> S'inscrire maintenant</a>
                  </p>
               </div>
            </section>
         </main>
      </div>
   </body>
</html>