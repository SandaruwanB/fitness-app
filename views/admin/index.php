<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/core/images/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/core/css/bootstrap.min.css" type="text/css">
    <title>GYM | Admin Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/core/images/logo.png" alt="logo" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">User Contacts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Settings
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-light" href="#">Sign Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <a href="/admin/users" class="col-sm-12 col-md-4 col-lg-3 bg-primary p-5">
                <div>
                    <h5 class="text-light">Manage Users</h5>
                </div>
            </a>
            <a href="/admin/contacts" class="col-sm-12 col-md-4 col-lg-3 bg-primary ml-4 p-5">
                <div>
                    <h5 class="text-light">User Contacts</h5>
                </div>
            </a>
        </div>
    </div>


    <script src="/core/js/jquery-3.3.1.min.js"></script>
    <script src="/core/js/bootstrap.min.js"></script>
</body>
</html>