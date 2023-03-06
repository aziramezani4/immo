<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Settings · IMMO ALL</title>

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
            <div class="row justify-content-center g-5">
              <div class="col-md-3 order-md-first mb-3">
                <h4
                  class="d-flex justify-content-between align-items-center mb-3"
                >
                  <span>Settings</span>
                  <span class="badge bg-primary rounded-pill"></span>
                </h4>
                <ul class="nav flex-column nav-pills">
                  <li class="nav-item">
                    <a href="{{route('profile')}}" class="nav-link"
                      ><svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="user"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        class="svg-inline--fa fa-user fa-w-14 fa-fw"
                      >
                        <path
                          fill="currentColor"
                          d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                          class=""
                        ></path>
                      </svg>
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="{{route('password')}}"
                      aria-current="page"
                      class="nav-link router-link-exact-active active"
                      ><svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="lock"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        class="svg-inline--fa fa-lock fa-w-14 fa-fw"
                      >
                        <path
                          fill="currentColor"
                          d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"
                          class=""
                        ></path>
                      </svg>
                      Password
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-7 col-lg-8">
                <div>
                  <h4 class="mb-3">Your Password</h4>
                  <form novalidate="novalidate" class="needs-validation" method="post" action="{{route('update.password')}}">
                      @csrf
{{--                    <div--}}
{{--                      role="alert"--}}
{{--                      class="alert alert-success alert-dismissible"--}}
{{--                    >--}}
{{--                      <button--}}
{{--                        type="button"--}}
{{--                        aria-label="Dismiss"--}}
{{--                        class="btn-close"--}}
{{--                      ></button>--}}
{{--                      <div>Your password has been updated!</div>--}}
{{--                    </div>--}}
                    <div class="row gy-3">
                      <div class="col-12">
                        <label for="password" class="form-label"
                          >New Password</label
                        >
                        <input
                          id="password"
                          type="password"
                          name="password"
                          spellcheck="false"
                          data-ms-editor="true"
                          class="form-control"
                        />
                        <!---->
                      </div>
                      <div class="col-12">
                        <label for="rePassword" class="form-label"
                          >Confirm Password</label
                        >
                        <input
                          id="rePassword"
                          type="password"
                          name="password_confirmation"
                          spellcheck="false"
                          data-ms-editor="true"
                          class="form-control"
                        />
                        <!---->
                      </div>
                    </div>
                    <hr class="my-4" />
                    <div class="mb-3 row">
                      <div class="col-md-12 ms-md-auto">
                        <button
                          type="submit"
                          class="btn w-100 btn btn-primary btn-lg btn-success"
                        >
                          Update
                        </button>
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
