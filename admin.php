<?php
include 'include.php';
require_once "action/config.php";
require "admin/security.php";
headerPage(); 

if (!isset($_GET['admin'])) {
  $get = 'projects';
} else {
  $get = $_GET['admin'];
}
?>

<div class="btn-admin">
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=projects">Projects</a>
  </button>
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=users">Users</a>
  </button>
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=skills">Skills</a>
  </button>
</div>

<div class="container">
  <?php
  switch ($get) {
    case 'users':
      $sql = "SELECT id, name, email, img, admin, as_portfolio, description FROM users";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $users = $pre->fetchAll(PDO::FETCH_ASSOC);

      foreach( $users as $user) {
        
        ?>
          <div class="row">
            <form method="post" action="admin/change_user.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $user['id'] ?>">
              <div class= "input-field col s3">
                <input id="name<?= $user['id'] ?>" type="text" name="name" value="<?= isset($user['name'])?$user['name']:'' ?>"></input>
                <label for="name<?= $user['id'] ?>">NOM Prénom</label>
              </div>
              <div class= "input-field col s3">
                <input id="email<?= $user['id'] ?>" type="email" name="email" value="<?= isset($user['email'])?$user['email']:'' ?>"></input>
                <label for="email<?= $user['id'] ?>">Mail</label>
              </div>
              <select id="admin" name="admin">
                <option value="0">Non</option>
                <option value="1">Oui</option>
              </select>
              <!-- <div class= "input-field col s1">
                <input id="admin<?= $user['id'] ?>" type="text" name="admin" value="<?= isset($user['admin'])?$user['admin']:'' ?>"></input>
                <label for="admin<?= $user['id'] ?>">Admin ?</label>
              </div> -->
              <div class= "input-field col s1">
                <input id="as_portfolio<?= $user['id'] ?>" type="text" name="as_portfolio" value="<?= isset($user['as_portfolio'])?$user['as_portfolio']:'' ?>"></input>
                <label for="as_portfolio<?= $user['id'] ?>">Porfolio ?</label>
              </div>
              <div class= "input-field col s3">
                <input id="img<?= $user['id'] ?>" type="file" name="img" value="<?= isset($user['img'])?$user['img']:'' ?>"></input>
              </div>
              <div class= "input-field col s1">
                <img class="adminImg" src="<?= isset($user['img'])?$user['img']:'' ?>">
              </div>
              <div class= "input-field col s12">
                <textarea id="description<?= $user['id'] ?>" class="materialize-textarea" name="description"><?= isset($user['description'])?$user['description']:'' ?></textarea>
                <label for="description<?= $user['id'] ?>">Description</label>
              </div>
              <button class="btn waves-effect waves-light linkedin col">
                <input type="submit" value="Sauvegarder">
                <i class="material-icons right">save</i>
              </button>
            </form>
            <form method="post" action="admin/delete_user.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $user['id'] ?>">
              <button class="btn waves-effect waves-light linkedin col delete-admin">
                <input type="submit" value="Delete">
                <i class="material-icons right">delete</i>
              </button>
            </form>
          </div>
        <?php
      }


      break;

    case 'skills':
      
      break;
    
    default:
    $sql = "SELECT id, name, email, img, admin, as_portfolio, description FROM users";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $users = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach( $users as $user) {
      
      ?>
        <div class="row">
          <form method="post" action="admin/change_user.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <div class= "input-field col s3">
              <input id="name<?= $user['id'] ?>" type="text" name="name" value="<?= isset($user['name'])?$user['name']:'' ?>"></input>
              <label for="name<?= $user['id'] ?>">NOM Prénom</label>
            </div>
            <div class= "input-field col s3">
              <input id="email<?= $user['id'] ?>" type="email" name="email" value="<?= isset($user['email'])?$user['email']:'' ?>"></input>
              <label for="email<?= $user['id'] ?>">Mail</label>
            </div>
            <div class= "input-field col s1">
              <input id="admin<?= $user['id'] ?>" type="text" name="admin" value="<?= isset($user['admin'])?$user['admin']:'' ?>"></input>
              <label for="admin<?= $user['id'] ?>">Admin ?</label>
            </div>
            <div class= "input-field col s1">
              <input id="as_portfolio<?= $user['id'] ?>" type="text" name="as_portfolio" value="<?= isset($user['as_portfolio'])?$user['as_portfolio']:'' ?>"></input>
              <label for="as_portfolio<?= $user['id'] ?>">Porfolio ?</label>
            </div>
            <div class= "input-field col s3">
              <input id="img<?= $user['id'] ?>" type="file" name="img" value="<?= isset($user['img'])?$user['img']:'' ?>"></input>
            </div>
            <div class= "input-field col s1">
              <img class="adminImg" src="<?= isset($user['img'])?$user['img']:'' ?>">
            </div>
            <div class= "input-field col s12">
              <textarea id="description<?= $user['id'] ?>" class="materialize-textarea" name="description"><?= isset($user['description'])?$user['description']:'' ?></textarea>
              <label for="description<?= $user['id'] ?>">Description</label>
            </div>
            <button class="btn waves-effect waves-light linkedin col">
              <input type="submit" value="Sauvegarder">
              <i class="material-icons right">save</i>
            </button>
          </form>
          <form method="post" action="admin/delete_user.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <button class="btn waves-effect waves-light linkedin col delete-admin">
              <input type="submit" value="Delete">
              <i class="material-icons right">delete</i>
            </button>
          </form>
        </div>
      <?php
    }
      
      break;
  }
  ?>
</div>

<!-- 
Delete user
<div class="container">
    <div class="modal color perso-2 border-radius" id="login">
      <form action="admin/delete.php" method="post">
        <div class="modal-close color perso-2 center" id="suprise">
          <button class="btn waves-effect waves-light">
            <span>Supprimer</span>
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
  </div> -->


<?php
footerPage();
?>