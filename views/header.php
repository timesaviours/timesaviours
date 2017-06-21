
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TimeSaviours</title>
    <link rel="stylesheet" href="views/ts.css">
    <link rel="stylesheet" href="views/bootstrap.css">
  </head>
  <body>
    <div class="header">
      <header class="container">
        <div class="row">
          <div class="col-lg-6">
            <nav>
              <ul>
                <li>Jeu</li>
                <li>Boutique</li>
                <li>Communauté </li>
              </ul>
            </nav>
          </div>
          <nav>
          <div class="col-lg-6">
            <form class="form-horizontal" action="index.html" method="post">
              <div class="form-group">
                <label for="id" class="col-lg-2 control-label">Identifiant</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="id" placeholder="Identifiant">
                </div>
               </div>
               <div class="form-group">
                 <label for="login" class="col-lg-2 control-label">Login</label>
                 <div class="col-lg-10">
                   <input type="password" class="form-control" id="co_password" placeholder="Mot de passe">
                 </div>
                </div>
                <div id="head_button" class="col-lg-10">
                  <button class="btn btn-default" type="submit" name="button">Connexion</button>
                  <a class="btn btn-default" href="index2.php?c=page&a=inscription">inscription</a>
                </div>
              </form>
            </nav>

          </div>
        </div>
      </header>
      </div>
