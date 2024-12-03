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
                <div class="signup-form solution_all chat-form">
                    <div class="card card-bordered">
                        <div class="card-header solution_needs_header">

                            @if(isset($need->image))
                            <img class="solutions_image preview_image" src="{{ asset('storage/' . $need->image) }}"
                                alt="">

                            @else

                            <img class="solutions_image preview_image"
                                src="{{ asset('assets/images/card-placeholder.png') }}" alt="">

                            @endif

                            <div class="preview_need">
                                <h4 class="card-title">{{ $need->title }}</h4>
                                @if($need->created_at->isToday())
                                <p>Today at {{ $need->created_at->format('h:i A') }}</p>
                                @else
                                <p>{{ $need->created_at->format('l \a\t h:i A') }}</p>
                                @endif
                                <p>{{ $need->user->country }}</p>
                            </div>
                        </div>


                        <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                            style="overflow-y: scroll !important; height:500px;">
                            <div class="media media-chat">
                                <div class="media-body">
                                    <p>PURPOSE
                                        <br>
                                        {{ $need->description }}
                                    </p>
                                    <p class="meta"><time
                                            datetime="{{ $need->created_at }}">{{ $need->created_at->format('h:i A') }}</time>
                                    </p>
                                </div>
                            </div>

                            @php
        $currentDate = null;
    @endphp

                            @foreach($solutions as $solution)
                            @if ($solution->created_at->format('Y-m-d') != $currentDate)
                            <div class="media media-meta-day">
                                {{ $solution->created_at->diffForHumans(['part' => 1]) }}
                            </div>
                            @php
                            $currentDate = $solution->created_at->format('Y-m-d');
                            @endphp
                            @endif

                            <div class="media media-chat media-chat-reverse">
                                <div class="media-body">
                                    <p>{{ $solution->solution_description }}</p>
                                    <p class="meta" style="color: #1E1E1E !important">
                                        <time
                                            datetime="{{ $solution->created_at }}">{{ $solution->created_at->format('h:i A') }}</time>
                                    </p>
                                </div>
                            </div>
                            @endforeach


                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                            </div>
                        </div>

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form action="{{ route('solutions_store', ['id' => $id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $need->id }}">
                            <div class="solution_extra_details">
                                <div class="form-row">
                                    <div class="form-group solution-form-group">
                                        <label for="name">Email Address</label>
                                        <input type="text" name="email" id="email" placeholder="Optional">

                                    </div>
                                    <div class="form-group solution-form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" name="phone" id="phone" placeholder="Optional">
                                    </div>

                                    <div class="form-group solution-form-group">
                                        <label for="country">Country</label>
                                        <select name="country">
                                            <option value="" disabled selected>Select your country</option>
                                        </select>
                                    </div>
                                </div>


                            </div>



                            <div class="publisher bt-1 border-light">
                                <span class="publisher-btn file-group">
                                    <label class="solution_file_attach" for="attachment"><i
                                            class="fa fa-paperclip file-browser"></i></label>
                                    <input type="file" name="image" id="attachment" style="display: none;">
                                </span>
                                <input class="publisher-input" type="text" name="solution_description"
                                    placeholder="Type your solution">
                                <button class="publisher-btn text-info" type="submit" data-abc="true"><i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>


                    </div>
                </div>




            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            // Fetch countries from REST Countries API
            $.ajax({
                url: 'https://restcountries.com/v3.1/all',
                type: 'GET',
                success: function (data) {
                    // Populate the dropdown with countries
                    data.forEach(function (country) {
                        $('select[name="country"]').append('<option value="' + country.name
                            .common + '">' + country.name.common + '</option>');
                    });
                },
                error: function () {
                    console.error('Failed to fetch countries.');
                }
            });
        });

    </script>

</body>

</html>
