<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jivika - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">
</head>

<body>
    <section class="main">
        <div class="container-fluid">
            <div class="head-logo">
                <a href="#"><img src="{{asset('admin_assets/images/logo.png')}}" class="img-fluid" /></a>
            </div>

            <div class="fill-details">
                <h3 class="text-center">Login</h3>
                <p>Welcome back to Jivika Chem. Please log into your account</p>

                @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                </div>
                @endif

                <div class="form-start">
                    <form action="{{route('user.auth')}}" method="post">
                        @csrf
                        <div class="forms">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="forms">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-check rem-for">
                            <div>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me?
                                </label>
                            </div>
                            <div>
                                <a href="forgot-password.html" class="text-right">Forgot Password ?</a>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-login" style="width: 100%;">Login <i class="fa-sharp fa-solid fa-circle-arrow-right"></i></button>

                        <div class="text-center mt-3">
                            <span class="register">Don’t have an account? <a href="registration.html"> Register</a></span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</body>

</html>