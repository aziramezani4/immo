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
                          >{{__('contact_name')}}<span class="small text-danger m-1"
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
                          @if($errors->has('contact_name'))
                              <div class="error alert-danger">{{ $errors->first('contact_name') }}</div>
                      @endif
                        <!---->
                      </div>
                      <div class="col-sm-6 mt-4">
                        <label for="contact_phone_number" class="form-label"
                          >{{__('contact_phone_number')}}<span
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
                          @if($errors->has('contact_phone_number'))
                              <div class="error alert-danger">{{ $errors->first('contact_phone_number') }}</div>
                          @endif
                      </div>
                      <!---->
                    </div>
                    <h4 class="mb-3 mt-4">{{__('publish')}}</h4>
                    <div
                      class="d-flex flex-row justify-content-between gap-2 mb-4"
                    >
                      <div class="col-sm-6 mt-4">
                        <label for="status" class="form-label"
                          >{{__('status')}}<span class="small text-danger m-1"
                            >*</span
                          ></label
                        >
                          <select class="form-control  @error('status') is-invalid @enderror" required id="status" name="status">
                              <option value=""></option>
                              <option value="{{__('not_available')}}" name="status">{{__('not_available')}}</option>
                              <option value="{{__('pre_sale')}}" name="status">{{__('pre_sale')}}</option>
                              <option value="{{__('selling')}}" name="status">{{__('selling')}}</option>
                              <option value="{{__('sold')}}" name="status">{{__('sold')}}</option>
                              <option value="{{__('renting')}}" name="status">{{__('renting')}}</option>
                              <option value="{{__('rented')}}" name="status">{{__('rented')}}</option>
                              <option value="{{__('building')}}" name="status">{{__('building')}}</option>
                              <option value="{{__('reserved')}}" name="status">{{__('reserved')}}</option>
                              <option value="{{__('for_rent')}}" name="status">{{__('for_rent')}}</option>
                              <option value="{{__('for_sale')}}" name="status">{{__('for_sale')}}</option>

                          </select>

                          <!---->
                      </div>
                      <div class="col-md-6 mt-4">
                        <label class="form-label fw-bold w-100 m-2"
                          >Advertiser
                            <select class="form-control" id="advertising_type" name="advertising_type">
                                <option value=""></option>
                                <option value="{{__('agent')}}" name="advertising_type">{{__('agent')}}</option>
                                <option value="{{__('owner')}}" name="advertising_type">{{__('owner')}}</option>
                                <option value="{{__('other')}}" name="advertising_type">{{__('other')}}</option>

                            </select>
                        </label>
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
                          <a href="{{route('step2',$property)}}">
                              previous
                          </a>
                      </button>
                      <button
                        type="submit"
                        class="btn rounded btn py-2 px-2 col-sm-4 text-lg border bg-dark text-white btn-primary"
                        style="border-radius: 8px !important"
                      >
                        {{__('Next and Choose Package')}}
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
