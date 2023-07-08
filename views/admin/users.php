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
    <style>
        .model{
            height : 100vh;
            width : 100%;
            position : absolute;
            top : 0;
            background : rgba(0,0,0,0.5);
        }
        .content{
            position : absolute;
            top : 50%;
            left : 50%;
            transform : translate(-50%, -50%);
            width : 400px;
            height : 380px;
            background : #fff;
            padding : 30px;
            border-radius : 10px;
        }
        .icon{
            position : relative;
        }
        .iconx{
            position: absolute;
            right : 10px;
            top : 5px;
            font-size : 2rem;
            cursor : pointer;
        }
    </style>
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
                            <a class="dropdown-item text-light" href="#" id="signOut">Sign Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">  
        <div class="alert alert-danger d-none" id="danger"></div>
        <div class="alert alert-success d-none" id="success"></div>
        <div class="text-right mb-3">
            <button class="btn btn-md btn-outline-primary" id="addUSer">Add User</button>  
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="userData">

            </tbody>
        </table>
    </div>

    <div class="model d-none">
        <div class="content">
            <div class="icon">
                <div class="iconx">X</div>
            </div>
            <form style="margin-top : 60px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="email" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="text-center">
                    <button type="submit" id="adduser" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <script src="/core/js/jquery-3.3.1.min.js"></script>
    <script src="/core/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "post",
                url: "/admin/users",
                data: {
                    action : "getContent"
                },
                dataType: "text",
                success: function (response) {
                    $('#userData').html(response);
                }
            });
        });

        $('.iconx').click(function (e) { 
            e.preventDefault();
            $('.model').addClass("d-none");
        });

        $('#addUSer').click(function (e) { 
            e.preventDefault();
            $('.model').removeClass("d-none");            
        });

        $('#adduser').click(function (e) { 
            e.preventDefault();
            const user = $('#user').val();
            const password = $('#password').val();

            $.ajax({
                type: "post",
                url: "/admin/users",
                data: {
                    action : 'adduser',
                    user : user,
                    password : password
                },
                dataType: "dataType",
                success: function (response) {
                    const finalRes = response.trim();
                    $('.model').addClass("d-none");
                }
            });
        });

        $('#signOut').click(function (e) { 
            e.preventDefault();
            window.location.replace("/auth");
        });
    </script>
</body>
</html>