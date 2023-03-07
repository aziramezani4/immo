<html lang="en">
  <head>



    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Home · IMMO ALL</title>

    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/details.css" />





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
              <div class="col-lg-10 m-auto">
                <div class="col-md-12">
                  <div
                    role="alert"
                    aria-live="polite"
                    aria-atomic="true"
                    class="alert alert-dismissible alert-warning"
                  >
                    <button type="button" aria-label="Close" class="close">
                      ×
                    </button>
                      {{__('check_spam:')}}
                    <button
                      type="submit"
                      class="btn btn btn-link small p-0 m-0 btn-linkType"
                    >
                      {{__('email_verification')}}</button
                    ><br />
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">{{__('home')}}</div>
                  <div class="card-body">
                    <div>
                      <div
                        role="alert"
                        aria-live="polite"
                        aria-atomic="true"
                        class="alert alert-warning"
                      >
                        <!---->
                        <h2 class="alert-heading center">
                          {{__('verify_email')}}
                        </h2>
                        <hr />
                        <p></p>
                        <h4>if you don't receive email:</h4>
                        {{__('check_spam:')}}  or
                        <strong>junk </strong> mail folder
                        <p></p>
                        <hr />
                        <p class="mb-0">Email To Support : immo@immoall.ch</p>
                      </div>
                    </div>
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
