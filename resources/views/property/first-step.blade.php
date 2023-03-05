<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width: 60%;">
    <h2>Create your Ads</h2>
    <form class="form-horizontal" method="post" action="{{route('second_step')}}">
        @csrf
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Property</label>
                <select class="form-control" id="exampleFormControlSelect1" name="type">
                    <option value="rent">Rent</option>
                    <option value="sale">Sale</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="0"></option>
                    @if($categories)
                        @foreach($categories as $category)
                            <option value={{$category -> re_categories_id}} >{{$category -> name}} </option>
                        @endforeach
                    @endif
                    @if($categoriess)
                        @foreach($categoriess as $category)
                            <option value={{$category -> id}} >{{$category -> name}} </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Country</label>
                <select class="form-control" id="country-dd" name="country_id">
                    <option value="0"></option>
                    @foreach($countries as $country)
                        <option value={{$country -> id}}>{{$country -> name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">State</label>
                <select class="form-control" id="state-dd" name="state_id">
                </select>

            </div>
        </div>
        <br>
        <div class="col-md-6">
            <label class="form-label fw-bold w-100"
            >Post code, Place, Canton
                <div class="form-group">
                    <select id="city-dd" name="city_id" class="form-control">
                    </select>
                </div>

            </label>
            <!---->
        </div>
        <br>
        <div class="col-md-12">
        <label for="exampleFormControlSelect1">Location</label>
        <input class="form-control" name="location" type="text" placeholder="Default input">
        </div>
<br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Continue</button>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#country-dd').on('change', function () {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    // $('#city-dd').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-dd').on('change', function () {
            var idState = this.value;
            $("#city-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#city-dd').html('<option value="">Select City</option>');
                    $.each(res.cities, function (key, value) {
                        $("#city-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
</body>
</html>
