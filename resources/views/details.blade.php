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
                      <h4 variant="info">{{__('details')}} / {{__('description')}} /{{__('Content')}} </h4>
                      <div>
                        <h4 class="mb-3 mt-4 bg-light"></h4>
                        <div class="col-sm-12 mt-4">
                          <label for="name" class="form-label"
                            >{{__('title')}}<span class="small text-danger m-1"
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
                            required
                          />

                            @if($errors->has('name'))
                                <div class="error alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                          <!---->
                        </div>
                        <div class="col-sm-12 mt-6">
                          <label for="description" class="form-label mt-4"
                            >{{__('description')}}<span class="small text-danger m-1"
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
                            required
                          ></textarea>
                            @if($errors->has('description'))
                                <div class="error alert-danger">{{ $errors->first('description') }}</div>
                        @endif
                          <!---->
                          <div class="col-sm-12 mt-4">
                            <label for="content" class="form-label"
                              >{{__('content')}}<span class="small text-danger m-1"
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
                              required
                            ></textarea>
                              @if($errors->has('content'))
                                  <div class="error alert-danger">{{ $errors->first('content') }}</div>
                          @endif
                            <!---->
                          </div>
                          <h4 class="mb-3 mt-4">{{__('main features')}}</h4>
                          <div
                            class="d-flex flex-row gap-3 justify-content-between"
                          >
                            <div class="col-sm-6">
                              <label for="square" class="form-label"
                                >{{__('square')}}<span class="small text-danger m-1"
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
                                  required
                                />
                                  @if($errors->has('square'))
                                      <div class="error alert-danger">{{ $errors->first('square') }}</div>
                                  @endif
                              </div>
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label
                                for="square_construction	"
                                class="form-label"
                                >{{__('square')}}<span
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
                                required
                              />
                                @if($errors->has('square_construction'))
                                    <div class="error alert-danger">{{ $errors->first('square_construction') }}</div>
                            @endif
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="number_floor" class="form-label"
                                >{{__('number_floor')}}
                                <span class="small text-danger m-1">*</span>

                                </label
                              >
                              <input
                                id="number_floor"
                                type="number"
                                name="number_floor"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                                required
                              />
                                @if($errors->has('number_floor'))
                                    <div class="error alert-danger">{{ $errors->first('number_floor') }}</div>
                            @endif
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="number_bedroom" class="form-label"
                                >{{__('number_bedroom')}}<span class="small text-danger m-1"
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
                                required
                              />
                                @if($errors->has('number_bedroom'))
                                    <div class="error alert-danger">{{ $errors->first('number_bedroom') }}</div>
                            @endif
                              <!---->
                            </div>
                          </div>
                          <h4 class="mb-3 mt-4">{{__('details')}}</h4>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="number_bathroom" class="form-label"
                                >{{__('number_bathroom')}}<span class="small text-danger m-1"
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
                                required
                              />
                                @if($errors->has('number_bathroom'))
                                    <div class="error alert-danger">{{ $errors->first('number_bathroom') }}</div>
                            @endif
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="number_wc" class="form-label"
                                >{{__('number_wc')}}<span class="small text-danger m-1"
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
                                required
                              />
                                @if($errors->has('number_wc'))
                                    <div class="error alert-danger">{{ $errors->first('number_wc') }}</div>
                            @endif
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="construction_year" class="form-label"
                                >{{__('construction_year')}}<span
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
                                @if($errors->has('construction_year'))
                                    <div class="error alert-danger">{{ $errors->first('construction_year') }}</div>
                            @endif
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label
                                for="last_reconstruction"
                                class="form-label"
                                >{{__('last_reconstruction')}}</label
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
                                @if($errors->has('last_reconstruction'))
                                    <div class="error alert-danger">{{ $errors->first('last_reconstruction') }}</div>
                            @endif
                              <!---->
                            </div>
                          </div>
                          <div class="d-flex flex-row gap-3">
                            <div class="col-sm-6">
                              <label for="last_renovation" class="form-label"
                                >{{__('last_renovation')}}</label
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
                                @if($errors->has('last_renovation'))
                                    <div class="error alert-danger">{{ $errors->first('last_renovation') }}</div>
                            @endif
                              <!---->
                            </div>
                            <div class="col-sm-6">
                              <label for="available_date" class="form-label"
                                >{{__('available_date')}}</label
                              >
                              <input
                                id="available_date"
                                type="text"
                                name="available_date"
                                placeholder=""
                                spellcheck="false"
                                data-ms-editor="true"
                                class="form-control"
                                required
                              />
                                @if($errors->has('available_date'))
                                    <div class="error alert-danger">{{ $errors->first('available_date') }}</div>
                            @endif
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
                            <h4 class="mb-3">{{__('Costs')}}</h4>
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
                                      >{{__('Price')}}<span class="small text-danger m-1"
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
                                      required
                                    />
                                      @if($errors->has('price'))
                                          <div class="error alert-danger">{{ $errors->first('price') }}</div>
                                  @endif
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
                                href="{{route('create_peoperty')}}"
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
{{--                                <a href="#step2"></a>--}}
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
