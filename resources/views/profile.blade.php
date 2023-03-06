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
                  <span>{{__('settings')}}</span>
                  <span class="badge bg-primary rounded-pill"></span>
                </h4>
                <ul class="nav flex-column nav-pills">
                  <li class="nav-item">
                    <a
                      href="{{route('profile')}}"
                      aria-current="page"
                      class="nav-link router-link-exact-active active"
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
                        {{__('profile')}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('password')}}" class="nav-link"
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
                        {{__('')}} Password
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-7 col-lg-8">
                <div data-v-464842b4="" class="row">
                  <div data-v-464842b4="" class="col-md-3 order-md-last mb-3">
                    <div data-v-464842b4="" class="avatar-view mt-card-avatar">
                      <img
                        data-v-464842b4=""
                        src="https://www.gravatar.com/avatar/39e9f76e1acac6dc8761e06359dc562d.jpg?s=200&amp;d=mp"
                        alt="avatar"
                        height="200"
                        width="200"
                        class="rounded-3"
                      />
                      <input
                        data-v-464842b4=""
                        type="file"
                        accept="image/*"
                        hidden="hidden"
                      />
                      <div data-v-464842b4="" class="mt-overlay">
                        <svg
                          data-v-464842b4=""
                          aria-hidden="true"
                          focusable="false"
                          data-prefix="fa"
                          data-icon="edit"
                          role="img"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                          class="text-white svg-inline--fa fa-edit fa-w-18"
                        >
                          <path
                            data-v-464842b4=""
                            fill="currentColor"
                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"
                            class=""
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <!---->
                  </div>
                  <div data-v-464842b4="" class="col-md-7 col-lg-8">
                    <h4 data-v-464842b4="" class="mb-3">{{__('your_info')}}</h4>
                      <form enctype="multipart/form-data" class="w-100" method="POST"
                            action="{{ route('update.profile') }}">
                          @csrf

{{--                      <div--}}
{{--                        data-v-464842b4=""--}}
{{--                        role="alert"--}}
{{--                        class="alert alert-success alert-dismissible"--}}
{{--                      >--}}
{{--                        <button--}}
{{--                          type="button"--}}
{{--                          aria-label="Dismiss"--}}
{{--                          class="btn-close"--}}
{{--                        ></button>--}}
{{--                        <div>Your info has been updated!</div>--}}
{{--                      </div>--}}
                      <div data-v-464842b4="" class="row gy-3">
                        <div data-v-464842b4="" class="col-sm-6">
                          <label
                            data-v-464842b4=""
                            for="firstName"
                            class="form-label"
                            >{{__('first_name')}}</label
                          >
                          <input
                            data-v-464842b4=""
                            id="firstName"
                            type="text"
                            name="first_name"
                            placeholder=""
                            spellcheck="false"
                            data-ms-editor="true"
                            class="form-control"
                          />
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-sm-6">
                          <label
                            data-v-464842b4=""
                            for="lastName"
                            class="form-label"
                            >{{__('last_name')}}</label
                          >
                          <input
                            data-v-464842b4=""
                            id="lastName"
                            type="text"
                            name="last_name"
                            placeholder=""
                            spellcheck="false"
                            data-ms-editor="true"
                            class="form-control"
                          />
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-12">
                          <label
                            data-v-464842b4=""
                            for="username"
                            class="form-label"
                            >{{__('username')}}</label
                          >
                          <div
                            data-v-464842b4=""
                            class="input-group has-validation"
                          >
                            <span data-v-464842b4="" class="input-group-text"
                              >@</span
                            >
                            <input
                              data-v-464842b4=""
                              id="username"
                              type="text"
                              name="username"
                              placeholder="Username"
                              spellcheck="false"
                              data-ms-editor="true"
                              readonly="readonly"
                              required="required"
                              class="form-control"
                            />
                            <!---->
                          </div>
                        </div>
                        <div data-v-464842b4="" class="col-12">
                          <label data-v-464842b4="" class="form-label"
                            >{{__('phone')}}</label
                          >
                          <div
                            data-v-464842b4=""
                            class="input-group has-validation"
                          >
                            <span data-v-464842b4="" class="input-group-text"
                              ><svg
                                data-v-464842b4=""
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="mobile"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512"
                                class="svg-inline--fa fa-mobile fa-w-10 fa-fw"
                              >
                                <path
                                  data-v-464842b4=""
                                  fill="currentColor"
                                  d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"
                                  class=""
                                ></path></svg
                            >
                          </span>
                            <input
                              data-v-464842b4=""
                              name="phone"
                              type="tel"
                              placeholder=""
                              class="form-control form-control"
                              id="__BVID__90"
                            />
                          </div>
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-12">
                          <label
                            data-v-464842b4=""
                            for="email"
                            class="form-label"
                            >{{__('email')}}</label
                          >
                          <div
                            data-v-464842b4=""
                            class="input-group has-validation"
                          >
                            <span data-v-464842b4="" class="input-group-text"
                              ><svg
                                data-v-464842b4=""
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="envelope"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="svg-inline--fa fa-envelope fa-w-16 fa-fw"
                              >
                                <path
                                  data-v-464842b4=""
                                  fill="currentColor"
                                  d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                                  class=""
                                ></path></svg
                            ></span>
                            <input
                              data-v-464842b4=""
                              id="email"
                              type="email"
                              name="email"
                              placeholder="you@example.com"
                              readonly="readonly"
                              class="form-control"
                            />
                            <!---->
                          </div>
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-12">
                          <label
                            data-v-464842b4=""
                            for="address"
                            class="form-label"
                            >{{__('address')}}</label
                          >
                          <input
                            data-v-464842b4=""
                            id="address"
                            type="text"
                            placeholder="1234 Main St"
                            spellcheck="false"
                            data-ms-editor="true"
                            class="form-control"
                          />
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-md-12">
                          <label data-v-464842b4="" class="form-label"
                            >{{__('birthday')}}</label
                          >
                          <input
                            data-v-464842b4=""
                            type="date"
                            placeholder="YYYY-MM-DD"
                            autocomplete="off"
                            class="form-select form-control"
                            id="__BVID__97"
                          />
                          <!---->
                        </div>
                        <div data-v-464842b4="" class="col-md-12">
                          <label data-v-464842b4="" class="form-label"
                            >{{__('gender')}}</label
                          >
                          <select
                            data-v-464842b4=""
                            class="form-select custom-select"
                            id="__BVID__99"
                          >
                            <option value="">{{__('please select an option')}}</option>
                            <option value="male">{{__('male')}}</option>
                            <option value="female">{{__('female')}}</option>
                            <option value="other">
                                {{__('other')}}
                            </option>
                          </select>
                          <!---->
                        </div>
                      </div>
                      <hr data-v-464842b4="" class="my-4" />
                      <div data-v-464842b4="" class="mb-3 row">
                        <div data-v-464842b4="" class="col-md-12 ms-md-auto">
                          <button
                            data-v-464842b4=""
                            type="submit"
                            class="btn w-100 btn btn-primary btn-lg btn-success"
                          >
                              {{__('update')}}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>


</html>
