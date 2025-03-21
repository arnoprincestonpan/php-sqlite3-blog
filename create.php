<?php 
$pageTitle = "Create Post";
include "header.php"; 
?>
    <div class="container mt-4">
        <h1>Create Post</h1>
        <form action="">
            <div>
                <label>Title</label>
                <input type="text" id="title" name="title" />
            </div>
            <div>
                <label>Category</label>
                <input type="text" id="title" name="title" />
            </div>
            <div>
                <label>Content Type</label>
                <select>
                    <option value="rich">Rich Text</option>
                    <option value="markdown">Markdown</option>
                </select>
            </div>
            <div>
                <label>Content</label>
                <input type="text" id="title" name="title" />
            </div>
            <button>Submit</button>
        </form>
    </div>
<?php include "footer.php"; ?>