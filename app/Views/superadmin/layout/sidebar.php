        <!-- Sidebar -->
        <div class="bg-white text-white p-3 sidebar shadow-sm">
            <h4 class="text-center text-dark fw-semibold my-4">Dashboard <br> <span class="">Fananda</span></h4>
            <ul class="nav flex-column my-5 ms-4">
                <li class="nav-item my-2">
                    <a href="<?= base_url('superadmin/dashboard') ?>" class="nav-link <?= uri_string() == 'superadmin/dashboard' ? 'fw-bold text-primary' : 'text-dark' ?>"><i class="bi bi-house-door-fill me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item my-2">
                    <a href="<?= base_url('superadmin/productss') ?>" class="nav-link <?= uri_string() == 'superadmin/productss' ? 'fw-bold text-primary' : 'text-dark' ?>"><i class="bi bi-box-seam me-2"></i> Manage Products</a>
                </li>
                <li class="nav-item my-2">
                    <a href="<?= base_url('superadmin/users') ?>" class="nav-link <?= uri_string() == 'superadmin/users' ? 'fw-bold text-primary' : 'text-dark' ?>"><i class="bi bi-people me-2"></i> Manage Users</a>
                </li>
            </ul>
        </div>