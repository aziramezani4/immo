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
            <div
              class="row d-flex align-items-center align-content-center justify-content-center my-5"
            >
                @foreach($properties as $property)
              <div
                class="col-xs-12 col-md-8 col-xl-8 col-lg-10 p-4 pb-0 pt-lg-5 align-items-center"
              >
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                  {{__('my-properties')}}
                </h3>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <img width="250" height="250">
                            </div>
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">{{$property->name}}</strong>
                                <h3 class="mb-0">
                                    {{$property->created_at}}
                  </h3> <div class="mb-1 text-muted">
                                    {{$property->type}}
                  </div> <p class="card-text mb-auto">
                                    {{$property->name}}
                  </p> <div><button href="#" class="btn btn-primary">
                      {{__('edit')}}
                    </button> <button href="#" class="btn btn-danger">
                      {{__('delete')}}
                    </button></div></div></div></div></div>
              </div>
                @endforeach
            </div>
          </div>
        </main>
          @include('layout.footer')
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
