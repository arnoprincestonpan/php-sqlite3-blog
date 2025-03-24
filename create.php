<?php 
$pageTitle = "Create Post";
include "header.php"; 
?>
    <div class="container mt-4">
        <h1>Create Post</h1>
        <form action="process_post.php" method="post">
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
                    <option value="text">Text</option>
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
    <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        const contentTextArea = document.getElementById('content');;
       document.getElementById('content_type').addEventListener('change', () => {
            if(this.value === 'markdown'){
                // Markdown Selected
                contentTextArea.style.display = 'block';
            } else {
                // Text Edtior
                contentTextArea.style.display = 'block';
            }
       });

       // Default Selection
       if(this.value === 'markdown'){
                // Markdown Selected
                contentTextArea.style.display = 'block';
            } else {
                // Text Edtior
                contentTextArea.style.display = 'block';
        }
    </script>
<?php include "footer.php"; ?>