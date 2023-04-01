<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    {{-- template bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/style/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/style/css/iofrm-theme12.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <!-- <div class="logoo">
                    <img src="images/vector_ipb.png" alt="">
            </div> -->
            <div style="background-color:#1B2124" class="form-holder">
                <div style="background-color:#1B2124" class="form-content">
                    
                        <!-- <img src="./style/images/vector_ipb.png" width="300px" height="300px"> -->
                    
                    <div class="form-items">
                        
                        <h1 style="color:white;font-weight:bold" class="white">Minjemin<span style="font-weight:bold;color:rgb(0, 186, 136)">.</span></h1>
                        <!-- <p>Login</p> -->
                        <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                        <div class="page-links">
                            <!-- <a href="login12.html" class="active">Login</a> -->
                            <!-- <a href="register12.html">Register</a> -->
                        </div>
                        <form action="/dashboard" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required autofocus>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> 
                                <!-- <a href="forget12.html">Forget password?</a> -->
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                    <!-- <img class="" src="./style/images/vector_ipb.png" width="350px" height="400px"> -->
                </div>
            </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>