<!doctype html>
<html lang="en">
<?php
$title = 'Home';
include ROOT . '/views/layouts/head.php'
?>
<body>
<?php include ROOT . '/views/layouts/header.php' ?>

<div>home</div>

<?php
if ($_POST['done']) {
  echo "nm: {$_POST['nm']}\nid_nm: {$_POST['id_nm']}\n";
} else {
  echo 'nichivo nety<br>';
}
?>

<?php include ROOT . '/views/layouts/footer.php' ?>
</body>
</html>