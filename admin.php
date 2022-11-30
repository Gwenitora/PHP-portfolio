<?php
include 'include.php';
require_once "action/config.php";
require "admin/security.php";
headerPage(); 

if (!isset($_GET['admin'])) {
  $get = 'project';
} else {
  $get = $_GET['admin'];
}
?>

<div class="btn-admin">
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=project">Project</a>
  </button>
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=users">User</a>
  </button>
  <button class="btn waves-effect waves-light">
    <a class="white-text" href="?admin=skills">User</a>
  </button>
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