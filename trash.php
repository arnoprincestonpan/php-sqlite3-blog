<?php 
$pageTitle = "Trash";
include "header.php";
?>
    <div class="container mt-4">
        <h1>Trash</h1>
        <?php 
            try{
                $db = new SQLite3('data.db');
                $results = $db->query('SELECT * FROM posts WHERE is_deleted = 1 ORDER BY created_at DESC');
                while($row = $results->fetchArray(SQLITE3_ASSOC)){
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($row["category"]) . '</p>';
                    echo '<p class="card-text">' . substr(htmlspecialchars($row["content"]), 0, 200).'...</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } catch (Exception $e){
                echo '<p>' . $e->getMessage() . '</p>';
            }
            exit;
        ?>
    </div>
<?php include "footer.php"; ?>