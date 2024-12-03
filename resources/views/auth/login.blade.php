@extends('layouts.app')

@section('content')

<style>
    .login-card {
        background: #E1E0E0B2;
    }

    .login-card .card-body {
        padding: 1.25rem 5rem;
    }

    .login-wrapper {
        max-width: 600px;
    }

    .login-btn {
        padding: 16px 65px 16px 65px;
        background: #070D2D;
        color: #fff;
        border-radius: 10px;
    }

    .form-control {
        padding: 1.375rem 0.75rem;
        border-radius: 10px;
    }

    .login-header {
        font-size: 25px;
        color: #FE5430;
    }


    @media (max-width: 767px) {
        .login-card .card-body {
            padding: 0;
        }
    }

</style>

<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page login-wrapper">

    <div class="card login-card">
        <div class="card-body">

            <div class="text-center">
                <!-- <a href="index.html" class="logo logo-admin"><img src="assets/images/e-logo.png" height="20" alt="logo"></a> -->
                <h2 class="login-header">Welcome Back!</h2>
                <p class="m-t-20" style="color: #070D2D;">Fill in details below to get acess to your account</p>
            </div>

            <div class="px-3 pb-3">
                <form class="form-horizontal m-t-40" method="post" action="{{ route('login') }}">

                @csrf

                    <div class="form-group row">
                        <div class="col-12">
                            <label style="color: #2D3748;" for="">Email Address</label>
                            <input class="form-control" type="text" required="" id="email" name="email" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label style="color: #2D3748;" class="m-t-10" for="">Password</label>
                            <input class="form-control" id="password" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>


                    <div class="form-group text-center row m-t-40">
                        <div class="col-12">
                            <button class="btn btn-dark btn-block waves-effect waves-light m-t-10 login-btn"
                                type="submit">Log In</button>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>

@endsection
