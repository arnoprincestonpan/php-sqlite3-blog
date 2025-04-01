<?php 
<<<<<<< HEAD
if($_SERVER['REQUEST_METHOD'] === "POST"){
=======
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
>>>>>>> e851c16a18d66bc7ba0630b654a5f30b5e08d901
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content_type = $_POST['content_type'];
    $category = $_POST['category'];

    try {
        $db = new SQLite3('data.db');
<<<<<<< HEAD
        $stmt = $db->prepare('INSERT INTO posts (title, content, content_type, category) VALUES (:title, :content, :content_type, :category');
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
    } catch (Exception $e) {
        echo '<p>' . $e->getMessage() . '</p>';
    }
} 
exit;
=======
        $stmt = $db->prepare('INSERT INTO posts (title, content, content_type, category) VALUES (:title, :content, :content_type, :category)');
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':content', $content, SQLITE3_TEXT);
        $stmt->bindValue(':content_type', $content_type, SQLITE3_TEXT);
        $stmt->bindValue(':category', $category, SQLITE3_TEXT);
        $stmt->execute();
        $db->close();
        header('Location: index.php');
        exit;
    } catch (Exception $e){
        echo "<p>/Error: " . $e->getMessage() . "</p>";
    }
}
>>>>>>> e851c16a18d66bc7ba0630b654a5f30b5e08d901
?>