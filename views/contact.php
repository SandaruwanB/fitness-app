<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/core/images/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM | Contact</title>
    <link rel="stylesheet" href="/core/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/core/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/core/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/core/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/core/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/core/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/core/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/core/css/style.css" type="text/css">
</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <nav class="canvas-menu mobile-menu mt-5">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>


    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="logo">
                        <a href="/">
                            <img src="/core/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="breadcrumb-section set-bg" data-setbg="/core/images/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Contact Us</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>No.28, Maha Widiya Rd., Navinna,<br/> Kurunegala</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>+94 76 118 3372</li>
                                <li>+94 66 222 1111</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>org.gymcenter@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form method="POST">
                            <input type="text" placeholder="Name" id="name">
                            <input type="text" placeholder="Email" id="email">
                            <input type="text" placeholder="Website" id="web">
                            <textarea placeholder="Message" id="message"></textarea>
                            <button type="submit" class="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Sandaruwan Bandara
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="snackbar">ajdhjksa</div>

    <script src="/core/js/jquery-3.3.1.min.js"></script>
    <script src="/core/js/jquery.min.js"></script>
    <script src="/core/js/bootstrap.min.js"></script>
    <script src="/core/js/jquery.magnific-popup.min.js"></script>
    <script src="/core/js/masonry.pkgd.min.js"></script>
    <script src="/core/js/jquery.barfiller.js"></script>
    <script src="/core/js/jquery.slicknav.js"></script>
    <script src="/core/js/owl.carousel.min.js"></script>
    <script src="/core/js/main.js"></script>
    <script>
        $('.submit').click(function (e) { 
            e.preventDefault();
            const name = $('#name').val();
            const email = $('#email').val();
            const web = $('#web').val();
            const message = $('#message').val();

            if(name == "" || email == "" || message == ""){
                showSnackBar('red', "You missed some required fields");
            }
            else{
                $.ajax({
                    type: "post",
                    url: "/contact",
                    data: {
                        name : name,
                        email : email,
                        web : web,
                        message : message
                    },
                    dataType: "text",
                    success: function (response) {
                        $('#name').val("");
                        $('#email').val("");
                        $('#web').val("");
                        $('#message').val("");
                        showSnackBar('green', "successfully submitted");                        
                    }
                });
            }
        });

        function showSnackBar(color, text) {
            const x = document.getElementById("snackbar");
            $('#snackbar').addClass("show");
            $('#snackbar').css("background", color);
            $('#snackbar').text(text);
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
    </script>
</body>
</html>