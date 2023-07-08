<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/core/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/core/css/bootstrap.min.css" type="text/css">
    <title>GYM | Login</title>
    <style>
        .content{
            position: absolute;
            top : 50%;
            left : 50%;
            transform : translate(-50%, -50%);
            width : 500px;
        }
        .logo{
            margin-left : 22%;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="logo">
            <img src="/core/images/logo.png" alt="logo">
        </div>

        <h2 class="mb-4 text-center">Sign In</h2>
        <form>
            <div class="alert alert-danger d-none text-center" id="alert"></div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="email" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>
            <div class="text-center">
                <button type="submit" id="login" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <script src="/core/js/jquery-3.3.1.min.js"></script>
    <script src="/core/js/jquery.min.js"></script>
    <script src="/core/js/bootstrap.min.js"></script>
    <script>
        $('#login').click(function (e) { 
            e.preventDefault();
            const user = $('#user').val();
            const password = $('#pass').val();

            if(user == "" || password == ""){
                $('#alert').removeClass("d-none");
                $('#alert').text("All Fields are Required.");
            }
            else{
                $('#alert').addClass("d-none");
                $.ajax({
                    type: "post",
                    url: "/auth",
                    data: {
                        user : user,
                        password : password
                    },
                    dataType: "text",
                    success: function (response) {
                        const value = response.trim();
                        if(value == "nouser"){
                            $('#alert').removeClass("d-none");
                            $('#alert').text("Invalid Credentials.User not Found");
                        }
                        else if(value == 'pass'){
                            $('#alert').removeClass("d-none");
                            $('#alert').text("Incorrect Password.Please Check Again.");
                        }
                        else{
                            window.location.replace('/');
                        }
                    }
                });
            }

        });
    </script>
</body>
</html>