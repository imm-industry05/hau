<?php
include 'part/header.php';
?>

<section class="form_section">
    <div class="container .form_section-container">
        <h2>Add Post</h2>
        <div class="alert_message success">
            <p>Error!</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="">Drama</option>
                <option value="">Action</option>
                <option value="">Horror</option>
                <option value="">Slice of Life</option>
                <option value="">Adventure</option>
                <option value="">Fantasy</option>
            </select>
            <textarea rows="10" placeholder="Body"></textarea>
            <div class="form_control inline">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured">Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>

<?php
include '../part/footer.php';
?>