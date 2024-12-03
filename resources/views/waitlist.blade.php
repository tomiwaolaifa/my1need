<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My1need | Waitlist </title>


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
                <div class="confirm-need waitlist-section">
                    <div>
                        <img src="{{asset('assets/images/waitlist_giftbox.svg')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h2>My1need App gives you the ability to make a wish or grant a wish, in one-click.</h2>
                    </div>

                    <div class="waitlist-form">
                        <form action="{{ route('join-waitlist') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="waitlist_email">Get early access to this ability.</label>
                                <input id="waitlist_input" type="email" name="waitlist_email"
                                    placeholder="Enter your email Address" required>
                            </div>

                            <div class="form-submit">
                                <input type="submit" value="Join Waitlist" class="submit" name="submit" id="submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>