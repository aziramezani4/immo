{{--<x-guest-layout>--}}

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Register · IMMO ALL</title>
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body>

<!-- Navigation -->
@include('layout.navbar')

<!-- Content - Form -->
<div class="container-lg mt-4">
    <div
        class="d-flex justify-content-center align-items-center align-content-center mb-5"
    >
        <div class="row w-100 mt-5">
            <div title="Register" class="col-7 m-auto">
                <div class="text-center mb-4">
                    <img
                        src="/assets/images/person-circle.svg"
                        alt=""
                        width="72"
                        height="72"
                        class="mb-4"
                    />
                    <h1 class="h3 mb-3 font-weight-normal">{{__('register')}}</h1>
                </div>
                <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                    @csrf
                    <div class="mb-3 row">
                        <label
                            class="col-md-3 col-form-label text-md-end"
                        ></label>
                        <div class="col-md-7">

                            <!-- Content - Login With Google -->
                            <a href="{{ url('/google-login') }}">
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
                            </a>
                        </div>
                        <label
                            class="col-md-3 col-form-label text-md-end"
                        ></label>
                        <div class="col-md-7">
                            <div class="d-flex">
                                <hr class="w-100" />
                                <span class="text-uppercase mx-3">or</span>
                                <hr class="w-100" />
                            </div>
                        </div>
                    </div>

                    <!-- first_name -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('first_name')}}</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                    </div>

                    <!-- last_name -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('last_name')}}</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                    </div>


                    <!-- phone -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('phone')}}</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('email')}}</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('password')}}</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="password" class="form-control"
                                          type="password"
                                          name="password"
                                          required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >{{__('confirm_password')}}</label
                        >
                        <div class="col-md-7">

                            <x-text-input id="password_confirmation" class="form-control"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-7 offset-md-3 d-flex">

                            <!-- Content - Register Button -->

                            <x-primary-button class="btn btn btn-primary btn-block w-100 btn-primary">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </div>

                    <!-- Content - Bottom Texts -->
                    <div class="mb-3 row">
                        <div class="col-md-7 offset-md-3">
                            {{__('by clicking Register, I agree that I have read and accepted the ImmoAll AGB')}}
                            <a href="/" class="small ms-auto router-link-active">
                                {{__('terms of Use and Privacy Policy')}}
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 offset-md-3">
                            {{__('already have login and password?')}}
                            <a href="{{ route('login') }}" class="small ms-auto"> Sign in </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Footer -->
@include('layout.footer')
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
{{--</x-guest-layout>--}}
