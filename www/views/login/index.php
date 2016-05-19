<!doctype html>
<html lang="en">
<?php
$title = 'Login';
include ROOT . '/views/layouts/head.php'
?>
<body>
<?php include ROOT . '/views/layouts/header.php' ?>

<div>login page</div>
<form action="login" method="post">
  <input type="text" name="nm", id="id_nm">
  <input type="submit" name="done" id="id_done" value="send">
</form>

<?php include ROOT . '/views/layouts/footer.php' ?>
</body>
</html>