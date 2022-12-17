<?php
if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ("admin@orange-expert.fr" === $email  &&  "rf.trepxe-egnaro@nimda" === $password) {
    header("Location: /web/serverlog/log-ad9cf733-7c82-40d6-93f0-eb903b412541.php?files=access.log");
  } else {
    header("Location: /login.php");
  }
  exit();
}
?>

<?php include "header.php" ?>
<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .2;'>
  <h1 class="text-center mt-3" style="color:#DCDCDC">LOG SERVER</h1>
  <img class="rounded mx-auto d-block" src="images/OES.png" alt="login image" width="53%" height="53%">
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="email" class="form-label">Email ID</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" required>
      <small style="color:#DCDCDC">Your email is safe with us.</small>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      <small style="color:#DCDCDC">Do not share your password.</small>
    </div>
    <div class="mb-3">
      <input type="submit" name="signin" value="Sign In" class="btn btn-secondary">
    </div>
  </form>
</div>

<?php include "footer.php" ?>
