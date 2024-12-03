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
                        <img src="{{asset('assets/images/solution_confirm.svg')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h2>Request Sent</h2>
                        <p class="confirmation_details" style="color: #727796;">We’ll engage provider and get back to you via email.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        setTimeout(function() {
            window.location.href = "{{ route('offers_solve_need', $id) }}";
        }, 5000); 
    </script>
</body>

</html>