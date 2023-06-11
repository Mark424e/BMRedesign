<!-- Mobile Nav -->
<div class="d-block d-lg-none fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a href="index.php" aria-current="page" class="brand">
            <img src="images/logo-neg.svg" loading="lazy" alt="Logo" class="logo d-inline-block">
        </a>

        <div class="nav-icons navbar-toggler border-0" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu-wrap">
                <div class="menu-button">
                    <div style="display: block;" onclick="openNav()">
                        <div class="hamburger">
                            <div class="hamburger-line _1-line" style="width: 28px; height: 1px;"></div>
                            <div class="hamburger-line _2-line" style="width: 28px; height: 1px;"></div>
                            <div class="hamburger-line _3-line" style="width: 28px; height: 1px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse w-100 flex-wrap text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto me-auto ms-0 mb-2 mb-lg-0 d-block">

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="cars.php">Biler</a>
                </li>

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="usedcars.php">Brugte Biler</a>
                </li>

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="services.php">Services</a>
                </li>

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="about.php">Om os</a>
                </li>

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="https://servicebooker.dk/?chainCode=EED3" target="_blank">Booking</a>
                </li>

                <li class="nav-item py-3 px-4">
                    <a class="nav-link text-decoration-none text-light" href="contact.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Desktop Nav -->
<div id="mySidenav" class="navbar-desktop d-none d-lg-block bg-primary">

    <aside class="sidenav h-100">
        <div class="position-relative flex-wrap">

            <div class="nav-icons">
                <div class="menu-wrap">
                    <div class="menu-button">
                        <div id="menu-close" style="display: block;" onclick="closeNav()">
                            <div class="hamburger">
                                <div class="hamburger-line _4-line"></div>
                                <div class="hamburger-line _5-line"></div>
                            </div>
                        </div>
                        <div id="menu-open" style="display: none;" onclick="openNav()">
                            <div class="hamburger">
                                <div class="hamburger-line _1-line"></div>
                                <div class="hamburger-line _2-line"></div>
                                <div class="hamburger-line _3-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100" id="menu-list">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-block ms-0">
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="index.php">Hjem</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="cars.php">Biler</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="usedcars.php">Brugte Biler</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="services.php">Services</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="about.php">Om os</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="https://servicebooker.dk/?chainCode=EED3" target="_blank">Booking</a>
                    </li>
                    <li class="nav-item py-3 ps-4">
                        <a class="nav-link text-decoration-none text-light" href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="socials position-absolute">
            <a class="d-block my-4" href="https://www.facebook.com/brianmadsencom/" target="_blank">
                <img class="social-icon" src="images/square-facebook.svg" alt="Facebook">
            </a>
            <a class="d-block my-4" href="https://www.instagram.com/brianmadsen_com/" target="_blank">
                <img class="social-icon" src="images/square-instagram.svg" alt="Instagram">
            </a>
            <a class="d-block mt-4" href="https://www.linkedin.com/company/14028581/" target="_blank">
                <img class="social-icon" src="images/square-linkedin.svg" alt="LinkedIn">
            </a>
        </div>
    </aside>

    <nav id="top-menu" class="bg-primary">
        <a href="index.php" aria-current="page" class="brand">
            <img src="images/logo-neg.svg" alt="Logo" class="logo d-inline-block">
        </a>
        <a href="contact.php" class="nav-button">
            <div class="text-light">KONTAKT
            </div>
        </a>
    </nav>


</div>