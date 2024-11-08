<?php
session_start();
include 'components/navbar.php';
// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
//   exit;
// }
?>
<div class="container mt-3">

  <h1>Add a Blog Post</h1>

  <form>
    <div class="mb-3">
      <label for="type here" class="form-label">Title</label>
      <input type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <input type="text" class="form-control" id="content">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
include 'components/footer.php';
?>