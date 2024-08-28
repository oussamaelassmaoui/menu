<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 15:50:52 GMT -->
<head>
    

    <meta charset="utf-8" />
            <title>Admin</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('Backend/images/favicon.ico') }}">

       

    <link rel="stylesheet" href="{{ asset('Backend/libs/jsvectormap/css/jsvectormap.min.css') }}">

     <!-- App css -->
     <link href="{{ asset('Backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('Backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('Backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

    
    <!-- Top Bar Start -->
    
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 15:50:52 GMT -->
</html>