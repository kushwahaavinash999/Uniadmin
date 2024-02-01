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

    <main>
        <!-- Form -->
        <div class="container">
            <div class="title">Login</div>
            <div class="content">
                <form action="login.php" method="post">
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" placeholder="Enter your Email" required />
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" placeholder="Enter your password" required />
                        </div>
                        <div class="input-box">
                            <span class="details">Role</span>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option>Choose any one</option>
                                <option>MD</option>
                                <option>Director</option>
                                <option>HOD</option>
                                <option>Teacher</option>
                                <option>Student</option>
                            </select>
                        </div>
                        <div class="button">
                            <input type="submit" name="login" value="Login" />
                        </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>