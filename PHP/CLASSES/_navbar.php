
<header>
    <!-- Navigation Bar Header-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <!-- Left Side (Pic,Home...) -->
        <a href="index.php"><img src="./img/M.Megna-Logo.PNG" width="50" height="30" alt="Logo" title="Logo Megna"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                aria-controls="navbarSupportedContent navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item border-md-right">
                    <a class="nav-link" href="create.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Anzeigen.php">Restaurants</a>
                </li>
        </div>
        <div class="btn-group">
            <!-- Login Button -->
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                    data-display="static" aria-haspopup="true" aria-expanded="false">
                Login
            </button>
            <!-- Dropdown Login (E-Mail,Password,Sign Up) -->
            <div class="dropdown-menu">
                <form class="px-4 py-3">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">E-Mail Address</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                               placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>

                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New here? Create a new Account today!</a>
                <a class="dropdown-item" href="#">Password forgotten?</a>
            </div>
        </div>
        <!-- Search Bar -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </nav>
</header>
