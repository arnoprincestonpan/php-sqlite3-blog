<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $db = new SQLite3('data.db');
        $stmt = $db->prepare('UPDATE posts SET is_deleted = 1 WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->execute();
        $db->close();
    } catch (Exception $e){
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
header('Location: index.php');
exit;
?>