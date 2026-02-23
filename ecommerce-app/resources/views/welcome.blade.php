<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ShopEase - Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            background: linear-gradient(to right, #4e73df, #1cc88a);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .product-card {
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
        }
        .footer {
            background-color: #222;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">ShopEase</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Route::has('login'))
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                @auth
                    <li class="nav-item">
                        <a class="btn btn-outline-light me-2" href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-outline-light me-2" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endif
                @endauth

            </ul>
        </div>
        @endif
    </div>
</nav>
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to ShopEase</h1>
        <p class="lead">Discover the best products at unbeatable prices.</p>
        <a href="#" class="btn btn-light btn-lg mt-3">Shop Now</a>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Products</h2>
        <div class="row g-4">

            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product One</h5>
                        <p class="card-text">$49.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Two</h5>
                        <p class="card-text">$79.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Three</h5>
                        <p class="card-text">$99.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="mb-0">&copy; 2026 . All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>