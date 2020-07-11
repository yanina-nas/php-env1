<?php require_once '../vendor/autoload.php';?>
<form action="test.php" method="post">
 <p>Name: <input type="text" name="name" /></p>
 <p>Phone number: <input type="text" name="phone" /></p>
 <p><input type="submit" /></p>
</form>
<?php $app = new \Slim\App();
$app->get('/test1', function ($request, $response, $args) {echo '1';});
$app->get('/test2', function ($request, $response, $args) {echo '2';});
$app->any('/books/[{id}]', function ($request, $response, $args) {
});
$app->run();
