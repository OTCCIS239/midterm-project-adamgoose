<?php

require_once('./includes/init.php');
require_once('./includes/db.php');

$statement = $conn->prepare('SELECT * FROM categories');
$statement->execute();

$results = $statement->fetchAll();
$statement->closeCursor();
?>

This is my super awesome Guitar Shop!

- All Orders
- Unshipped Orders
- Products

Shop my super awesome categories!

<?php foreach($results as $category): ?>
- <?= $category['categoryName'] ?>
<?php endforeach; ?>