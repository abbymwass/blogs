<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="Magic Poultry">Magic Poultry</a>
      <div class="ms-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <?php if (isset($_SESSION['username'])): ?>
              <li class="nav-item">
                <a class="nav-link" href="myblogs.php">MYBLOGS</a>
              </li>
              <li class="nav-item">
                <div class="d-inline-flex align-items-center mx-3">
                  <i class="bi bi-person rounded-circle text-light"></i>
                  <a href="#" class="nav-link"><?php echo htmlspecialchars(ucwords($_SESSION['username'])) ?></a>
                </div>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="btn btn-danger">Logout</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="register.php">REGISTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </div>
  </nav>