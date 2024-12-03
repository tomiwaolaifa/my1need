<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My1need | Confirm </title>


    <!-- custom -->
    <!-- <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/needs.css">
    <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="shortcut icon" href="{{ asset('assets/images/my1need_logo.svg') }}">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/needs.css') }}" rel="stylesheet" type="text/css">


</head>

<body>
    <div class="main confirm_main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img solution-logo">
                    <img src="{{asset('assets/images/need_form_logo.svg')}}" alt="">
                </div>
                <div class="confirm-need">
                    <div>
                        <img src="{{asset('assets/images/confirm_need.svg')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h2>Your #1need posted</h2>
                        <p class="confirmation_details" style="color: #727796;">Please wait for solution offers from other users.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('create-purpose') }}";
        }, 3000); 
    </script>
</body>

</html>
