<html>
<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    <link href="/css/style.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css"> --}}
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    {{-- <script src="/public/assets/vendor/build/ckeditor.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('delivery.menuDelivery')           

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="my-4">
                <div class="" id="innerMain">
                    @yield('content')
                </div>
            </main>

            <!-- Page Footer -->
            <!--Footer container-->
            <footer class="bg-neutral-900 text-center text-white">
                <!--Copyright section-->
                <div
                    class="p-3 text-center"
                    style="background-color: rgba(0, 0, 0, 0.2)">
                    Tổng hợp tin tức: Trần Thị Mỹ Tâm
                </div>
            </footer>
        </div>
</body>
</html>