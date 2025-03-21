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
    <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.getElementById('content_type').addEventListener('change', () => {
            if(this.value === 'markdown'){
                tinymce.remove('#content');
            } else {
                tinymce.init({
                    selector: "#content",
                    plugins: 'autolink lists link image charmap print preview anchor',
                    toolbar: 'undo redo | formatselect | bold italic | alginleft aligncenter alignright | bullist numlist outdent indent | link image',
                });
            }
        });
    </script>
<?php include "footer.php"; ?>