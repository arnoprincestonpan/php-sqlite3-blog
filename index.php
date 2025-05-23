<?php 
$pageTitle = "Home";
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
                echo '<p class="card-text">Category: ' . htmlspecialchars($row['category']) . '</p>';
                echo '<p class="card-text">' . substr(htmlspecialchars($row['content']), 0, 200) . '...</p>';
                echo '<a href="#" class="btn btn-primary">Read More</a>';
                echo "<form action='move_to_trash.php' method='post' class='d-inline-block ml-2'>";
                echo '<input type="hidden" name="id" value="' . $row['id'] . '" />';
                echo "<button type='submit' class='btn btn-danger btn-sm'>Delete</button>";
                echo "</form>";
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