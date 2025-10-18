<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking System Dashboard</title>

  <!-- ✅ Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fb, #eef1f5);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: "Poppins", sans-serif;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #6f42c1, #0d6efd);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      font-weight: 600;
      font-size: 1.3rem;
      letter-spacing: 0.5px;
    }

    /* Container styling */
    .main-container {
      flex: 1;
      padding: 40px 20px;
    }

    /* Glassmorphism Cards */
    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .glass-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* Buttons */
    .btn-gradient {
      background: linear-gradient(45deg, #6610f2, #0d6efd);
      border: none;
      color: #fff;
      transition: all 0.3s ease;
    }

    .btn-gradient:hover {
      background: linear-gradient(45deg, #0b5ed7, #6610f2);
      transform: translateY(-1px);
    }

    /* Tables */
    .table-custom thead th {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
      color: #fff;
      border: none;
    }

    /* Footer */
    footer {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
      color: #fff;
      padding: 15px 0;
      text-align: center;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
        <i class="bi bi-calendar-check"></i> BookingPro
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile.edit') }}">Profile</a></li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-link nav-link text-white">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main -->
  <div class="container main-container">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show shadow-sm">
        <i class="bi bi-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif

    @yield('content')
  </div>

  <!-- Footer -->
  <footer>
    <small>© {{ date('Y') }} BookingPro — Crafted with ❤️ using Laravel + Bootstrap 5</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
