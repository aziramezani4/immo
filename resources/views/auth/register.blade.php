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
<nav
    data-v-6dde423b=""
    class="navbar navbar-expand-lg navbar-light bg-white"
>
    <div data-v-6dde423b="" class="container">
        <a
            data-v-6dde423b=""
            href="/"
            class="navbar-brand router-link-active"
        >

            <!-- Navigation - Logo -->
            <img
                data-v-6dde423b=""
                src="/assets/images/immoall-logo.png"
                height="30"
                class=""
            /></a>

        <!-- Navigation - Toggle Button -->
        <button
            data-v-6dde423b=""
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
            class="navbar-toggler"
        >
            <span data-v-6dde423b="" class="navbar-toggler-icon"></span>
        </button>
        <div
            data-v-6dde423b=""
            id="navbar"
            class="collapse navbar-collapse"
        >

            <!-- Navigation - Menu -->
            <ul data-v-6dde423b="" class="navbar-nav ms-auto">
                <li data-v-6dde423b="" class="nav-item">
                    <a data-v-6dde423b="" href="/" class="nav-link">
                        Home Page
                    </a>
                </li>
                <li data-v-6dde423b="" class="nav-item">
                    <a data-v-6dde423b="" href="{{ route('login') }}" class="nav-link">
                        Log In
                    </a>
                </li>
                <li data-v-6dde423b="" class="nav-item">
                    <a
                        data-v-6dde423b=""
                        href="{{ route('register') }}"
                        class="nav-link router-link-exact-active active"
                        aria-current="page"
                    >
                        Register
                    </a>
                </li>

                <!-- Navigation - Languange Items -->
                <li data-v-6dde423b="" class="nav-item dropdown">
                    <a
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle"
                    ><img
                            src="/assets/images/flags/en.svg"
                            alt="flag"
                            width="20"
                            height="20"
                            class="me-1"
                        /></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item"
                        ><img
                                src="/assets/images/flags/de.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            Deutsch </a
                        ><a href="#" class="dropdown-item"
                        ><img
                                src="/assets/images/flags/es.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            Español </a
                        ><a href="#" class="dropdown-item"
                        ><img
                                src="/assets/images/flags/fr.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            Français </a
                        ><a href="#" class="dropdown-item"
                        ><img
                                src="/assets/images/flags/it.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            Italiano </a
                        ><a href="#" class="dropdown-item"
                        ><img
                                src="/assets/images/flags/en.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            English
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
                    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                </div>
                <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                    @csrf
                    <div class="mb-3 row">
                        <label
                            class="col-md-3 col-form-label text-md-end"
                        ></label>
                        <div class="col-md-7">

                            <!-- Content - Login With Google -->
                            <button
                                type="button"
                                class="btn btn-outline-dark w-100 mb-1"
                            >
                                Login with
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
                        >First Name</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                    </div>

                    <!-- last_name -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >Last Name</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                    </div>


                    <!-- phone -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >Phone</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >Email</label
                        >
                        <div class="col-md-7">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-md-end"
                        >Password</label
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
                        >Confirm Password</label
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
                            By clicking Register, I agree that I have read and
                            accepted the IMMO ALL
                            <a href="/" class="small ms-auto router-link-active">
                                Terms of Use and Privacy Policy
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 offset-md-3">
                            Already have login and password?
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
<footer class="footer text-center mx-5 my-2">
    <div class="container">
        <span class="text-muted">Copyright © 2023 ImmoAll Swiss, Inc</span>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
{{--</x-guest-layout>--}}
