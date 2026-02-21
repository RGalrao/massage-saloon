<?php

require_once "../bootstrap.php";

$form = !empty($_POST["username"]) && !empty($_POST["password"]);
if($form){
  $username = $_POST["username"];
  $password = $_POST["password"];
  login($username, $password);
}

?>

  <main class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="form-container">
          <div class="form-box" id="login-form">
            <h2><b>Backoffice</b></h2>
            <form action="" method="post">
              <input type="text" id="username" name="username" placeholder="Username" required autocomplete="off">
              <br><br>
              <input type="password" id="password" name="password" placeholder="Password" required autocomplete="off">
              <br><br>
              <button type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
