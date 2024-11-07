<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ZenBlog</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('client.layouts.partials.css')

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            @include('client.layouts.partials.header')

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>
    
    <footer id="footer" class="footer dark-background">

        @include('client.layouts.partials.footer')

    </footer>

    @include('client.layouts.partials.js')

</body>

</html>
