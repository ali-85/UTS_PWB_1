<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">UTS PWB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php $request = $_SERVER['REQUEST_URI']; ?> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link <?= $request == '/'
                    ? 'active'
                    : '' ?>" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= $request ==
                '/product'
                    ? 'active'
                    : '' ?>" href="/product">Products</a></li>
                <li class="nav-item"><a class="nav-link <?= $request == '/about'
                    ? 'active'
                    : '' ?>" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link <?= $request ==
                '/contact'
                    ? 'active'
                    : '' ?>" href="/contact">Contact</a></li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-dark mx-2" href="/cart">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">4</span>
                </a>
                <a href="/login" class="btn btn-outline-dark mx-2"><i class="bi bi-box-arrow-in-left"></i> Login</a>
                <a href="/register" class="btn btn-outline-dark"><i class="bi bi-box-arrow-in-right"></i> Register</a>
            </form>
        </div>
    </div>
</nav>