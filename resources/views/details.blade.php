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
                  <form class="form-horizontal" method="post" action="{{route('update.property.step1',$property)}}" enctype="multipart/form-data">
                      @csrf

                  <div class="row g-3 bg-transparent">
                    <div
                      no-body=""
                      class="mb-1 border-0 bg-transparent d-block"
                    >
                      <h4 variant="info">Details / Descriptions / Content</h4>
                      <div>
                        <h4 class="mb-3 mt-4 bg-light"></h4>
                        <div class="col-sm-12 mt-4">
                          <label for="name" class="form-label"
                            >Title<span class="small text-danger m-1"
                              >*</span
                            ></label
                          >
                          <input
                            id="name"
                            type="text"
                            name="name"
                            placeholder=""
                            spellcheck="false"
                            data-ms-editor="true"
                            class="form-control"
                          />
                          <!---->
                        </div>
                        <div class="col-sm-12 mt-6">
                          <label for="description" class="form-label mt-4"
                            >Description<span class="small text-danger m-1"
                              >*</span
                            ></label
                          >
                          <textarea
                            id="description"
                            type="number"
                            name="description"
                            placeholder=""
                            spellcheck="false"
                            data-ms-editor="true"
                            class="form-control"
                          ></textarea>
                          <!---->
                          <div class="col-sm-12 mt-4">
                            <label for="content" class="form-label"
                              >Content<span class="small text-danger m-1"
                                >*</span
                              ></label
                            >
                            <textarea
                              id="content"
                              type="text"
                              name="content"
                              placeholder=""
                              spellcheck="false"
                              data-ms-editor="true"
                              class="form-control"
                              style="min-height: 155px"
                            ></textarea>
                            <!---->
                          </div>
                          <h4 class="mb-3 mt-4">Main features</h4>
                          <div
                            class="d-flex flex-row gap-3 justify-content-between"
                          >
                            <div class="col-sm-6">
                              <label for="square" class="form-label"
                                >Square<span class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <div class="position-relative">
                                <input
                                  id="square"
                                  type="number"
                                  name="square"
                                  placeholder=""
                                  spellcheck="false"
                                  data-ms-editor="true"
                                  class="form-control"
                                />
                              </div>
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label
                                for="square_construction	"
                                class="form-label"
                                >Square Constration<span
                                  class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <input
                                id="square_construction"
                                type="number"
                                name="square_construction"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="number_floor" class="form-label"
                                >Floor
                                <span class="small text-danger m-1">*</span> (
                                Ground Floor = 0)</label
                              >
                              <input
                                id="number_floor"
                                type="number"
                                name="number_floor"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="number_bedroom" class="form-label"
                                >Room<span class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <input
                                id="number_bedroom"
                                type="number"
                                step="0.01"
                                name="number_bedroom"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                          </div>
                          <h4 class="mb-3 mt-4">Details</h4>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="number_bathroom" class="form-label"
                                >Bathrooms<span class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <input
                                id="number_bathroom"
                                type="number"
                                name="number_bathroom"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="number_wc" class="form-label"
                                >WC<span class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <input
                                id="number_wc"
                                type="number"
                                name="number_wc"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="construction_year" class="form-label"
                                >Construction Year<span
                                  class="small text-danger m-1"
                                  >*</span
                                ></label
                              >
                              <input
                                id="construction_year"
                                type="number"
                                min="1111"
                                max="2999"
                                name="construction_year"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label
                                for="last_reconstruction"
                                class="form-label"
                                >Last Reconstruction</label
                              >
                              <input
                                id="last_reconstruction"
                                type="number"
                                min="1111"
                                max="2999"
                                name="last_reconstruction"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="last_renovation" class="form-label"
                                >Last Renovation</label
                              >
                              <input
                                id="last_renovation"
                                type="number"
                                min="1111"
                                max="2999"
                                name="last_renovation"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="available_date" class="form-label"
                                >Available Date</label
                              >
                              <input
                                id="available_date"
                                type="text"
                                name="available_date"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                              />
                              <!---->
                            </div>
                          </div>
                        </div>
                        <div class="mb-1 border-0 bg-transparent">
                          <div class="body-bg shadow-none border-0"></div>
                          <div
                            id="accordion-3"
                            accordion="my-accordion"
                            role="tabpanel"
                          >
                            <h4 class="mb-3">Costs</h4>
                            <div
                              class="d-flex w-100 flex-row gap-2 px-3 border-0"
                            >
                              <!---->
                              <!---->
                              <div class="col-sm-3">
                                <!---->
                                <!---->
                                <div class="d-flex flex-row gap-3">
                                  <div class="col-sm-6">
                                    <label for="price" class="form-label"
                                      >Price<span class="small text-danger m-1"
                                        >*</span
                                      ></label
                                    >
                                    <input
                                      id="price"
                                      type="number"
                                      name="price"
                                      placeholder=""
                                      spellcheck="false"
                                      data-ms-editor="true"
                                      class="form-control"
                                    />
                                    <!---->
                                  </div>
                                  <div class="col-sm-2">
                                    <label for="currency" class="form-label"
                                      >currency<span
                                        class="small text-danger m-1"
                                        >*</span
                                      ></label
                                    >
                                    <select
                                      name="currency_id"
                                      class="form-control select"
                                    >
                                      <option selected="selected" value="1">
                                        CHF
                                      </option>
                                      <option value="2">€ EUR</option>
                                      <option value="3">$ USD</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="d-flex flex-row justify-content-end gap-3 m-2 mt-3"
                            >
                              <a
                                href="/properties/create"
                                class="rounded px-2 py-2 col-sm-2 text-center text-dark text-lg border bg-white border-dark"
                                style="border-radius: 8px !important"
                              >
                                previous
                              </a>
                              <button
                                type="submit"
                                variant="light"
                                class="rounded btn py-2 px-2 col-sm-2 text-lg border bg-dark text-white"
                                style="border-radius: 8px !important"
                              >
                                <a href="#step2"></a>
                                next
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
