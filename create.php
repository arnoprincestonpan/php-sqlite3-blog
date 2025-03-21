<?php 
$pageTitle = "Create Post";
include "header.php"; 
?>
    <div class="container mt-4">
        <h1>Create Post</h1>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required/>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" required/>
            </div>
            <div class="form-group">
                <label for="content_type">Content Type</label>
                <select class="form-control" id="content_type" name="content_type">
                    <option value="rich">Rich Text</option>
                    <option value="markdown">Markdown</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
            </div>
            <button>Submit</button>
        </form>
    </div>
<?php include "footer.php"; ?>