<html lang="en">
  <head>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Write a property · IMMO ALL</title>
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
              <div role="tablist" class="accordion">
                <div class="text-center border my-3">
                  <h4 class="fw-bolder rounded mt-2">
                    For Sale :: Sonstiges :: undefined
                  </h4>
                </div>
              </div>
              <div
                class="col-xs-12 col-md-10 col-xl-10 col-lg-12 p-4 pb-0 pt-lg-5 align-items-center"
              >
                  <form enctype="multipart/form-data" class="w-100" method="POST"
                        action="{{ route('update.property.step3',$property) }}">
                      @csrf

                  <div no-body="" class="mb-1 bg-transparent border-0 d-block">
                    <h4 class="mb-3 mt-4">Contact viewer</h4>
                    <div
                      class="d-flex flex-row justify-content-between gap-2 mb-4"
                    >
                      <div class="col-sm-6 mt-4">
                        <label for="contact_name" class="form-label"
                          >Contact name<span class="small text-danger m-1"
                            >*</span
                          ></label
                        >
                        <input
                          id="contact_name"
                          type="text"
                          name="contact_name"
                          placeholder=""
                          spellcheck="false"
                          data-ms-editor="true"
                          class="form-control"
                          style="border-block-color: red"
                        />
                        <!---->
                      </div>
                      <div class="col-sm-6 mt-4">
                        <label for="contact_phone_number" class="form-label"
                          >Contact phone number<span
                            class="small text-danger m-1"
                            >*</span
                          ></label
                        >
                        <input
                          id="contact_phone_number"
                          type="tel"
                          name="contact_phone_number"
                          placeholder=""
                          spellcheck="false"
                          data-ms-editor="true"
                          class="form-control"
                          style="border-block-color: red"
                        />
                      </div>
                      <!---->
                    </div>
                    <h4 class="mb-3 mt-4">Publish</h4>
                    <div
                      class="d-flex flex-row justify-content-between gap-2 mb-4"
                    >
                      <div class="col-sm-6 mt-4">
                        <label for="status" class="form-label"
                          >Status<span class="small text-danger m-1"
                            >*</span
                          ></label
                        >
                        <div
                          dir="auto"
                          class="v-select vs--single vs--searchable"
                          id="status"
                          style="border-block-color: red"
                        >
                          <div
                            id="vs5__combobox"
                            role="combobox"
                            aria-expanded="false"
                            aria-owns="vs5__listbox"
                            aria-label="Search for option"
                            class="vs__dropdown-toggle"
                          >
                            <div class="vs__selected-options">
                              <span class="vs__selected">
                                Renting
                                <!----></span
                              >
                              <input
                                aria-autocomplete="list"
                                aria-labelledby="vs5__combobox"
                                aria-controls="vs5__listbox"
                                type="search"
                                autocomplete="off"
                                class="vs__search"
                              />
                            </div>
                            <div class="vs__actions">
                              <button
                                type="button"
                                title="Clear Selected"
                                aria-label="Clear Selected"
                                class="vs__clear"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10"
                                  height="10"
                                >
                                  <path
                                    d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"
                                  ></path>
                                </svg>
                              </button>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="10"
                                role="presentation"
                                class="vs__open-indicator"
                              >
                                <path
                                  d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"
                                ></path>
                              </svg>
                              <div class="vs__spinner" style="display: none">
                                Loading...
                              </div>
                            </div>
                          </div>
                          <ul
                            id="vs5__listbox"
                            role="listbox"
                            style="display: none; visibility: hidden"
                          ></ul>
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-6 mt-4">
                        <label class="form-label fw-bold w-100 m-2"
                          >Advertiser
                          <div
                            dir="auto"
                            class="v-select vs--single vs--searchable"
                          >
                            <div
                              id="vs6__combobox"
                              role="combobox"
                              aria-expanded="false"
                              aria-owns="vs6__listbox"
                              aria-label="Search for option"
                              class="vs__dropdown-toggle"
                            >
                              <div class="vs__selected-options">
                                <input
                                  required="required"
                                  aria-autocomplete="list"
                                  aria-labelledby="vs6__combobox"
                                  aria-controls="vs6__listbox"
                                  type="search"
                                  autocomplete="off"
                                  class="vs__search"
                                />
                              </div>
                              <div class="vs__actions">
                                <button
                                  type="button"
                                  title="Clear Selected"
                                  aria-label="Clear Selected"
                                  class="vs__clear"
                                  style="display: none"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="10"
                                    height="10"
                                  >
                                    <path
                                      d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"
                                    ></path>
                                  </svg>
                                </button>
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="14"
                                  height="10"
                                  role="presentation"
                                  class="vs__open-indicator"
                                >
                                  <path
                                    d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"
                                  ></path>
                                </svg>
                                <div class="vs__spinner" style="display: none">
                                  Loading...
                                </div>
                              </div>
                            </div>
                            <ul
                              id="vs6__listbox"
                              role="listbox"
                              style="display: none; visibility: hidden"
                            ></ul></div
                        ></label>
                        <!---->
                      </div>
                    </div>
                    <div
                      class="d-flex flex-row justify-content-end gap-3 m-2 mt-3"
                    >
                      <button
                        block=""
                        type="button"
                        variant="dark"
                        class="rounded btn px-2 py-2 col-sm-2 text-dark text-lg border bg-white border-dark collapsed"
                        aria-expanded="false"
                        aria-controls="accordion-6"
                        style="
                          border-radius: 8px !important;
                          overflow-anchor: none;
                        "
                      >
                        previous
                      </button>
                      <button
                        type="submit"
                        class="btn rounded btn py-2 px-2 col-sm-4 text-lg border bg-dark text-white btn-primary"
                        style="border-radius: 8px !important"
                      >
                        Next and Choose Package
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>
          @include('layout.footer')
      </div>
    </div>

    <div
      class="pac-container pac-logo hdpi"
      style="
        display: none;
        width: 0px;
        position: absolute;
        left: 0px;
        top: 89px;
      "
    ></div>
    <div class="v-toast v-toast--top"></div>
    <div class="v-toast v-toast--bottom"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
