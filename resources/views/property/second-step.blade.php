{{ __('step2') }}
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
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="container" style="width: 60%;">
    <h2>For Rent::Kiosk::1003 Lausanne - waadtt</h2>
    <form class="form-horizontal" method="post" action="{{route('update.property.step1',$property)}}" enctype="multipart/form-data">
        @csrf

            <div class="form-group col-md-12">
                <label for="exampleFormControlSelect1">Title</label>
                <input class="form-control" name="name" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleFormControlSelect1">Description</label>
                <input class="form-control" name="description" type="text" placeholder="Default input">
            </div>
        <div class="form-group col-md-12">
            <label for="exampleFormControlSelect1">Content</label>
            <input class="form-control" name="content" type="text" placeholder="Default input">
        </div>
        <h2>Main features</h2>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">square</label>
                <input class="form-control" name="square" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">square construction</label>
                <input class="form-control" name="square_construction" type="text" placeholder="Default input">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">floor</label>
                <input class="form-control" name="number_floor" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">room</label>
                <input class="form-control" name="number_bedroom" type="text" placeholder="Default input">
            </div>
        </div>
        <h2>Details</h2>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Bathrooms</label>
                <input class="form-control" name="number_bathroom" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">wc</label>
                <input class="form-control" name="number_wc" type="text" placeholder="Default input">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Construction Year</label>
                <input class="form-control" name="construction_year" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Last Construction</label>
                <input class="form-control" name="last_reconstruction" type="text" placeholder="Default input">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Last Renovation</label>
                <input class="form-control" name="last_renovation" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Available Date</label>
                <input class="form-control" name="available_date" type="text" placeholder="Default input">
            </div>
        </div>
        <h2>Costs</h2>
        <div class="col-md-12">
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Net Rent</label>
                <input class="form-control" name="additional_costs" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Additional Costs</label>
                <input class="form-control" name="net_rent" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Currency</label>
                <select
                    name="currency_id"
                    class="form-control select"
                >
                    <option selected="selected" value="1">
                        CHF
                    </option>
                    <option value="2">€ EUR</option>
                    <option value="3">$ USD</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Price</label>
                <input class="form-control" name="price" type="text" placeholder="Default input">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Currency</label>
                <select
                    name="currency_id"
                    class="form-control select"
                >
                    <option selected="selected" value="1">
                        CHF
                    </option>
                    <option value="2">€ EUR</option>
                    <option value="3">$ USD</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Continue</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
