 <?php

require_once '../db/function.php';
$projects = new Projects();

if (isset($_POST['id'])) {
    try {
  $stmt = $projects->query("SELECT  orders.id, orders.Menu_QTY, orders.Menu_id, orders.size,category.Category,menu.name FROM `orders` inner join menu on orders.Menu_id = menu.id inner join category on menu.category = category.id  WHERE orders.id = ? ");
        $stmt->execute([$_POST['id']]);
        $result = $stmt->fetch();

        echo json_encode($result);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>