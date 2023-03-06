<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Write a property · IMMO ALL</title>

    <link rel="stylesheet" href="/assets/css/styles.css"/>
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

                        <form enctype="multipart/form-data" class="w-100" method="post"
                              action="{{ route('update.feature.facility',$property) }}">
                            @csrf

                        <div no-body="" class="mb-1 bg-transparent border-0 d-block">

                            <h4 class="mb-3">
                                {{__('properties - equipment and features')}}
                            </h4>

                            <div class="row">
                             @foreach($features as $feature)
                                <div class="col-sm-5">
                                    <label
                                    ><input
                                            id="50"
                                            value="{{$feature->name}}"
                                            type="checkbox"
                                            name="features[]"
                                            {{--                                                                                    value="{{$feature->id}}"--}}
                                        />
                                     {{$feature->name}}
                                    </label>
                                </div>
                             @endforeach
                            </div>

                            <h4 class="mb-3">{{__('location and surroundings')}}</h4>

                            <div class="col-sm-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>{{__('')}}Facility</th>
                                        <th>{{__('')}}Distance(km or m)</th>
                                        <th style="width: 130px"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="items">
                                    <tr>
                                        <td>
                                            <select class="form-control" id="facility_id" name="facility_id[]">
                                                <option value="0"></option>
                                                @if(request()->segment(1) != 'de')
                                               @if($facilities)
                                                @foreach($facilities as $item)
                                                    <option
                                                        value={{$item->re_facilities_id}}>{{$item -> name}} </option>
                                                @endforeach
                                                @endif
                                                @endif
                                                @if(request()->segment(1) == 'de')
                                                @if($facilitiess)
                                                    @foreach($facilitiess as $item)
                                                        <option
                                                            value={{$item->id}}>{{$item -> name}} </option>
                                                    @endforeach
                                                @endif
                                                @endif
                                            </select>
                                        </td>
                                        <td>

                                            <input
                                                type="text"
                                                placeholder="Distance(km or m)"
                                                class="form-control form-control"
                                                spellcheck="false"
                                                data-ms-editor="true"
                                                name="distance"
                                            />
                                        </td>
                                        <td>
                                            <div class="btn removeitem btn-danger btn-xs">{{__('')}}Remove</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <span
                                    onClick="addItem();"
                                    class="btn btn btn-success mt-2 btn-secondary"
                                >
                                    {{__('')}}Add
                                </span>
                            </div>

                            <hr class="my-4"/>
                            <div
                                data-v-4f3efaec=""
                                no-body=""
                                class="mb-1 bg-transparent border-0 mt-4 mb-4"
                            >
                                <div
                                    data-v-4f3efaec=""
                                    id="accordion-6"
                                    accordion="my-accordion"
                                    role="tabpanel"
                                >
                                    <div data-v-4f3efaec="" class="file-upload">
                                        <div data-v-4f3efaec="" class="form-group">
                                            <div data-v-4f3efaec="" class="form-group">
                                                <div data-v-4f3efaec="">
                                                    <div
                                                        onclick="openFile();"
                                                        data-v-4f3efaec=""
                                                        id="drop-zone"
                                                        class="upload-drop-zone p-12 bg-gray-100"
                                                    >
                                                        <input
                                                            data-v-4f3efaec=""
                                                            id="attachments"
                                                            type="file"
                                                            multiple="multiple"
                                                            accept=".jpeg,.png,.mp4,.pdf,.jpg"
                                                            hidden="hidden"
                                                            name="fields[assetsFieldHandle][]"
                                                        />
                                                        Drop files here or click to upload.
                                                    </div>
                                                    <small data-v-4f3efaec=""
                                                    >Upload Center: Pictures(.jpeg, .jpg, .png)
                                                        / Videos:(only .mp4 ) / Doc:(only .pdf
                                                        )</small
                                                    >
                                                </div>
                                                <hr data-v-4f3efaec=""/>
                                                <div
                                                    data-v-4f3efaec=""
                                                    class="form-group files"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
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
                                ><a href="{{route('second_step1')}}">
                                        previous</a>
                                </button>
                                <button
                                    type="submit"
                                    variant="light"
                                    class="rounded btn py-2 px-2 col-sm-2 text-lg border bg-dark text-white"
                                    style="border-radius: 8px !important"
                                >
                                    next step
                                </button>
                            </div>
                        </div>
                        <hr class="my-4"/>

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
        top: 705px;
      "
></div>
<div class="v-toast v-toast--top"></div>
<div class="v-toast v-toast--bottom"></div>


<script>
    // Open File Input
    function openFile() {
        document.getElementById('attachments').click();
    }

    // Add Item



    function addItem() {
        var items = document.getElementById('items')
        var html = `
        <tr>
                                                <td>
                                                    <select class="form-control" id="facility_id" name="facility_id[]">
                                                        <option value="0"></option>

                                                        @foreach($facilities as $item)
        <option
            value={{$item->re_facilities_id}}>{{$item -> name}} </option>
                                                        @endforeach

        </select>
    </td>
    <td>

    <input
    type="text"
    placeholder="Distance(km or m)"
    class="form-control form-control"
    spellcheck="false"
    data-ms-editor="true"
    name="distance"
    />
    </td>
    <td>
        <div class="btn removeitem btn-danger btn-xs">Remove</div>
    </td>
</tr>
`
        var wrapper = document.createElement('tr');
        wrapper.innerHTML = html;
        wrapper.getElementsByTagName('td');
        items.appendChild(wrapper)

        for (var i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', myFunction, false);
        }
    }

    // Remove Item
    var elements = document.getElementsByClassName("removeitem");
    var myFunction = function (e) {
        var removeEl = e.target.parentNode.parentNode;
        items.removeChild(removeEl);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
