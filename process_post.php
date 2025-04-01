<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Using single quotes for consistency
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content_type = $_POST['content_type'];
    $category = $_POST['category'];

    try {
        $db = new SQLite3('data.db');
        $stmt = $db->prepare('INSERT INTO posts (title, content, content_type, category) VALUES (:title, :content, :content_type, :category)');
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':content', $content, SQLITE3_TEXT);
        $stmt->bindValue(':content_type', $content_type, SQLITE3_TEXT);
        $stmt->bindValue(':category', $category, SQLITE3_TEXT);
        $stmt->execute();
        $db->close();
        header('Location: index.php');
        exit; // Ensure exit after redirect
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>"; // improved error message.
    }
}
exit; //Ensure exit even if the request method is not post.
?>