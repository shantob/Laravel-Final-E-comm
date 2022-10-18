{{--<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>--}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
    <title>Ajab Admin Login</title>
</head>

<body class="bg-dark">
    <div class="col-md-12 d-flex mt-4">
        <div class="col-md-4"></div>
        <div class="card col-md-4">
            <div class="card-body mt-2">
                <!-- Pills navs -->
                <!-- Pills navs -->
                <!-- Pills content -->
                <div class="tab-content">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="text-center mb-3">
                            <p>Reset Password:</p>
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" :value="old('email')" required autofocus />
                                <label class="form-label" for="email"> Type Your Email</label>
                                <x-input-error :messages="$errors->get('email')" class=" form-label text-danger mx-5" />

                            </div>
                            <!-- 2 column grid layout -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                                <x-input-error :messages="$errors->get('password')" class=" form-label text-danger mx-5" />

                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" class="form-control" />
                                <label class="form-label" for="password_confirmation">Repeat password</label>
                                <x-input-error :messages="$errors->get('password_confirmation')" class=" form-label text-danger mx-5" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Save Now</button>
                            <!-- Register buttons -->
                    </form>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>