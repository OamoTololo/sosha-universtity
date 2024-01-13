<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand text-white" href="index.php">
        <img src="assets/images/logo2.jpg" class="logoImageNav border border-dark">
        Sosha Universirty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link text-white" href="home.view.php">
                    <i class="fa-solid fa-home"></i> DASHBOARD
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="classes.view.php">
                    <i class="fa-solid fa-laptop"></i> CLASSES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="tests.view.php">
                    <i class="fa-solid fa-house"></i> TESTS
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="other-stuff.php" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i> USERS
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/profile.view.php"> Profile's</a>
                    <a class="dropdown-item" href="home.view.php"> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="student-corner.php"> Logout</a>
                </div>

            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="gallery.php" tabindex="-1"><i class="fa-solid fa-image"></i> Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact-us.php" tabindex="-1"><i class="fa-solid fa-envelope"></i>
                    Contact Us</a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fa-brands fa-tiktok"></i></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="admin/login.php">Super Admin</a>
                    <a class="dropdown-item" href="admin/login.php">Admin</a>
                    <a class="dropdown-item" href="#">Lecturer</a>
                    <a class="dropdown-item" href="admin/login.php">Receptionist</a>
                    <a class="dropdown-item" href="login.php">Student</a>
                </div>
            </li>
        </ul>

    </div>

</nav>