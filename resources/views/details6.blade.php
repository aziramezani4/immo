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
            <div id="featured-3" class="container px-4 py-5">
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                  <div class="feature-icon bg-primary bg-gradient">
                    <svg width="1em" height="1em" class="bi">
                      <use xlink:href="#collection"></use>
                    </svg>
                  </div>
                  <h2>Thank you for the ad!</h2>
                  <p>
                    Your entry will be checked within 48 hours and activated
                    with the next data release.During this time, you cannot edit
                    your listing.
                  </p>
                  <p>Your property reference:<b>cqfhz.06rx.dc.56.68296</b></p>
                    <a href="{{route('my.properties',$property)}}" class="nav-link">
                    Continue to my Advertisements
                  </a>
                </div>
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
