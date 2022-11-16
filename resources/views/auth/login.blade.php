{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@section('title', 'Login')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">


<body class="cat__pages__login">
    <!-- START: pages/login -->
    <div class="contact-form">
        <img alt="" class="avatar" src="{{ asset('img/logo-kpru.png') }}">
        <h4>Research and Development Institute</h4>
        {{-- @if (isset(Auth::user()->email))
            <script>
                window.location = "/auth/register"
            </script>
        @endif --}}
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label class="form-label">Username</label>
            <input id="validation-email" class="form-control" placeholder="Enter Username" name="email" type="email"
                data-validation="[NOTEMPTY]" required autofocus>
            <label class="form-label">Password</label>
            <input id="validation-password" class="form-control password" name="password" type="password" required
                autocomplete="current-password" placeholder="Enter Password">
            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}
            <div class="d-grid col-6 mx-auto">
                <button type="submit" value="Sign in" name="login">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
    <!-- END: pages/login-alpha -->
</body>
