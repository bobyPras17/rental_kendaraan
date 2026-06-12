<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
        body{
            margin:0;
            padding:0;
            background:#eef2f7;
            font-family:'Poppins',sans-serif;
            min-height:100vh;
}

        /* ================= SIDEBAR ================= */
        .sidebar{
            width:270px;
            height:100vh;
            position:fixed;
            top:0;
            left:0;
            z-index:999;
            padding-top:25px;
            transition:.3s;
            background:linear-gradient(180deg,#1e293b,#0f172a);
            box-shadow:0 0 30px rgba(0,0,0,.2);
        }

        .logo{
            text-align:center;
            padding-bottom:25px;
            margin-bottom:20px;
            border-bottom:1px solid rgba(255,255,255,.1);
        }

        .logo h3{
            color:#fff;
            font-weight:700;
            letter-spacing:1px;
        }

        .logo p{
            color:#94a3b8;
            font-size:13px;
            margin-bottom:0;
        }

        .sidebar a{
            display:flex;
            align-items:center;
            gap:12px;
            padding:14px 18px;
            margin:8px 12px;
            border-radius:14px;
            text-decoration:none;
            color:#cbd5e1;
            font-size:15px;
            font-weight:500;
            transition:.3s;
            position:relative;
        }

        .sidebar a i{
            font-size:18px;
        }

        .sidebar a:hover{
            color:#fff;
            background:rgba(59,130,246,.15);
        }

        .sidebar a.active{
    background:rgba(255,255,255,.08);
    color:#fff;
    border-left:4px solid #3b82f6;
    border-radius:10px;
}

        /* ================= CONTENT ================= */
        .content{
    margin-left:270px;
    padding:25px;
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

        /* ================= CARD ================= */
        .dashboard-card{
            background:#fff;
            border-radius:20px;
            padding:25px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            transition:.3s;
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        /* ================= FOOTER ================= */
        .footer{
    margin-top:auto;
    text-align:center;
    padding:15px;
    color:#64748b;
    font-size:14px;
}

        /* ================= MOBILE ================= */
        .menu-btn{
            display:none;
            border:none;
            background:none;
            font-size:25px;
        }

        @media (max-width:768px){

            .sidebar{
                left:-270px;
            }

            .sidebar.active{
                left:0;
            }

            .content{
                margin-left:0;
            }

            .menu-btn{
                display:block;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">

        <div class="logo">
            <h3>
                <i class="bi bi-car-front-fill"></i>
                NB Rental
            </h3>
            <p>Rental Motor Terbaik</p>
        </div>

        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
            <i class="bi bi-house-door-fill"></i>
            Dashboard
        </a>

        <a href="{{ route('kendaraan.index') }}"
           class="{{ request()->is('kendaraan*') ? 'active' : '' }}">
            <i class="bi bi-bicycle"></i>
            Kendaraan
        </a>

        <a href="{{ route('pelanggan.index') }}"
           class="{{ request()->is('pelanggan*') ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i>
            Pelanggan
        </a>

        <a href="{{ route('transaksi.index') }}"
           class="{{ request()->is('transaksi*') ? 'active' : '' }}">
            <i class="bi bi-receipt"></i>
            Transaksi
        </a>

        <a href="{{ route('pengembalian.index') }}"
           class="{{ request()->is('pengembalian*') ? 'active' : '' }}">
            <i class="bi bi-arrow-counterclockwise"></i>
            Pengembalian
        </a>

        <a href="/logout"
           class="btn btn-danger mx-3 mt-4 rounded-3">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </a>

    </div>

    <!-- Content -->
    <div class="content">

        <button class="menu-btn mb-3" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>

        @yield('content')

        <!-- Footer -->
        <footer class="footer">
            © {{ date('Y') }} NB Rental Motor • Sistem Manajemen Rental Motor
        </footer>

    </div>

    <script>
        function toggleSidebar() {
            document
                .getElementById('sidebar')
                .classList
                .toggle('active');
        }
        setTimeout(function () {
        let alert = document.querySelector('.alert');

        if (alert) {
            alert.remove();
        }
    }, 3000);
    </script>
</body>
</html>