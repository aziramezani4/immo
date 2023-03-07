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
                                            <th>{{__('facility')}}</th>
                                            <th>{{__('distance')}}</th>
                                            <th style="width: 130px"></th>
                                        </tr>
                                        </thead>
                                        <tbody id="items">
                                        <tr>
                                            <td>
                                                <select class="form-control @error('facilities[]') is-invalid @enderror" required id="facility_id"  name="facilities[]">
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
                                                @if($errors->has('facilities[]'))
                                                    <div class="error alert-danger">{{ $errors->first('facilities[]') }}</div>
                                                @endif
                                            </td>
                                            <td>

                                                <input
                                                    type="text"
                                                    placeholder="{{__('distance')}}"
                                                    class="form-control form-control"
                                                    spellcheck="false"
                                                    data-ms-editor="true"
                                                    name="distance"

                                                />

                                            </td>
                                            <td>
                                                <div class="btn removeitem btn-danger btn-xs">{{__('remove')}}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <span
                                        onClick="addItem();"
                                        class="btn btn btn-success mt-2 btn-secondary"
                                    >
                                    {{__('add')}}
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
                                    data-max_length="7"
                                    name="images[]"
                                />
                                Drop files here or click to upload.
                            </div>
                            <small data-v-4f3efaec=""
                            >Upload Center: Pictures(.jpeg, .jpg, .png)
                                / Videos:(only .mp4 ) / Doc:(only .pdf
                                )</small
                            >
                            <div style="display: flex; justify-items: flex-start; flex-wrap: wrap; margin-top: 1rem; margin-bottom: 1rem; gap: 1rem;" id="imagesTag" src="" alt="">

                            </div>
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
    var imagesTag = document.getElementById('imagesTag');
    var attachments = document.getElementById('attachments');

    var files = {
        images: [],
        pdfs: []
    }


    var maxLength = attachments.getAttribute('data-max_length');

    var lengthFiles = 0;
    attachments.onchange = evt => {
        const [file] = attachments.files
        if (file && file.type.match('image.*') && lengthFiles < maxLength){
            files.images.push(file);
            lengthFiles ++;
            var html = `<div><img style="width: 100px; height: 100px; object-fit: cover; border-radius: 0.5rem;" src=${URL.createObjectURL(file)}></div>`
            var wrapper = document.createElement('div');
            wrapper.innerHTML = html;
            wrapper.getElementsByTagName('img');
            imagesTag.appendChild(wrapper)
            console.log(files)
        } else if(file && file.type === 'application/pdf' && lengthFiles < maxLength){
            files.pdfs.push(file);
            lengthFiles ++;
            var html = `<div><img style="width: 100px; height: 100px; object-fit: cover; border-radius: 0.5rem;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEX////LBgbygYHKAADcfHzPMTHUU1PXZWXfiorMFxfHAAD0hobUKyvknZ3gT0/kn5/WXl7jk5PxeXn71tbgj4/UQED54+P719fWTU366en++Pjwy8vzjIz2r6/329v87+/wxMTccHDVV1fuvLzpqKjiYWHbRUXXNjblXV3iVVXRIiLudHTihobrsrLSOTnfe3vNEhKAWPopAAAE6ElEQVR4nO3daXuaQBSGYfC4UoghcSUtuCRdbGL8/7+uKhBBiAxmPDND3+cbF2q9AziDVLUshBBCCCGEEEIIIYQQQggh0wu91bYjoZfvh6aqOYXWrkNyumsdenhULcoXzRyy5UR33zQkPm5k+U7C1oNGO2pI8oAnoUbEwJYIzAj12VHvZQKzQl2ITzL30bxQkx1V7ibMC7XYipHcTXgm1IG4cKQCz4Ua7Ki+3E1YEKontm8tVL6j3l6omsggVLyjcgjVbkUWoVIij1AlkUmo8FjkEqrbimxCZUQ+oaodlVGoaCtyCtUQWYVKiLxCFURmoQIit5CfyC5kJ/ILuYkKhMxEFUJeohIhK1GNkJMoXfhTSMhIVCXkI0oXbgWFbETpwoEgkI0oW2iTsJCJKF/4ohlRvvCX6IHIRJQutOlBXMhBvIGw1kb8YaDQpt/iREOF9CJMNFO4N/5pic5sDBXatPn9t/VNoJapwv2eSoONW93m1VRhjBSobbBQ7M8AIYQQQgghhBBCCCGEl4TnM+RPV1Xcr+QmeghpM/xo1F7tMs+TqJ+s8EbLcUE/Gp7Vv0RUKPTyN4veZukTpfvcmtDbZghnK4+t9BT6hVsuBvQJYu2eNrDJQmseQ0oQwTL9TIPZQmty3B3LENa7Y6owmO8L0hv7OeE8Ck6P0/1sF7asmdbC3uHDs24vjJeOHyFKEW/7FSsvSh5nTrld+G3WTRtrOlokwsPf/zAgTOLFTkbox4PdOnmgfk7YFhsONREeFlfx4ntOeFzjJMR57iAVnSrpI9zEi15BaJOdHI3dpgpt5zleHpotHMeLryXCdN1TXihyFGokTLfTrERoO/HyJPtCOxJ7odFAeHd8kk46ylGpMB4xguxKa5I072n+WurvNgN3mY4I6+yOeBKGRf6poebCXIF7hdAzSdjODeonYTIdMF/YjmfXRWE8IEam76WTdAJdGC0oXg6zu3Dw9Bg37RohDKK37sf3uxSEy3h5kRsPnTTdR4vn5XLZ67qUeaKFOc0iXu6bOafZFkft83lpMqWxxmYKS07uzs4t0hOr0NBzi0vCw8mxM54nD7Q8Oz9sgHDhdrrtRfo4ITVPaAWZt2ksN/8+TTOE2dJRr6nC6GNYb6jweVd4z9sA4UhUOPU3JdctDBDao31+2Vqitj+Ke+1t97MdKq68eL1JD6F94S0IoeuHYkBcA4YQQgghhBBCCCGE8L8Xln7C5Yq0FVJn1ZWStu95U1B9X6Hedb1uQbL+AW2vPUkTanv9EELhmi/U9ziU9Vp6eUqhcjwc96RU8aX2mNPcUsgThBBC+H8Lb/TiqY+QVqP+VQ1qEU2cta0bL6z3sy4QSgjC2jVf+GSMcF5939Lq/byS0v+LMbguY0b8q+c0tYCYl0IIIYTNFpJTmYy/jcIRv1d9Vxk/nahQ+Fx913rzM+2EQwgh1F7Y/OPQq76r4ULyvapco0cLoZOnrwMxa4MQQgghhBBCCOUk40T9K8Kyb4mRW71LRdJLv1TjhkVSppfXRhRVP8Wvdvmbqm4tFHjD68tNFW5EIpbfJVO4EVk2oWUFO1VE2sn6b7oVhYr2U6KQB7gnyng/oj5wM+UCHr65Q8pFiFo+Z8YwUGRad5xrL2tfleOuq5+U5MLh/bbD03blsR2BCCGEEEIIIYQQQgghhBBCN+sfypGbO0fYqnMAAAAASUVORK5CYII="></div>`
            var wrapper = document.createElement('div');
            wrapper.innerHTML = html;
            wrapper.getElementsByTagName('img');
            imagesTag.appendChild(wrapper)
            console.log(files)
        }
        else {
            return;
        }
    }


    function openFile() {
        document.getElementById('attachments').click();
    }

    // Add Item
    function addItem() {
        var items = document.getElementById('items')
        var html = `
        <tr>
                                                <td>
                                                    <select class="form-control" id="facility_id" name="facilities[]">
                                                        <option value="0"></option>
@if($facilities)
                                                        @foreach($facilities as $item)
        <option
            value={{$item->re_facilities_id}}>{{$item -> name}} </option>
                                                        @endforeach
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
