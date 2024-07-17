<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converse Store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --accent-color: #3498db;
            --light-color: #ecf0f1;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--light-color);
        }

        .top-strip {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 5px 0;
        }

        .navbar {
            background-color: var(--secondary-color);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--light-color) !important;
            font-size: 24px;
        }

        .nav-link {
            color: var(--light-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .cart-icon {
            background-color: var(--accent-color);
            padding: 8px 12px;
            border-radius: 50%;
            color: var(--light-color);
        }

        .cart-count {
            background-color: var(--light-color);
            color: var(--primary-color);
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 20px;
        }
    </style>

    <?php
    require ('functions.php');
    ?>

</head>
<body>

<header id="header">
    <div class="top-strip text-center">
        <p class="mb-0">Free shipping on orders over $100</p>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Converse Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://indomieca.com/home/about/">Converse About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <form action="POST" class="form-inline my-2 my-lg-0">
                    <a href="cart.php" class="btn ml-3">
                        <span class="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                        <span class="cart-count ml-2"><?php echo count($product->getData('cart')); ?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
</header>

<main id="main-site">