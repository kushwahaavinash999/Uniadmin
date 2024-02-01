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
                            <a class="nav-link text-white" href="./signindashboard.php">Signin Dashboard</a>
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
    <?php
    $conn = new mysqli('localhost', 'root', '', 'abc_college');
    $id = $_GET['id'];
    $sql = "select * from details where id='$id'";
    $result = mysqli_query($conn, $sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        while ($fetch = mysqli_fetch_assoc($result)) { ?>

        <!-- Form -->
        <div class="container">
            <div class="title">Update</div>
            <div class="content">
                <form action="update.php" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">id</span>
                            <input type="hidden" name="id" value='<?php echo $fetch['id']; ?>'
                                placeholder="Enter your id" required />
                        </div>
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="name" value='<?php echo $fetch['name']; ?>'
                                placeholder="Enter your name" required />
                        </div>
                        <div class="input-box">
                            <span class="details">Father Name</span>
                            <input type="text" name="father_name" value='<?php echo $fetch['father_name']; ?>'
                                placeholder="Enter your Father name" required />
                        </div>
                        <div class="input-box">
                            <label>Phone Number</label>
                            <input type="tel" name="phone_no" value='<?php echo $fetch['phone_no']; ?>'
                                placeholder="0123456789" pattern="[0-9]{10}">
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" value='<?php echo $fetch['email']; ?>'
                                placeholder="Enter your Email" required />
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" value='<?php echo $fetch['password']; ?>'
                                placeholder="Enter your password" required />
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" name="C_password" value='<?php echo $fetch['C_password']; ?>'
                                placeholder="Enter your Confirm password" required />
                        </div>
                        <div class="input-box">
                            <label>Date of Birth</label>
                            <input type="date" name="DOB" value='<?php echo $fetch['DOB']; ?>'
                                placeholder="Date of Birth" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Role</span>
                            <select class="form-select" aria-label="Default select example" name="role"
                                value='<?php echo $fetch['role']; ?>'>
                                <option>Choose any one</option>
                                <option>MD</option>
                                <option>Director</option>
                                <option>HOD</option>
                                <option>Teacher</option>
                                <option>Student</option>
                            </select>
                        </div>

                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" value='<?php echo $fetch['gender']; ?>' id="dot-1" />
                        <input type="radio" name="gender" value='<?php echo $fetch['gender']; ?>' id="dot-2" />
                        <input type="radio" name="gender" value='<?php echo $fetch['gender']; ?>' id="dot-3" />
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="update" value="update" />
                    </div>
                </form>
                <?php } ?>
    </body>

    </html>