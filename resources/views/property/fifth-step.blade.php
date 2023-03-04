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

            <div class="container-lg mt-4">
                <div>
                    <h4 class="mb-3">Select your service package</h4>
                                    <form enctype="multipart/form-data" class="w-100" method="POST"
                                          action="{{ route('update.property.step4',$property) }}">
                                        @csrf
                    <div
                        class="row d-flex align-items-center align-content-center justify-content-center my-5"
                    >
                        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                            @foreach($packages as $package)
                                <div class="col-">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">{{$package->name}}</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">
                                                {{$package->price}}
                                            </h1>
                                            <ul class="list-unstyled mt-3 mb-4"></ul>
                                            <button
                                                type="submit"
                                                class="btn w-100 btn btn-lg btn-button btn-outline-primary"
                                            >
                                                <a href="{{route('show.package',[$property,$package->id])}}" >
                                                    Continue
                                                </a>

                                            </button>
                                            <br />
                                            <h6>
                                                <a
                                                    href="https://immoall.ch/immoall-swiss-inserat-optionen-und-preise"
                                                    target="_blank"
                                                    class="nav-link"
                                                >
                                                    More Info
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                                    </form>
                </div>
            </div>
        </main>
        <footer class="footer text-center mx-5 my-2">
            <div class="container">
                <span class="text-muted">Copyright © 2023 ImmoAll Swiss, Inc</span>
            </div>
        </footer>
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
