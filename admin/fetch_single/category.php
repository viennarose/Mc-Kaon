 <?php
require_once '../db/function.php';
$projects = new Projects();

if (isset($_POST['id'])) {
    try {
        $stmt = $projects->query("SELECT `id`, `Category`, `date` FROM `category` WHERE `id` = ? ");
        $stmt->execute([$_POST['id']]);
        $result = $stmt->fetch();

        echo json_encode($result);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>