<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="login.css" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collage Demo</title>
</head>

<body>
    <header>
        <div class="Logo-Title">
            <img src="../logo.jpg" id="logo" />
            <h1 class="collage_name">ABC ENGINEERING COLLEGE</h1>
        </div>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Placements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="signup.php">Signup</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class=" signin_dashboard1">
        <div class="dashboard1">
            <div class="card" style="width: 18rem;">
                <img src="admin-logo/admin.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">ADMIN</h3>
                    <a href="signin.php" class="btn btn-primary">Signin</a>
                </div>
            </div>
        </div>

        <div class="dashboard1">
            <div class="card" style="width: 18rem;">
                <img src="admin-logo/director.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">DIRECTOR</h3>
                    <a href="signin.php" class="btn btn-primary">Signin</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="admin-logo/hod.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">H.O.D</h3>
                    <a href="signin.php" class="btn btn-primary">Signin</a>
                </div>
            </div>
        </div>
        <div class="dashboard1">
            <div class="card" style="width: 18rem;">
                <img src="admin-logo/teachers.jpg" class="card-img-top " alt="...">
                <div class="card-body">
                    <h3 class="card-title">TEACHERS</h3>
                    <a href="signin.php" class="btn btn-primary">Signin</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="admin-logo/students.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">STUDENTS</h3>
                    <a href="signin.php" class="btn btn-primary">Signin</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>