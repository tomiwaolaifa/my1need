<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My1need | Needs </title>


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
                <div class="signup-img landing_logo">
                    <img src="{{asset('assets/images/need_form_logo.svg')}}" alt="">
                </div>
                <div class="signup-form">
                    <form action="{{ route('store-purpose') }}" method="post" enctype="multipart/form-data" class="register-form needs-validation" id="register-form">
                        @csrf
                        <h2 class="text-center">Post #1need</h2>
                        <div class="form-group">
                            <label for="address">Title</label>
                            <div class="input-wrapper">
                                <textarea id="title" name="title" rows="2" cols="50" placeholder="What do you need?" required></textarea>
                                <div class="char-count">0/50</div>
                            </div>
                            <input type="file" id="upload-photo" name="image" multiple="multiple" accept="image/*" required/>
                            <label id="upload-photo-label" for="upload-photo">Do you have its picture?</label>
                        </div>
                        <div class="form-group">
                            <label for="address">Purpose</label>
                            <div class="input-wrapper">
                            <textarea id="purpose_description" name="description" rows="4" cols="50" placeholder="Why do you need it?
Important if you want a free solution." required>
</textarea>

                            <div class="char-count-2">0/1000</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Email Address</label>
                                <input type="text" name="email" id="email" placeholder="Not visible to other users"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Country</label>
                                <select name="country" required>
                                    <option value="" disabled selected>Select your country</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
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
        
        
        
        $(document).ready(function(){
            var maxLength = 50;
            $('#title').on('input', function() {
                var length = $(this).val().length;
                $('.char-count').text(length + '/' + maxLength);
                if (length > maxLength) {
                    $(this).val($(this).val().substring(0, maxLength));
                    $('.char-count').text(maxLength + '/' + maxLength);
                }
            });
            
             $('#purpose_description').on('input', function() {
                var length = $(this).val().length;
                $('.char-count-2').text(length + '/' + 1000);
                if (length > 1000) {
                    $(this).val($(this).val().substring(0, 1000));
                    $('.char-count-2').text(1000 + '/' + 1000);
                }
            });
        });

    </script>
</body>

</html>
