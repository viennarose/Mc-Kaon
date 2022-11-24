 <?php
require_once '../db/function.php';
$projects = new Projects();

if (isset($_POST['id'])) {
    try {
        $stmt = $projects->query("SELECT `id`, `name`, `qty`, `price`, `description`, `category`, `photo`, `expenses` FROM `menu` WHERE `id` = ? ");
        $stmt->execute([$_POST['id']]);
        $result = $stmt->fetch();

        echo json_encode($result);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>