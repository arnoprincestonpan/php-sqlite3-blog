<?php 
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content_type = $_POST['content_type'];
    $category = $_POST['category'];

    try {
        $db = new SQLite3('data.db');
        $stmt = $db->prepare('INSERT INTO posts (title, content, content_type, category) VALUES (:title, :content, :content_type, :category');
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
    } catch (Exception $e) {
        echo '<p>' . $e->getMessage() . '</p>';
    }
} 
exit;
?>