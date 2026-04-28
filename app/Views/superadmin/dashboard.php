<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fananda Collaborative</title>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="assets/icon/fananda-v2.png" type="image/x-icon" />

    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>" />
</head>

<body>
    <div class="mx-4">

        <h2 class="mt-4 mb-5 mx-2 fw-semibold">Dashboard</h2>

        <div class="row g-3 my-4">
            <div class="col-md-3">
                <div class="card-custom bg-white shadow-sm d-flex align-items-center gap-3 p-4">
                    <div class="icon-box bg-lightblue text-primary">
                        <i class="bi bi-basket2-fill icon-dashboard"></i>
                    </div>
                    <div>
                        <small class="fw-semibold opacity-50">Total Products</small>
                        <h4 class="fw-semibold my-2">124</h4>
                        <small class="fw-semibold"><span class="text-success">+12%</span> <span class="opacity-50">from last month</span></small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom bg-white shadow-sm d-flex align-items-center gap-3 p-4">
                    <div class="icon-box bg-lightpurple text-purple">
                        <i class="bi bi-people-fill icon-dashboard"></i>
                    </div>
                    <div>
                        <small class="fw-semibold opacity-50">Total Users</small>
                        <h4 class="fw-semibold my-2">248</h4>
                        <small class="fw-semibold"><span class="text-success">+12%</span> <span class="opacity-50">from last month</span></small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom bg-white shadow-sm d-flex align-items-center gap-3 p-4">
                    <div class="icon-box bg-lightgreen text-success">
                        <i class="bi bi-file-earmark-text-fill icon-dashboard"></i>
                    </div>
                    <div>
                        <small class="fw-semibold opacity-50">Total Orders</small>
                        <h4 class="fw-semibold my-2">532</h4>
                        <small class="fw-semibold"><span class="text-success">+12%</span> <span class="opacity-50">from last month</span></small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom bg-white shadow-sm d-flex align-items-center gap-3 p-4">
                    <div class="icon-box bg-lightyellow text-coin">
                        <i class="bi bi-coin icon-dashboard"></i>
                    </div>
                    <div>
                        <small class="fw-semibold opacity-50">Total Revenue</small>
                        <h4 class="fw-semibold my-2">Rp****</h4>
                        <small class="fw-semibold"><span class="text-success">+20%</span> <span class="opacity-50">from last month</span></small>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-custom bg-white shadow-sm p-4">
            <div class="my-2">
                <h5 class="fw-semibold">Overview</h5>
                <p class="text-muted">Chart</p>
            </div>
            <div id="chart"></div>
        </div>

    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script type="module" src="<?= base_url('assets/js/charts/area.js') ?>"></script>
</body>