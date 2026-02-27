<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user = $_SESSION['ses_user'] ?? $_COOKIE['coo_user'] ?? null;
?>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:#0f5132;">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-semibold"
            href="http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/">
            Gadget Inventory
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- LEFT MENU -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link"
                        href="http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/kategori/">
                        Kategori
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/merk/">
                        Merk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/produk/">
                        Produk
                    </a>
                </li>

            </ul>

            <!-- RIGHT MENU -->
            <?php if ($user): ?>
                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item me-3">
                        <span class="nav-link small text-light opacity-75">
                            <?= $user; ?>
                        </span>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-sm px-3"
                            href="http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/logout.php">
                            Logout
                        </a>
                    </li>

                </ul>
            <?php endif; ?>

        </div>
    </div>
</nav>