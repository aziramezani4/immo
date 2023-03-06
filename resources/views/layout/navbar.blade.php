<nav
    data-v-6dde423b=""
    class="navbar navbar-expand-lg navbar-light bg-white"
>
    <div data-v-6dde423b="" class="container">
        <a data-v-6dde423b="" href="{{route('home')}}" class="navbar-brand"
        ><img
                data-v-6dde423b=""
                src="/assets/images/immoall-logo.png"
                height="30"
                class=""
            /></a>
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
            <div data-v-6dde423b="">
                <ul data-v-6dde423b="" class="navbar-nav">
                    <li data-v-6dde423b="" class="nav-item">
                        <a
                            data-v-6dde423b=""
                            href="{{route('create_peoperty')}}"
                            class="nav-link"
                        >
                            Proceed to advertise
                        </a>
                    </li>
                </ul>
            </div>
            <ul data-v-6dde423b="" class="navbar-nav ms-auto">
                <li data-v-6dde423b="" class="nav-item">
                    <a data-v-6dde423b="" href="{{route('home')}}" class="nav-link">
                        Home Page
                    </a>
                </li>
                <li data-v-6dde423b="" class="nav-item">
                    <a
                        data-v-6dde423b=""
                        href="{{route('profile')}}"
                        class="nav-link"
                    >
                        Settings
                    </a>
                </li>
                <li data-v-6dde423b="" class="nav-item">
                    <a
                        data-v-6dde423b=""
                        href="{{route('myPropertiess')}}"
                        class="nav-link"
                    >
                        My Properties
                    </a>
                </li>
                <li data-v-6dde423b="" class="nav-item dropdown">
                    <a
                        data-v-6dde423b=""
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle text-dark"
                    >
                        {{auth()->user()->first_name}}{{'   '.auth()->user()->last_name}}
                        <img
                            data-v-6dde423b=""
                            src="https://www.gravatar.com/avatar/b03b8002148aaa0a74094f244966f863.jpg?s=200&amp;d=mp"
                            tag="Javad Salehnia"
                            class="rounded-circle profile-photo me-1"
                        /></a>
                    <div data-v-6dde423b="" class="dropdown-menu">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
{{--                        <a data-v-6dde423b="" href="#" class="dropdown-item ps-3"--}}
{{--                        ><svg--}}
{{--                                data-v-6dde423b=""--}}
{{--                                aria-hidden="true"--}}
{{--                                focusable="false"--}}
{{--                                data-prefix="fas"--}}
{{--                                data-icon="sign-out-alt"--}}
{{--                                role="img"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                                class="svg-inline--fa fa-sign-out-alt fa-w-16 fa-fw"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    data-v-6dde423b=""--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"--}}
{{--                                    class=""--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
{{--                            Logout--}}
{{--                        </a>--}}
                    </div>
                </li>
                <li data-v-6dde423b="" class="nav-item dropdown">
                    <a
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle"
                    ><img
                            src="/assets/images/flags/us.svg"
                            alt="flag"
                            width="20"
                            height="20"
                            class="me-1"
                        /></a>
                    <div class="dropdown-menu dropdown-menu-end">

                    @foreach($languages as $item)

                            <a href="/{{$item->lang_code}}/{{request()->segment(2)}}" class="dropdown-item"
                            >
                            <img
                                src="/assets/images/flags/{{$item->lang_flag}}.svg"
                                alt="flag"
                                width="20"
                                height="20"
                            />
                            {{$item->lang_name}}</a
                        >
                        @endforeach

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
