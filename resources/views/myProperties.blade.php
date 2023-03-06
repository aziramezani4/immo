<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Write a property · IMMO ALL</title>

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
            <div
              class="row d-flex align-items-center align-content-center justify-content-center my-5"
            >
              <div
                class="col-xs-12 col-md-8 col-xl-8 col-lg-10 p-4 pb-0 pt-lg-5 align-items-center"
              >
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                  My Properties
                </h3>
              </div>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    @foreach($properties as $property)
                        <div class="col-">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">{{$property->name}}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">
                                        {{$property->description}}
                                    </h1>

                                    <br />

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
          </div>
        </main>
          @include('layout.footer')
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
