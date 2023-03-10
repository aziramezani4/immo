<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
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
{{--            @include('layout.navbar')--}}

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
{{--                        <form enctype="multipart/form-data" class="w-100" method="POST"--}}
{{--                              action="{{ route('update.property.step2',$property) }}">--}}
{{--                            @csrf--}}
                                              <div  class="mb-1 bg-transparent border-0 d-block">
                                                <div
                                                  id="accordion-4"
                                                  accordion="my-accordion"
                                                  role="tabpanel"
                                                >
                            <h4 class="mb-3">
                                Properties Features, fittings and equipment
                            </h4>
                            <div class="col-sm-12">

                                <div class="row">
                                    @foreach($features as $feature)
                                        <div class="col-sm-5">
                                            <label
                                            ><input
                                                                                    id="50"
                                                    reduce="function(f) {
                                            return f.id
                                          }"
                                                    type="checkbox"
                                                    name="features[]"
{{--                                                                                    value="{{$feature->id}}"--}}
                                                />
                                                {{$feature->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
{{--                            <button type="submit">Send Feature</button>--}}
{{--                        </form>--}}
                    </div>
                                              </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

{{--@foreach($all as $item)--}}
{{--    <h3>name:{{$item->name}}  qty:{{$item->qty}}</h3><button>--}}
{{--        <a href="notstarted/delete/{{$item->id}}" style="color: #8B0000">--}}
{{--            <span title="Delete Task"><i class="far fa-trash-alt"></i></span>remove--}}
{{--        </a>--}}
{{--        </button>--}}
{{--@endforeach--}}
{{--<form class="form-horizontal" method="post" action="{{route('save.qty')}}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <table id='tickets'>--}}
{{--    </table>--}}
{{--<input name="name" type="text"/>--}}
{{--<input name="qty" type="text"/>--}}

{{--<div >--}}
{{--    <button type="submit" class='create-ticket free'>Add</button>--}}
{{--</div>--}}
{{--</form>--}}

<h2>Location and Surroundings</h2>
<br>
<br>
<h3>Facility Distance(km or m)</h3>
<form class="form-horizontal" method="post" action="{{route('store.facility')}}" enctype="multipart/form-data">
    @csrf
<select class="form-control" id="facility_id" name="facility_id">
    <option value="0"></option>

    @foreach($facilities as $item)
        <option value={{$item->re_facilities_id}}>{{$item -> name}} </option>
    @endforeach

</select>

<input name="distance" type="text"/>
    <button type="submit">submit</button>
</form>
<br>
<br>
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
        variant="light"
        class="rounded btn py-2 px-2 col-sm-2 text-lg border bg-dark text-white"
        style="border-radius: 8px !important"
    ><a href="{{route('step3',$property)}}">
        next step</a>
    </button>
    {{--                      </div>--}}
    {{--                    </div>--}}
    <hr class="my-4"/>
    <!---->
</div>
</body>
</html>
