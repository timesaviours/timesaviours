<?php
  include('views/header.page.php');
var_dump($user);
 ?>

    <main>
      <?php
            foreach ($data_user as $key => $value) {


      ?>
      <div class="col-md-12" id="user_head">
        <h2 class="col-md-6">Vos informations</h2>
        <section class="col-md-6">
          <p><?php echo $value['login'] ?> Vous êtes connecté </p>
        </section>
      </div>

      <form class="form-horizontal" action="">

        <div class="form-group">
          <label for="name" class="col-md-2 control-label">Nom</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="data_name" value="<?php echo $value["name"] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="firstname" class="col-md-2 control-label">Prenom</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="data_firstname" ="" value="<?php echo $value["prenom"] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="login" class="col-md-2 control-label">Login</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="data_login" value="<?php echo $value["login"] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="Email" class="col-md-2 control-label">Email</label>
          <div class="col-md-8">
            <input type="email" class="form-control" id="data_mail" ="" value="<?php echo $value["mail"] ?>">
          </div>
        </div>


        <?php
          }
        ?>
</form>





    </main>
  </body>
</html>
