@extends('layouts.app')

@section('content')
<form action="{{ route('store-purpose') }}" method="post" enctype="multipart/form-data" class="needs-validation m-4">
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" required>
        <div class="invalid-feedback">Please enter a title.</div>
    </div>

    <div class="form-group">
        <label for="picture">Picture:</label>
        <input type="file" class="form-control-file" name="image" accept="image/*" required>
        <div class="invalid-feedback">Please choose a picture.</div>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" name="description" required></textarea>
        <div class="invalid-feedback">Please enter a description.</div>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>

    <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" name="country" required>
            <option value="" disabled selected>Select your country</option>
        </select>
        <div class="invalid-feedback">Please select a country.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

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
                    $('select[name="country"]').append('<option value="' + country.name.common + '">' + country.name.common + '</option>');
                });
            },
            error: function () {
                console.error('Failed to fetch countries.');
            }
        });
    });
</script>

@endsection
