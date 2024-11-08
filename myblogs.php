<?php
include 'db.php';

include 'components/navbar.php';
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit;
// }
?>
<div class="container my-4">
    <h2>My Blogs</h2>
    <a href="add_blog.php" class="btn btn-success">Add a new Blog</a>
</div>

<?php
include 'components/footer.php';
?>