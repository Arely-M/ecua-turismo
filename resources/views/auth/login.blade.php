<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 background-login">
        <div class="m-auto col-lg-8">
            <div class="card login-card login-content">
                <div class="row no-gutters login">
                    <div class="col-md-5 login-card-img">
                        <img src="../img/logo3.png" alt="login" class="" />
                    </div>
                    <div class="col-md-7 row justify-content-center w-100 m-auto login-form">
                        <label for="staticEmail" class="text-cemter h1 mb-2 font-weight-bold">Iniciar Sesión</label>
                        <div class="align-self-cente m-auto form-group w-75">
                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" class="form-label" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordarne') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center mt-4 text-center">
                                    <x-jet-button class="btn rounded btn-login w-100">
                                        {{ __('Ingresar') }}
                                    </x-jet-button>
                                    @if (Route::has('password.request'))
                                    <a class="text-decoration-none underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('¿Olvido su contraseña?') }}
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>