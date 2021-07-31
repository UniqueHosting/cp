<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unique Hosting</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ url('css/custom.css') }}">

    </head>

    <body class="antialiased bg-cover" style="background-image:url('images/welcome-page-background.jpg')">
      <div class="h-screen dark:bg-gray-900" style="background-color:rgb(12,25,42,0.9);">
          <div class="w-screen h-screen flex justify-center items-center">
            <div class="rounded-xl p-10 glass">
              <div class="flex justify-center">
                <h1 class="text-gray-100">Welkom bij</h1>
              </div>
              <div class="flex justify-center">
                  <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
              </div>
              <div class="">
                  @if (Route::has('login'))
                      <div class="mt-8 text-center">
                          @auth
                              <a href="{{ url('/dashboard') }}" class="linkButton px-24 py-2">Dashboard</a>
                          @else
                              <a href="{{ route('login') }}" class="linkButton px-24 py-2">Login</a><br><br>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="mt-14 text-gray-100 hover:text-gray-300">Nog geen Klant? Aanmelden</a>
                              @endif

                          @endauth
                      </div>
                  @endif
                </div>
            </div>
          </div>
        </div>
    </body>
</html>
