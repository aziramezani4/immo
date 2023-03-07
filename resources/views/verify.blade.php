<html lang="en">
  <head>
    <link rel="stylesheet" href="/assets/css/styles.css">

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Verify Email · IMMO ALL</title>

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
            <div class="row">
              <div class="col-lg-7 m-auto">
                <div class="card">
                  <div class="card-header">{{__('verify_email')}}</div>
                  <div class="card-body">
                    <div role="alert" class="alert alert-success">
                      {{__('email_verification')}}
                    </div>
                    <a href="/login" class="btn btn-primary"> {{__('login')}} </a>
                  </div>
                </div>
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
