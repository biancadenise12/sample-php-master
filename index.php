<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/cover.css" rel="stylesheet">
<?php
require "db.php";

if ($cover == "") { 
    $stmt = $pdo->query('SELECT fullname FROM employee ORDER BY id DESC LIMIT 1');
    while ($row = $stmt->fetch())
    {
        $cover = "Welcome to DXC " . $row['fullname'] . "\n";
    }

    if ($cover == "") {
        header('Location: /init.php');
    }
}

?>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">DXC</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading"><?php echo $cover; ?></h1>
    <p class="lead">Not you?</p>
    <p class="lead">
      <a href="register.php" class="btn btn-lg btn-secondary">Register here</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>


</body>
