<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <title>{{__('login')}} · IMMO ALL</title>
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
              class="d-flex justify-content-center align-items-center align-content-center mb-5"
            >
              <div class="row w-100 mt-5">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10 m-auto">
                  <div class="text-center mb-4">
                    <img
                      src="/assets/images/person-circle.svg"
                      alt=""
                      width="72"
                      height="72"
                      class="mb-4"
                    />
                    <h1 class="h3 mb-3 font-weight-normal">{{__('login')}}</h1>
                  </div>
                  <form>
                    <div class="mb-3 row">
                      <label
                        class="col-md-3 col-form-label text-md-end"
                      ></label>
                      <div class="col-md-7">
                        <!---->
                        <button
                          type="button"
                          class="btn btn-outline-dark w-100 mb-1"
                        >
                          {{__('login_with')}}
                          <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fab"
                            data-icon="google"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 488 512"
                            class="fa-color-google svg-inline--fa fa-google fa-w-16"
                          >
                            <path
                              fill="currentColor"
                              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                              class=""
                            ></path>
                          </svg>
                        </button>
                        <!---->
                        <!---->
                        <!---->
                      </div>
                      <label
                        class="col-md-3 col-form-label text-md-end"
                      ></label>
                      <div class="col-md-7">
                        <div class="d-flex">
                          <hr class="w-100" />
                          <span class="text-uppercase mx-3">{{__('or')}}</span>
                          <hr class="w-100" />
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-md-3 col-form-label text-md-end"
                        >{{__('email')}}</label
                      >
                      <div class="col-md-7">
                        <input type="email" name="email" class="form-control" />
                        <!---->
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-md-3 col-form-label text-md-end"
                        >{{__('password')}}</label
                      >
                      <div class="col-md-7">
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                        />
                        <!---->
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-3"></div>
                      <div class="col-md-7 d-flex">
                        <div class="form-check">
                          <input
                            id="remember"
                            name="remember"
                            type="checkbox"
                            class="form-check-input"
                          />
                          <label for="remember" class="form-check-label">
                            {{__('remember_me')}}
                          </label>
                        </div>
                        <a href="/password/reset" class="small ms-auto my-auto">
                          {{__('forgot_password')}}
                        </a>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-7 offset-md-3 d-flex">
                        <div id="recaptcha"></div>
                      </div>
                      <!---->
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-7 offset-md-3 d-flex">
                        <button
                          type="submit"
                          class="btn btn btn-primary btn-block w-100 btn-primary"
                        >
                          {{__('login')}}
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7 offset-md-3">
                        {{__('don`t have an account yet?')}}
                        <a href="/register" class="small ms-auto">
                          {{__('register_now')}}
                        </a>
                      </div>
                    </div>
                  </form>
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
