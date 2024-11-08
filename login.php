<?php
include 'components/navbar.php';
include 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  //query to check for the email
  $stmt = $conn->prepare(query: "SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    //verify password
    if (password_verify($password, $user['Password'])) {
      //set session variables
      $_SESSION['user_id'] = $user['User_ID'];
      $_SESSION['username'] = $user['Username'];
      $_SESSION['role'] = ['Role'];

      header("Location: myblogs.php");
      exit();
    } else {
      $error = "Invalid password";
    }
  } else {
    $error = "No user found with that email.";
  }
  $stmt->close();
}
?>

</head>

<body>
  <div class="container">
    <form method="POST">
      <h2>Login</h2>
      <?php if (isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" required class="form-control" id="exampleInputPassword1" name="password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <?php
  include 'components/footer.php';
  ?>