<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My1need | Solutions </title>


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

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img solution-logo">
                    <img src="{{asset('assets/images/need_form_logo.svg')}}" alt="">
                </div>
                <div class="signup-form solution_all register-form">
                    <h2 class="text-center solution_header">Solve #1need</h2>
                    <p>Discover and solve people's needs on our platform – choose to help for free or get paid, the
                        choice is yours;
                        just be the solution to someone's #1need. </p>
                    <hr class="underline_solutions">

                    <div class="all_solutions">

                        @foreach($solutions as $solution)
                        <a href="{{ route('offers_solve_need', $solution->id) }}" class="solution-link">
                            <div class="card card-body solution_cards">
                                <div class="row">
                                    <div class="col-md-4 col-5">
                                        @if(isset($solution->image))
                                        <img class="solutions_image" src="{{ asset('storage/' . $solution->image) }}"
                                            alt="">

                                        @else

                                        <img class="solutions_image"
                                            src="{{ asset('assets/images/card-placeholder.png') }}" alt="">

                                        @endif

                                        <p class="mt-2">{{ $solution->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="col-md-8 col-7 padding-left-none">
                                        <h3 class="card-title solution-card-title font-20 mt-0">{{ $solution->title }}</h3>
                                        <div class="solution_country_count">
                                            <p class="solution_country" style="color: #848383;">
                                                {{ $solution->user->country }} </p>
                                            <p class="solution_count" style="color: #848383;">Solutions: <span>{{ $solution->total_solutions }}</span></p>
                                            </p>
                                        </div>

                                        <p class="card-text solution_para">{{ $solution->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <br>
                        @endforeach
                    </div>
                </div>




            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>