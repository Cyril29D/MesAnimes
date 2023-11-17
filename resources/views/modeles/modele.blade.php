<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('modeles.entete')
</head>

<body class="home">

    @include('modeles.menu')
    <!-- container -->
    <main id="main">

        <div class="container">
            <!-- Content -->
            @yield('content')
        </div>
    </main>
    @include('modeles.pied')
</body>

</html>