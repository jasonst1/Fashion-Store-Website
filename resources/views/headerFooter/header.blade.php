<nav class="navbar navbar-custom navbar-expand-lg">
    <a class="navbar-brand" href="/"><img
            src="https://i.pinimg.com/originals/f9/2a/d3/f92ad3f3434f7a20ca931285c2df9906.png" width="100"
            height="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-3">
                <a class="nav-link" href="/catalog">Products</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/wishlist">Wishlist</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/shoppingCart">Shopping Cart</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/account">Account</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item mx-3">
                <form class="form-inline my-2 my-lg-0" action="/logout" method="POST">
                    @csrf
                    <button class="nav-link" type="submit" style="border: none; background: none;">Logout</button>
                </form>
            </li>
        </ul>
        <div class="box">
            <form name="search">
                <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
            </form>
            <i class="bi bi-search"></i>
        </div>
    </div>
</nav>
