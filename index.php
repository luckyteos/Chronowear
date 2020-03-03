<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chronowear | Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|IBM+Plex+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/cart.css">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarToggle"
                aria-controls="navBarToggle" aria-expanded="false" aria-label="Toggle nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBarToggle">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
        </div>
    </nav>
    <main class = "container-fluid">
        <section id = "cart">
            <h1>Shopping Cart</h1>
            <table class = "table table-borderless">
                <thead class = "thead-light">
                    <tr>
                        <th id = "cart-header-item">Item</th>
                        <th id = "cart-header-item-desc"></th>
                        <th id = "cart-header-price">Price</th>
                        <th id = "cart-header-quantity">Quantity</th>
                        <th id = "cart-header-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class = "img-container">
                            <img class = "img-fluid item-images" src="images/emporio-armani.jpg"/>
                        </td>
                        <td>Emporio Armani Watch</td>
                        <td>$200</td>
                        <td>
                            <div class = "form-group">
                                <input type = "number" class = "form-control" aria-label="Quantity Select"/>
                            </div>
                        </td>
                        <td>
                            $200
                        </td>
                    </tr>
                </tbody>
                <tbody>

                </tbody>
            </table>
        </section>
    </main>
</body>
</html>


