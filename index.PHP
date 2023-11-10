<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyArticle.com </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body><head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: lightblue;

    }

    header {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
    }

    .nav-link {
      font-size: 1.1rem;
      color: #333;
    }

    .nav-link:hover {
      color: #007bff;
    }

    h1 {
      font-size: 3rem;
      font-weight: bold;
      color: #007bff;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      
    }

    .card-img-top {
      height: 600px;
      object-fit: cover;
    }
   

    .btn-primary {
      background-color: #007bff;
      border: none;
     
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0062cc;
    }

    footer {
      background-color: #f8f9fa;
    }
  </style>
</head>


  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">MyArticle.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="writerlogin.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container my-5">
      <h1 class="text-center mb-5">Welcome to MyArticle.com</h1>
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card">
            <img src="imp.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="home.php" class="btn btn-primary">Go TO Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-light py-3">
    <div class="container">
      <p class="text-center mb-0">&copy; 2023 MyArticle.com. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
