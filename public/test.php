<?php require_once '../vendor/autoload.php'; ?>
<?php echo 'Hello, '; ?>
<?php echo htmlspecialchars($_POST['name']); ?>
<?php echo nl2br("\n Your age is ");?>
<?php echo (int)$_POST['phone']; ?>
