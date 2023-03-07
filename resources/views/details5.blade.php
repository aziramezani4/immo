<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>{{__('write a property')}} · IMMO ALL</title>

    <link rel="stylesheet" href="/assets/css/styles.css" />
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
            <div>
              <h4 class="mb-3">billing</h4>
              <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">
                  <span>Your selection:</span> <b>{{$package->name}}</b>{{'  '.$package->price.' '.'CHF'}}
                </h1>
                <p class="col-md-8 fs-4">
                    {{__('The advertisement will be activated for publication after
                           our quality check.The duration of advertisements is one month.
                            If the advertisement is not canceled before the end of the monthly
                             period 30 days , the term is automaticallyextended by a further
                              month. The customer is responsible for canceling his ad before
                              the 30-day period has expired.All prices are in Swiss Francs CHF
                               exclusive of VAT')}}
                </p>
                <a type="button" class="btn btn-outline-primary btn-lg">
                  back
                </a>
                <button
                  type="submit"
                  class="btn btn btn-primary btn-lg btn-button"
                > <a href="{{route('publish',[$property])}}" >
                        {{__('publish')}}</a>
                </button>
              </div>
            </div>
          </div>
        </main>
          @include('layout.footer')
      </div>
    </div>

    <div
      class="pac-container pac-logo hdpi"
      style="display: none; width: 0px; position: absolute; left: 0px; top: 0px"
    ></div>
    <div class="v-toast v-toast--top"></div>
    <div class="v-toast v-toast--bottom"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
