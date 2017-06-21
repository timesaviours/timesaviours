<?php
  include('views/header.page.php');
 ?>
    <main>
      <h1 id="title1">Inscription</h1>

      <form class="form-horizontal" action="index.html" method="post">
        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">Nom</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="name" placeholder="Nom">
          </div>
         </div>

        <div class="form-group">
          <label for="firstname" class="col-lg-2 control-label">Prenom</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="firstname" placeholder="Prenom">
          </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Mail</label>
        <div class="col-lg-8">
          <input type="email" class="form-control" id="email" placeholder="Prenom">
        </div>
    </div>

    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Mot de passe </label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
      </div>
    </div>

    <div class="form-group">
      <label for="presentation" class="col-lg-2 control-label">Presentation</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="3" placeholder="présentation"></textarea>
      </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1"> Recevoir notre news letter
        </label>

        </div>
      </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">s'inscrire</button>
    </div>
  </div>

      </form>
    </main>
  </body>
</html>
