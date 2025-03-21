<?php 
$pageTitle = "My Simple Blog : Home";
include "header.php"; 
?>
    <div class="container mt-4">
        <h1>Blog Posts</h1>
        <?php
        try{
            $db = new SQLite3('data.db');
            $results = $db->query('SELECT * FROM posts WHERE is_deleted = 0 ORDER BY created_at DESC');

            while ($row = $results->fetchArray(SQLITE3_ASSOC)){
                echo '<div class="card mb-3">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($row['category']) . '</p>';
                echo '<p class="card-text">' . substr(htmlspecialchars($row['content']), 0, 200) .'</p>';
                echo '<a href="#" class="btn btn-primary">Read More</a>';
                echo '</div>';
                echo '</div>';
            }
            $db->close();
        } catch (Exception $e) {
            echo '<p>Error: ' . $e->getMessage() . '</p>';
        }
        ?>
    </div>
<?php include "footer.php"; ?>