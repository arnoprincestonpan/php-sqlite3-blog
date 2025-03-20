<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class="navbar-brand" href="#">My Blog</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trash.php">Trash</a>
                </li>
            </ul>
        </div>
    </nav>
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
    <script src="/script.js"></script>
</body>
</html>