<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    @include('includes.styles')

</head>

<body>

    @include('includes.navbar')

    @include('includes.sidebar')
    <main id="main" class="main">
        @yield('page-content')
    </main>


    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>
