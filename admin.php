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
      $sql = "SELECT id, name, email, img, admin, as_portfolio FROM users";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $users = $pre->fetchAll(PDO::FETCH_ASSOC);

      foreach( $users as $user) {
        
        ?><div class="row">
            <div class= "col s2">
            <p><?= isset($user['name'])?$user['name']:'' ?></p>
            </div>
            <div class= "col s2">
            <p><?= isset($user['email'])?$user['email']:'' ?></p>
            </div>
            <div class= "col s2">
            <p><?= isset($user['img'])?$user['img']:'' ?></p>
            </div>
            <div class= "col s2">
            <p><?= isset($user['admin'])?$user['admin']:'' ?></p>
            </div>
            <div class= "col s2">
            <p><?= isset($user['as_portfolio'])?$user['as_portfolio']:'' ?></p>
            </div>
            <div class= "col s2">
              <p><?= isset($user['description'])?$user['description']:'' ?></p>
            </div>
        </div><?php
      }


      break;

    case 'skills':
      
      break;
    
    default:
      
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