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
            --primary-color: #1a1a1a;
            --secondary-color: #e74c3c;
            --accent-color: #f1c40f;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--accent-color) !important;
        }

        .nav-link {
            color: #ffffff !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
        }

        .cart-icon {
            background-color: var(--secondary-color);
            padding: 8px 12px;
            border-radius: 50%;
            color: #ffffff;
        }

        .cart-count {
            background-color: var(--accent-color);
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Converse Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexuser.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.converse.id/about-us">About Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kategori.php">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form action="POST" class="form-inline my-2 my-lg-0">
                <a href="cart.php" class="btn">
                    <span class="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                    <span class="cart-count ml-2"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
</header>

<main id="main-site">