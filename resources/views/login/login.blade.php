<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IBOB Rental</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card{
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,.1);
        }

        .card-header{
            background: white;
            border-bottom: 1px solid #eee;
            text-align: center;
            padding: 20px;
        }

        .card-header i{
            font-size: 45px;
            color: #0d6efd;
        }

        .card-header h3{
            margin-top: 10px;
            margin-bottom: 0;
            font-weight: bold;
        }

        .form-control{
            border-radius: 8px;
        }

        .input-group-text{
            background-color: white;
        }

        .btn-login{
            border-radius: 8px;
            padding: 10px;
            font-weight: 600;
        }

    </style>

</head>
<body>

<div class="card login-card">

    <div class="card-header">

        <i class="bi bi-bicycle"></i>

        <h3>NB Rental</h3>

        <small class="text-muted">
            Rental Kendaraan Termurah
        </small>

    </div>

    <div class="card-body p-4">

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">Nama</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>

                    <input type="text"
                           name="name"
                           class="form-control"
                           required>

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">Email</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-envelope-fill"></i>
                    </span>

                    <input type="email"
                           name="email"
                           class="form-control"
                           required>

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">Password</label>

                    <div class="input-group">

                        <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                        </span>

                <input type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        required>

                <button type="button"
                    class="btn btn-outline-secondary"
                    onclick="togglePassword()"><i class="bi bi-eye-fill" id="eyeIcon"></i>
                </button>

                </div>

            </div>

            <button type="submit"
                    class="btn btn-primary btn-login w-100">

                Login

            </button>

        </form>

    </div>

</div>
<script>
function togglePassword() {

    let password = document.getElementById("password");
    let eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {

        password.type = "text"; // tampilkan password
        eyeIcon.className = "bi bi-eye-slash-fill";

    } else {

        password.type = "password"; // sembunyikan password
        eyeIcon.className = "bi bi-eye-fill";

    }
}
</script>
</body>
</html>