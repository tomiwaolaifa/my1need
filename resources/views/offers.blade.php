<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My1need | Offers </title>


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
                <div class="waitlist-section offers_section">


                    <div class="waitlist-form">
                        <form action="{{ route('search-needs') }}" method="post" id="searchForm">
                            @csrf
                            <h2 class="text-center">View Offers</h2>
                            <div class="form-group">
                                <input id="offers_input" type="email" name="needs_email"
                                    placeholder="Enter your email Address" required>
                            </div>

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>

                            <div>
                            <div class="form-submit">
                                <input type="submit" value="Search" class="submit search_error_btn_1" name="submit" id="submit" />
                                <a class="submit search_error_btn_2" href="{{ route('create-purpose') }}" id="submit" style="background:none !important; color:#000000; border:1px solid #000000;"> Post #1need </a>
                            </div>
                                
                            </div>
                            @else
                            <div class="form-submit">
                                <input type="submit" value="Search" class="submit" name="submit" id="submit" />
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>