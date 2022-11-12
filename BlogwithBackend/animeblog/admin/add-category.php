<?php
include 'part/header.php';
?>

<section class="form_section">
    <div class="container .form_section-container">
        <h2>Add Category</h2>
        <div class="alert_message success">
            <p>Error!</p>
        </div>
        <form action="">
            <input type="text" placeholder="Title">
            <textarea rows="4" placeholder="Description"></textarea>
            <button type="submit" class="btn">Add Category</button>
        </form>
    </div>
</section>

<?php
include '../part/footer.php';
?>