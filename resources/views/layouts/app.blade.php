<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Styles -->
        @livewireStyles
        <!-- Scripts -->
        
    </head>
    <body class="font-sans antialiased">
      

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
      
        @stack('modals')
         <script>
            const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 3000,
                   timerProgressBar: true,
                   didOpen: (toast) => {
                       toast.addEventListener('mouseenter', Swal.stopTimer)
                       toast.addEventListener('mouseleave', Swal.resumeTimer)
                   }
               })
           </script>
           @stack('js')
          
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        @livewireScripts
    </body>
</html>
