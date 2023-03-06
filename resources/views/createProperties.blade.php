<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>{{__('write a property')}}</title>

    <link rel="stylesheet" href="/assets/css/styles.css" />

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./assets/index.js"></script>
  </head>

  <body>

    <div id="app">
      <div
        data-v-6ca9e6be=""
        class="progress"
        style="
          width: 0%;
          height: 2px;
          opacity: 0;
          background-color: rgb(119, 182, 255);
        "
      ></div>
      <div>
        <main role="main" class="main-layout">
          @include('layout.navbar')
          <div class="container-lg mt-4">
            <div
              class="row d-flex align-items-center align-content-center justify-content-center my-5"
            >
              <div
                class="col-xs-12 col-sm-8 col-lg-7 col-xl-6 p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg"
              >
                <h4 class="fw-bold">Create your Ads</h4>
                <br />
                <div
                  class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3"
                >
                    <form class="form-horizontal" method="post" action="{{route('second_step')}}">
                        @csrf
                    <div class="row col-md-12 my-2">
                      <div class="col-md-6">
                        <label class="form-label fw-bold w-100"
                          >{{__('property')}}

                            <select class="form-control" id="exampleFormControlSelect1" name="type">
                                <option value="rent">{{__('rent')}}</option>
                                <option value="sale">{{__('sale')}}</option>
                            </select>
                        </label>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-bold w-100"
                          >{{__('category')}}
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
                        </label>
                        <!---->
                      </div>
                    </div>
                    <div class="row col-md-12 my-2">
                      <div class="col-md-6">
                        <label class="form-label fw-bold w-100"
                          >{{__('country')}}
                            <select class="form-control" id="country-dd" name="country_id">
                                <option value="0"></option>
                                @foreach($countries as $country)
                                    <option value={{$country -> id}}>{{$country -> name}} </option>
                                @endforeach
                            </select>
                        </label>
                        <!---->
                      </div>
                      <div class="col-md-6">
                        <label type="hidden" class="form-label fw-bold w-100"
                          >State

                            <select class="form-control" id="state-dd" name="state_id">
                            </select>
                          <input class="vs__search"
                        /></label>
                        <!---->
                      </div>
                    </div>
                    <div class="row col-md-12 my-2">
                      <div class="col-md-6">
                        <label class="form-label fw-bold w-100"
                          >{{__('post code, place, canton')}}
                            <div class="form-group">
                                <select id="city-dd" name="city_id" class="form-control">
                                </select>
                            </div>
                        </label>
                        <!---->
                      </div>
                      <div no-body="" class="mb-1 w-100">
                          <label for="exampleFormControlSelect1">{{__('location')}}</label>
                          <input class="form-control" name="location" type="text" placeholder="Default input">
                      </div>
                    </div>
                    <button
                      type="submit"
                      class="btn btn btn-primary px-4 my-3 me-md-2 btn-primary"
                      style="background: rgb(0, 0, 55); float: right"
                    >
                        {{__('continue')}}
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
          @include('layout.footer')
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
