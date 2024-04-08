<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Ecommerce</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 border-end border-primary" style="height: 100vh;">
                <nav class="py-3">
                    <a href="#" class="navbar-brand d-block my-3 fw-bold">
                    <i class="bi bi-layout-wtf"></i>
                        Ecommerce
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">Category</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Product</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Carts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-8 p-5">

                <h1 class="mb-5">Category</h1>
                <form action="actions/category-store.php" method="post">
                    <?php if(isset($_GET['error'])): ?>
                        <div class="alert alert-danger">Please Enter All Fields.</div>
                    <?php endif; ?>
                    <input type="text" name="title" placeholder="Enter Category Title ..." class="form-control mb-3" autofocus>
                    <input type="submit" value="Submit" class="btn btn-outline-primary mb-3">
                </form>


            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
